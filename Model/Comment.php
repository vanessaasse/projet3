<?php

require_once 'Framework/Model.php';

class Comment extends Model
{
    /**
     * Afficher les commentaires d'un post
     * @param $postId
     */
    public function getComments($postId)
    {
        $sql ='SELECT id, author, com_content, DATE_FORMAT(date, \'%d/%m/%Y\') AS date_fr FROM comment WHERE post_id = ?';
        $comments = $this->executeRequest($sql, array($postId));
        return $comments;
    }


    /**
     * Permet l'enregistrement d'un nv commentaire lors d'une saisie dans le formulaire présent dans Post.php
     * @param $author
     * @param $comcontent
     * @param $postId
     */
    public function postComment($com_postId, $author, $comcontent)
    {
        $sql = 'INSERT INTO comment(post_id, author, com_content, date)' . ' values(?, ?, ?, NOW())';
        $comment = $this->executeRequest($sql, array($com_postId, $author, $comcontent));
        return $comment;
    }


    /**
     * Méthode pour compter le nombre de commentaires
     * count permet de compter le nombre d'enregistrement dans la table.
     * @return mixed
     */
    public function getNumberComments()
    {
        $sql = 'SELECT count(*) as nbComments from comment';
        $result = $this->executeRequest($sql);
        $line = $result->fetch(); // Le résultat comporte toujours une ligne.
        return $line['nbComments'];
    }

    public function lastComment()
    {
        $sql = 'SELECT id, author, com_content, DATE_FORMAT(date, \'%d/%m/%Y\') AS date_fr FROM comment ORDER BY date DESC LIMIT 0,1';
        $comments = $this->executeRequest($sql);
        return $comments;
    }

    /**
     * Méthode pour enregistrer le signalement d'un commentaire dans la BDD.
     */
    public function signal($id)
    {
        $sql = 'UPDATE comment SET signal_comment = 1 WHERE id = ?';
        $comment = $this->executeRequest($sql, array($id));
        return $comment;
    }


    public function getComment($id)
    {
        $sql = 'SELECT id, author, com_content, DATE_FORMAT(date, \'%d/%m/%Y\') AS date_fr FROM comment WHERE id = ?';
        $comment = $this->executeRequest($sql, array($id));

        if($comment->rowCount() > 0) // RowCount retourne le nombre de lignes affectées par le dernier appel à la fonction PDOStatement
        {
            return $comment->fetch(); // Accès à la 1e ligne de résultat
        }

        else
        {
            throw new Exception('Aucun commentaire ne correspond à l\'identifiant suivant : ' .$id . '.<br/>');
        }
    }
}


