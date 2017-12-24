<?php

// dans cette classe, on se connecte à la BDD

abstract class Model // une classe abstraite ne peut pas être instanciée, pas de création d'objet
{
    private $db; // attribut pour se connecter à la base de données



    protected function executeRequest ($sql, $params = null)
    {
        if($params == null)
        {
            $result = $this->getDb()->query($sql); // execution directe
        }
        else
        {
            $result = $this->getDb()->prepare($sql); // requête préparée
            $result->execute($params);
        }

        return $result;
    }



//  fonction privée, uniquement attachée à cette classe
    private function getDb()
    {
        if($this->db == null)
        {
            $this->db = new PDO('mysql:host=localhost;dbname=projet;charset=utf8','root', 'root',
            array (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION));
            return $this->db;
        }
    }
}