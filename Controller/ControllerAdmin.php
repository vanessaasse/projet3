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


    /*

    public function create()

    public function edit()
    {
        $id = $this->request->getParameter("id");
        //1- recuperer le post associé à l'id $post


        //2- si j'arrive sur cettepage en POST avec title et content de soumis
             // mettre à jour $post dans la base et redirection
        // sinon
            //

        $title = $this->request->getParameter("title"); // name dans le formulaire
        $content = $this->request->getParameter("content"); // content dans le formulaire
        // Sauvegarde du commentaire
        $this->post->editPost($title, $content); // va chercher la méthode dans le Model post l.63


        $this->buildView(array('title' => $title, 'content'=> $content));
    } */

}
