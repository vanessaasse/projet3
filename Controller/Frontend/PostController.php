<?php

require_once 'Model/Post.php';
require_once 'Model/Comment.php';
require_once 'View/View.php';

class PostController
{
    private $post;
    private $comment;

    public function __construct()
    {
        $this->post = new Post();
        $this->comment = new Comment();
    }

    // pour afficher la liste des chapitres dans ChapterView
    function chapters()
    {
        $posts = $this->post->getPosts(); // va chercher la méthode getPosts dans le model Post.php l.20
        $view = new View("Chapters"); // Création d'un nouveau fichier vue ChapterView.php
        $view->build(array('posts' => $posts));
    }

    //Affiche les détails d'un post
    public function post($postId)
    {
        $post = $this->post->getPost($postId); // va chercher la méthode GetPost($postId) dans le model Post.php l.33
        $comments = $this->comment->getComments($postId); // va chercher la méthode GetComments($postId) dans le model Comment.php l.11
        $view = new View("Post"); // Création d'un nouveau fichier vue PostView.php
        $view->build(array('post' => $post, 'comments' => $comments));
    }


    //Ajoute un nouveau commentaire dans un post
    public function addcomment($com_postId, $author, $comcontent)
    {
        // Sauvegarde du commentaire
        $this->comment->postComment($com_postId, $author, $comcontent); // va chercher la méthode dans le model Comment.php l.25
        // Actualisation de l'affichage de billet. Donc pas de génération de nouvelle vue
        $this->post($_GET['id']);

    }
}
