<?php

namespace Vanessa\Projet3\Framework;

// dans cette classe, on se connecte à la BDD

//require_once 'Configuration.php';

abstract class Model // une classe abstraite ne peut pas être instanciée, pas de création d'objet
{
    private static $db; /* attribut pour se connecter à la base de données
    Static >> On ne crée qu'une instance de la class PDO partagée par les classes dérivées du Model.
    Ainsi, l'opération de connexion à la base de données ne sera réalisée qu'une seule fois. */


    protected function executeRequest ($sql, $params = null)
    {
        if($params == null)
        {
            $result = self::getDb()->query($sql); // execution directe
        }
        else
        {
            $result = self::getDb()->prepare($sql); // requête préparée
            $result->execute($params);
        }

        return $result;
    }



//  fonction privée, uniquement attachée à cette classe
    private static function getDb()
    {
        if(self::$db === null)
        {
            // Récupération des paramètres de configuration BD - dans dossier config
            $dsn = Configuration::get("dsn");
            $login = Configuration::get("login");
            $password = Configuration::get("password");

            // Création de la connexion à la base de données
            self::$db = new \PDO($dsn, $login, $password,
            array (\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION));
        }
        return self::$db;
    }
}