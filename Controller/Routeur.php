<?php

require_once 'Frontend/PostController.php';
require_once 'Frontend/HomeController.php';
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
                if ($_GET['action'] == 'post') {
                    $postId = intval($this->getParameter($_GET, 'id'));
                    if ($postId != 0) {
                        $this->postCtl->post($postId);
                    }
                    else
                            throw new Exception("Identifiant de post non valide");
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