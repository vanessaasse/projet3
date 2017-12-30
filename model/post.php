<?php

require_once 'framework/model.php';

class Post extends Model
{
    // Pour afficher le dernier chapitre en home
    public function lastPost()
    {
        $sql = 'SELECT id, title, content, DATE_FORMAT(date, \'%d/%m/%Y\') AS date_fr FROM post ORDER BY date DESC LIMIT 0,1';
        $posts = $this->executeRequest($sql);
        return $posts;
    }


    /**
     * Pour afficher tous les posts
     * @return PDOStatement
     */
    public function getPosts()
    {
        $sql = 'SELECT id, title, content, DATE_FORMAT(date, \'%d/%m/%Y\') AS date_fr FROM post ORDER BY date';
        $posts = $this->executeRequest($sql);
        return $posts;
    }

    /**
     * Pour afficher le contenu d'un post
     * @param $postId
     * @return mixed
     * @throws Exception
     */
    public function getPost($postId)
    {
        $sql = 'SELECT id, title, content, DATE_FORMAT(date, \'%d/%m/%Y\') AS date_fr FROM post WHERE id = ?';
        $post = $this->executeRequest($sql, array($postId));

        if($post->rowCount() > 0) // RowCount retourne le nombre de lignes affectées par le dernier appel à la fonction PDOStatement
        {
            return $post->fetch(); // Accès à la 1e ligne de résultat
        }

        else
        {
            throw new Exception('Aucun billet ne correspond à l\'identifiant suivant : ' .$postId . '.<br/>');
        }
    }

}
