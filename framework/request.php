<?php


// Modelise la requête
// Au début du routage (routeur.php), un object Request est instancié afin de stocker les paramètres de la requête reçue.

class Request
{
    // paramètres de la requête
    private $parameters;

    public function __construct($parameters)
    {
        $this->parameters = $parameters;
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


}