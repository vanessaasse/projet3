<?php

require_once 'Model.php';

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
     * Ajouter un comment dans un post via le formulaire présent dans PostView.php
     * @param $author
     * @param $com_content
     * @param $postId
     */
    public function NewComment($author, $com_content, $postId) {
        $sql = 'insert into comment(date, author, com_content, id)' . ' values(?, ?, ?, ?)';
        $date = date(DATE_W3C);  // Récupère la date courante
        $this->executeRequest($sql, array($date, $author, $com_content, $postId));
    }
}


