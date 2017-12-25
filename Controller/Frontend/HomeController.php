<?php

require_once 'Model/Post.php';
require_once 'View/Frontend/View.php';

class HomeController
{
    private $post;


    public function __construct()
    {
        $this->post = new Post();
    }

    // Affiche la liste de tous les posts
    public function home()
    {
        //va chercher la méthode getPosts dans le modele/class Post l.11 et va chercher la méthode Build l.25 dans la vue View.php
        $posts = $this->post->getPosts();
        // détermine la nouvelle vue en fonction de l'action. En lien avec la méthode __construct($action) de la View.php l.13
        $view = new View("Home");
        $view->build(array('posts' => $posts));
    }
}
