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
            // si tous les champs sont saisis, enregistrement dans la BDD.
            $title = $this->request->getParameter('title');
            $content = $this->request->getParameter('content');
            $this->post->addPost($title, $content);
            $this->redirect("admin", "chapters"); // une fois le post créé, je redirige vers la vue Chapters
    }

        // j'arrive sur la vue en Get
        else
        {
            if($title && $content && is_null($title)) // si les champs titre est NULL.
            {
                $this->buildView(array($errorMsg ?? 'errorMsg' ?? 'Le champs titre doit être saisi.'));
                var_dump('titre');
            }

            elseif($title && $content && is_null($content)) //si les champs contenu est NULL
            {
                $this->buildView(array($errorMsg ?? 'errorMsg'?? 'Le champs contenu doit être saisi.'));
                var_dump('contenu');
            }

            else
            {
            $this->buildView(array('title' => $title, 'content' => $content));
            var_dump('vue simple');
            }
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

   //Affiche tous les commentaires dans l'admin
    public function Comments()
    {
        $comments = $this->comment->getAllComments(); // va chercher la méthode getPosts dans le Model Post.php l.20
        $this->buildView(array('comments' => $comments));
    }



}
