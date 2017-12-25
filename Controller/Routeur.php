<?php

require_once 'Controller/Frontend/PostController.php';
require_once 'Controller/Frontend/HomeController.php';
require_once 'View/Frontend/View.php';

class Routeur
{
    private $homeCtl;
    private $postCtl;

    public function __construct()
    {
        $this->$homeCtl = new HomeController();
        $this->postCtl = new PostController();
    }

    // traite une requête entrante
    public function request()
    {
        try
        {
            if(isset($_GET['action']))
            {
                if($_GET['action'] == 'post');
                {
                    if(isset($_GET['id']))
                    {
                        $postId == intval($_GET['id']); //intval retourne la valeur numérique entière équivalente d'une variable
                        if($postId != 0) // != signifie "différent de"
                        {
                            $this->$postCtl->post($postId);
                        }
                        else
                        {
                            throw new Exception("Identifiant de post non valide");
                        }
                    }
                    else
                    {
                        throw new Exception("Identifiant de post non défini");
                    }
                }
                else
                {
                    throw new Exception("Action non valide");
                }
            }
            else // Aucune action définie : affichage de l'accueil
            {
                $this->homeCtl->home();
            }
        }

        catch (Exception $e)
        {
            $this->erreur($e->getMessage());
        }
    }

    //Affiche une erreur
    private function erreur($error)
    {
        $view = new Vue("Error");
        $view->build(array('error' => $error));
    }
}