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


    /**
     * Méthode pour afficher tous les chapitres dans la vue Chapters
     */
    public function chapters()
    {
        $posts = $this->post->getPosts(); // va chercher la méthode getPosts dans le Model Post.php l.20
        $this->buildView(array('posts' => $posts));
    }

    /**
     * Fonction pour afficher un post en entier
     */
    public function post()
    {
        $postId = $this->request->getParameter("id"); /* le parametre disparait lors de l'annonce de "public function post($postId)". On l'annonce
 du coup en début de la méthode en faisant appel à la méthode getParameter de la class Request */
        $post = $this->post->getPost($postId); // va chercher la méthode GetPost($postId) dans le Model Post.php l.33
        $this->buildView(array('post' => $post));
    }

    /**
     * Fonction pour créer un post
     */
    public function create()
    {
        // j'appelle toutes les variables qui peuvent arriver par défaut dans la buildview
        $title = $this->request->getParameterByDefault('title');
        $content = $this->request->getParameterByDefault('content');
        $errors = []; // entre crochets car c'est un array dans lequel peuvent s'afficher plusieurs messages d'erreurs.

        // j'arrive en post, et toutes les données sont saisies dans le formulaire
        if($title && $content)
        {
            // si tous les champs sont saisis, enregistrement dans la BDD.
            $this->post->addPost($title, $content);
            $this->redirect("admin", "chapters"); // une fois le post créé, je redirige vers la vue Chapters
        }

        // j'arrive sur la vue en POST mais le champs titre ou le champs contenu n'est pas saisi
        // j'affiche des erreurs insérées dans un tableau.
        else if($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            if(!$title) // si le titre n'est pas saisi, d'où le !
            {
                $errors[] = "Le champs Titre n'a pas été saisi.";
            }

            if(!$content) // si le contenu n'est pas saisi, d'où le !
            {
                $errors[] = "Le champs Contenu n'a pas été saisi.";
            }
        }

        // La buildview affiche tous les paramètres affichés par défaut l.68 à 71.
        $this->buildView(array('title' => $title, 'content' => $content, 'errors' => $errors));
    }

    /**
     * Fonction pour modifier un post dans le BDD
     */
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

    /**
     * Fonction pour supprimer un post de la BDD
     */
    public function delete()
    {
        $post['id'] = $this->request->getParameter('id'); // récupérer le paramètre de l'ID
        $this->post->deletePost($post['id']);
        $this->redirect("admin", "chapters"); // une fois le post supprimé, je redirige vers la vue chapters
    }

   //Affiche tous les commentaires dans l'admin, dans la vue admin/comments
    public function Comments()
    {
        $comments = $this->comment->getAllComments();
        $this->buildView(array('comments' => $comments));
    }



    /*public function profil()
    {
        $users['id'] = $this->request->getParameter('id');
        $user = $this->user->User($id);

        if ($this->request->parameterExist("newpassword")) {
            $newpassword = $this->request->getParameter("newpassword");

            }
            else
            {
                $this->buildView(array('user' => $user));
            }

    }*/



}
