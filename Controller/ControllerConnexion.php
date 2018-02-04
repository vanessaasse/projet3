<?php

require_once 'Framework/Controller.php';
require_once 'Model/User.php';

/**
 * Ce controller sert à gérer la connexion et la déconnexion d'un utilisateur.
 * Ce controller a besoin de vérifier si un utilisateur existe dans la BDD.
 * Pour cela, on utilise une class User ajoutée au Model.
 *
 */
class ControllerConnexion extends Controller
{
    /**
     * @var User
     */
    private $user;


    public function __construct()
    {
        $this->user = new User();
    }


    public function index()
    {
        $this->buildView();
    }


    /**
     * Si le couple login/mot de passe saisi correspond bien à un utilisateur existant,
     * son idenfiant ainsi que son login sont ajoutés dans la session,
     * puis l'utilisateur (maintenant authentifié) est redirigé vers le contrôleur d'administration.
     *
     */
    public function connect()
    {
        if($this->request->parameterExist("login") && $this->request->parameterExist("password"))
        {
            $login = $this->request->getParameter("login");
            $password = $this->request->getParameter("password");
            $user = $this->user->getUser($login);
            if(password_verify($password, $user['password']))
            {

                $this->request->getSession()->setAttribut("idUser", $user['idUser']);
                $this->request->getSession()->setAttribut("login", $user['login']);
                $this->redirect("admin");
            }
            /*else
            {
                $this->buildView(array('errorMsg' => 'Login et/ou mot de passe incorrects'), "index");
            }*/
        }
        else
        {
            $this->buildView(array('errorMsg' => 'Action impossible : login et/ou mot de passe non définis.'), "index");
            //throw new Exception("Action impossible : login et mot de passe non définis.");
        }
    }


    public function disconnect()
    {
        $this->request->getSession()->destroy();
        $this->redirect("Home");
    }

}