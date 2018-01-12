<?php

require_once 'Framework/Controller.php';

/**
 * Classe parente des controllers soumis à authentification (controlleradmin notamment)
 * Rappel : une classe abstraite ne peut pas être instanciée. Elle appelle uniquement une ou des méthodes.
 */

abstract class ControllerSecure extends Controller
{
    public function executeAction($action)
    {
        /*
         * Vérifie sur les données utilisateurs sont ok pour accéder à l'administration (login et password).
         * Si oui, l'utilisateur est authentifié : l'action continue.
         * Si non, l'utilisateur est renvoyé par la page d'authentification.
         */
        if($this->request->getSession()->existAttribut("idUser"))
        {
            parent::executeAction($action);
        }
        else
        {
            $this->redirect("Connexion");
        }

    }
}
