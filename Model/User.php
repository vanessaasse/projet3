<?php

require_once "Framework/Model.php";

/**
 * Les méthodes de la classe User permettent de vérifier si un utilisateur existe
 * et de gérer ses propriétés (id, login, password).
 */

class User extends Model
{
    /**
     * Vérifie que l'utilisateur existe dans la BDD
     * $param $login
     * $param $password
     * return boolean vrai si l'utilisateur existe
     */
    public function connect($login, $password)
    {
        $sql = 'SELECT id FROM users WHERE login=? AND password=?';
        $user = $this->executeRequest($sql, array($login, $password));
        return ($user->rowCount() == 1);
    }

    /**
     * Renvoie un utilisateur existant dans la BDD
     *
     */
    public function getUser($login)
    {
        $sql = 'SELECT id as idUser, login, password FROM users WHERE login=? ';
        $user = $this->executeRequest($sql, array($login));
        if ($user->rowCount() == 1)
        {
            return $user->fetch(); // Accès à la première ligne de résultat
        }
        else
        {
            throw new Exception("Aucun utilisateur ne correspond aux identifiants fournis.");
        }
    }


    public function newPassword($newpassword, $id)
    {
        $newpassword = password_hash($newpassword, $id);
        $sql = 'UPDATE users SET password = ? WHERE id = ?';
        $user = $this->executeRequest($sql, array($newpassword, $id));
        return $user;
    }
}
