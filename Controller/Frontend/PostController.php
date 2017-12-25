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

    //Affiche les détails d'un post
    public function post($postId)
    {
        $post = $this->post->getPost($postId);
        $comments = $this->comment->getComments($postId);
        $view = new View("Post");
        $view->build(array('post' => $post, 'comments' => $comments));
    }
}