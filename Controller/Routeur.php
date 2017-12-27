<?php

require_once 'PostController.php';
require_once 'HomeController.php';
require_once 'View/View.php';

class Routeur
{
    private $homeCtl;
    private $postCtl;

    public function __construct()
    {
        $this->homeCtl = new HomeController();
        $this->postCtl = new PostController();
    }

    // traite une requête entrante
    public function request()
    {
        try {
            if (isset($_GET['action'])) {

                    // afficher l'ensemble des chapitres dans ChaptersView
                if ($_GET['action'] == 'Chapters') {
                    $this->postCtl->chapters();
                }

                    // afficher le post en entier dans postView
                    elseif ($_GET['action'] == 'Post') {
                        $postId = intval($this->getParameter($_GET, 'id'));
                        if ($postId != 0) {
                            $this->postCtl->post($postId);
                        }
                        else
                                throw new Exception("Identifiant de post non valide");
                    }

                    elseif ($_GET['action'] == 'Addcomment')
                    {
                        $com_postId = $this->getParameter($_GET, 'id'); // relié au formulaire de PostView l.29
                        $author = $this->getParameter($_POST, 'name'); // relié au formulaire de PostView l.26
                        $comcontent = $this->getParameter($_POST, 'newcomment'); // relié au formulaire de PostView l.28
                        $this->postCtl->addcomment($com_postId, $author, $comcontent); // appelle la méthode dans le PostController l. 37

                    }
                else
                    throw new Exception("Action non valide");
            } else
                $this->homeCtl->home();
        }

        catch(Exception $e)
        { // S'il y a eu une erreur
            $this->error($e->getMessage());
        }
    }

    //Affiche une erreur
    private function error($errorMessage)
    {
        $view = new View ("Error");
        $view->build(array('errorMessage' => $errorMessage));
    }

    // Recherche un paramètre dans un tableau
    private function getParameter($tableau, $nom) {
        if (isset($tableau[$nom])) {
            return $tableau[$nom];
        }
        else
            throw new Exception("Paramètre '$nom' absent");
    }
}
