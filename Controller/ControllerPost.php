<?php

require_once 'Framework/Controller.php';
require_once 'Model/Post.php';
require_once 'Model/Comment.php';

class ControllerPost extends Controller
{
    private $post;
    private $comment;

    public function __construct()
    {
        $this->post = new Post();
        $this->comment = new Comment();
    }

    // pour afficher la liste des chapitres dans ChapterView
    // Appelle la methode abstraite index() du controller.php l.36.
    function index()
    {
        $posts = $this->post->getPosts(); // va chercher la méthode getPosts dans le model Post.php l.20
        $this->buildView(array('posts' => $posts));
    }

    //Affiche les détails d'un post
    // Appelle la class Request car il y a un paramètre
    public function post()
    {
        $postId = $this->request->getParameter("id"); /* le parametre disparait lors de l'annonce de "public function post($postId)". On l'annonce
 du coup en début de la méthode en faisant appel à la méthode getParameter de la class Request */
        $post = $this->post->getPost($postId); // va chercher la méthode GetPost($postId) dans le model Post.php l.33
        $comments = $this->comment->getComments($postId); // va chercher la méthode GetComments($postId) dans le model Comment.php l.11
        $this->buildView(array('post' => $post, 'comments' => $comments));
    }


    //Ajoute un nouveau commentaire dans un post
    public function addcomment()
    {
        $com_postId = $this->request->getParameters("post_id");
        $author = $this->request->getParameters("author");
        $com_content = $this->request->getParameters("com_content");

        // Sauvegarde du commentaire
        $this->comment->postComment($com_postId, $author, $comcontent); // va chercher la méthode dans le model Comment.php l.25
        // Actualisation de l'affichage de billet. Donc pas de génération de nouvelle vue
        $this->executeAction("post");

    }
}
