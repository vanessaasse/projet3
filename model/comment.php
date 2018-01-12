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
     * Permet l'enregistrement d'un nv commentaire lors d'une saisie dans le formulaire présent dans post.php
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
     * Fonction pour compter le nombre de commentaires
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
}


