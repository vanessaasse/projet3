<?php

/**
* Classe modélisant la session.
* Encapsule la superglobale $_SESSION.
*/

class Session
{
    /**
     * Démarre ou restaure une session
     */
    public function __construct()
    {
        session_start();
    }


    /**
     * Détruit la session actuelle
     */
    public function destroy()
    {
        session_destroy();
    }


    /**
     * Ajoute un attribut à la session
     *
     * @param $name Nom de l'attribut
     * @param $value Valeur de l'attribut
     */
    public function setAttribut($name, $value)
    {
        $_SESSION[$name] = $value;
    }


    /**
     * Renvoie vrai si l'attribut existe dans la session
     * @param $name
     * @return bool
     */
    public function existAttribut($name)
    {
        return (isset($_SESSION[$name]) && $_SESSION[$name] != "");
    }


    /**
     * Renvoie la valeur de l'attribut demandé
     *
     */
    public function getAttribut($name)
    {
        if($this->existAttribut($name))
        {
            return $_SESSION[$name];
        }
        else
        {
            throw new Exception("Attribut '$name' absent de la session.");
        }
    }
}
