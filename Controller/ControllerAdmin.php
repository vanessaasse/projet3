<?php

require_once 'ControllerSecure.php';
require_once 'Model/Post.php';
require_once 'Model/Comment.php';

/**
 * Controller des actions de l'espace administration du site
 */

class ControllerAdmin extends ControllerSecure
{
    private $post;
    private $comment;

    /**
     * Constructeur
     *
     */
    public function __construct()
    {
        $this->post = new Post;
        $this->comment = new Comment;
    }


    /**
     * Fonction pour afficher le nombre de posts et de commentaires lors que l'on est connecté
     * à l'espace administrateur.
     */
    public function index()
    {
        $nbPosts = $this->post->getNumberPosts();
        $nbComments = $this->comment->getNumberComments();
        $posts = $this->post->lastPost();
        $comments = $this->comment->lastComment();
        $login = $this->request->getSession()->getAttribut("login");
        $this->buildView(array('nbPosts' => $nbPosts, 'nbComments' => $nbComments, 'posts'=>$posts, 'comments' =>$comments, 'login' => $login));
    }

    public function chapters()
    {
        $posts = $this->post->getPosts(); // va chercher la méthode getPosts dans le Model Post.php l.20
        $this->buildView(array('posts' => $posts));
    }

    public function post()
    {
        $postId = $this->request->getParameter("id"); /* le parametre disparait lors de l'annonce de "public function post($postId)". On l'annonce
 du coup en début de la méthode en faisant appel à la méthode getParameter de la class Request */
        $post = $this->post->getPost($postId); // va chercher la méthode GetPost($postId) dans le Model Post.php l.33
        $this->buildView(array('post' => $post));
    }


    public function create()
    {
        $title = $this->request->getParameterByDefault('title');
        $content = $this->request->getParameterByDefault('content');

        // j'arrive en post car des données sont saisies dans le formulaire
        if($title && $content)
        {
            if(empty($title) OR empty($content))
            {
                $this->buildView(array('title' => $title, 'content' => $content));
                $errorMsg = "Tous les champs ne sont pas saisis";
                echo $errorMsg;
            }
            else
            {
            $title = $this->request->getParameter('title');
            $content = $this->request->getParameter('content');
            $this->post->addPost($title, $content);
            $this->redirect("admin", "chapters"); // une fois le post créé, je redirige vers la vue Chapters
            }
        }

        // j'arrive sur la vue en Get
        else
        {
            $this->buildView(array('title' => $title, 'content' => $content));
        }
    }

    public function edit()
    {
        $id =  $this->request->getParameter('id'); // récupérer le paramètre de l'ID
        $post = $this->post->getPost($id); // je récupère le post

        // j'arrive en post car des données sont saisies dans le formulaire
        if($this->request->parameterExist('title') && $this->request->parameterExist('content')) {

            $this->post->updatePost(
                $this->request->getParameter('title'),
                $this->request->getParameter('content'),
                $id
            );

            $this->redirect("admin", "post/" . $post['id']); // une fois le post créé, je redirige vers la vue Admin/post/iddupost
        }

        // j'arrive sur la vue en Get
        $this->buildView(array('post'=>$post));
    }

    public function delete()
    {
        $post['id'] = $this->request->getParameter('id'); // récupérer le paramètre de l'ID
        $this->post->deletePost($post['id']);
        $this->redirect("admin", "chapters"); // une fois le post supprimé, je redirige vers la vue chapters
    }
}
