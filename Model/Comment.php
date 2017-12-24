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
}
