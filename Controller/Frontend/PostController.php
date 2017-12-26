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
        $posts = $this->post->getPosts();
        $view = new View("Chapters");
        $view->build(array('posts' => $posts));
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
