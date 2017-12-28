<?php

require_once 'Controller.php';
require_once 'Request.php';
require_once 'View.php';

class Routeur
{
    //Route une requête entrante : exécute l'action associée
    public function pathRequest()
    {
        try {

            // Instancie la class Request.php
            // On reçoit les paramètres de la requête via GET et POST
            // array_merge fusionne plusieurs tableaux en un seul
            $request = new Request(array_merge($_GET, $_POST));

            $controller = $this->createController($request);
            $action = $this->createAction($request);

            $controller->executeAction($action);

        }

        catch (Exception $e) {
            $this->manageError($e);
        }
    }


    // Crée le contrôleur approprié en fonction de la requête reçue
    private function createController(Request $request)
    {
        $controller = "Home"; // Contrôleur par défaut

        if ($request->parameterExist('controller')) {
            $controller = $request->getParameter('controller');
            // Première lettre en majuscule
            $controller = ucfirst(strtolower($controller));
        }

        // Création du nom du fichier du contrôleur
        $classController = "Home" . $controller;
        $fileController = "Home/" . $classController . ".php";
        if (file_exists($fileController)) {
            // Instanciation du controller adapté à la requête
            require ($fileController);
            $controller = new $classController();
            $controller->setRequest($request);
            return $controller;

        } else
            throw new Exception("Fichier '$fileController' introuvable");
    }

    private function createAction(Request $request)
    {
        $action = "index"; // Action par défaut
        if ($request->parameterExist('action')) {
            $action = $request->getParameter('action');
        }

        return $action;
    }


    // Gère une erreur d'exécution (Exception)
    private function manageError(Exception $exception)
    {
        $view = new View('error');
        $view->build(array('errorMsg' => $exception->getMessage()));
    }
}