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
        $this->post = new Post;
        $this->comment = new Comment;
    }

    //Affiche les détails d'un post
    public function post()
    {
        $post = $this->post->getPost($_GET['id']);
        $comments = $this->comment->getComments($_GET['id']);
        $view = new View("Post");
        $view->build(array('post' => $this->post, 'comments' => $comments));
    }
}