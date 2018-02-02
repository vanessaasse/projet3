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
    // Appelle la methode abstraite index() du Controller.php l.36.
    public function index()
    {
        $posts = $this->post->getPosts(); // va chercher la méthode getPosts dans le Model Post.php l.20
        $this->buildView(array('posts' => $posts));
    }

    //Affiche les détails d'un post
    // Appelle la class Request car il y a un paramètre
    public function post()
    {
        $postId = $this->request->getParameter("id"); /* le parametre disparait lors de l'annonce de "public function post($postId)". On l'annonce
 du coup en début de la méthode en faisant appel à la méthode getParameter de la class Request */
        $post = $this->post->getPost($postId); // va chercher la méthode GetPost($postId) dans le Model Post.php l.33
        $comments = $this->comment->getComments($postId); // va chercher la méthode GetComments($postId) dans le Model Comment.php l.11
        $this->buildView(array('post' => $post, 'comments' => $comments));
    }


    //Ajoute un nouveau commentaire dans un post
    public function addComment()
    {
        $com_postId = $this->request->getParameter("id"); // reprend l'id de l'url
        $author = $this->request->getParameter("name"); // name dans le formulaire
        $comcontent = $this->request->getParameter("comment"); // content dans le formulaire

        // Sauvegarde du commentaire
        $this->comment->postComment($com_postId, $author, $comcontent); // va chercher la méthode dans le Model Comment.php l.25
        // Actualisation de l'affichage de billet. Donc pas de génération de nouvelle vue
        $this->executeAction("post");

    }

    /*
    //signale un commentaire
    public function signal()
    {
        $id = $this->request->getParameter('id'); // récupérer l'id du commentaire
        $com = $this->comment->getComment($id);


        if($com)
        {

            $this->comment->updateComment($comment['id']);
        }

        redirection vers le post contenant le commentaire
    }
*/

}
