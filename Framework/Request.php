<?php

namespace Vanessa\Projet3\Framework;

require_once 'Session.php';


/*  Cette classe modelise une requête
    Le seul attribut de cette classe ($parameters) est un tableau associatif rassemblant les paramètres de la requête.
    Au début du routage (Routeur.php), un object Request est instancié afin de stocker les paramètres de la requête reçue. */

class Request
{
    // paramètres de la requête
    private $parameters;

    // objet session associée à la requête
    /** @var Session */
    private $session;

    /** Constructeur
     *
     * @param $parameters Paramètres de la requête
     * @param session
     */
    public function __construct($parameters)
    {
        $this->parameters = $parameters;
        $this->session = new Session();
    }


    /*
     * Renvoie l'objet Session associé à la requête
     *
     * @return Session objet Session
     */
    public function getSession()
    {
        return $this->session;
    }



    //Renvoie vrai si le paramètre existe dans la requête
    public function parameterExist($name)
    {
        return(isset($this->parameters[$name]) && $this->parameters[$name] != "");
    }

    // Renvoie la valeur du paramètre demandé
    // Lève une exception si le paramètre est introuvable
    public function getParameter($name)
    {
        if ($this->parameterExist($name))
        {
            return $this->parameters[$name];
        }
        else
            throw new Exception("Paramètre ' $name ' absent de la requête.");
    }

    // Renvoie les valeur des paramètres par défaut
    public function getParameterByDefault($name, $default = null){

        try
        {
            return $this->getParameter($name);
        }
        catch(Exception $e)
        {
                 return $default;
        }

    }




}