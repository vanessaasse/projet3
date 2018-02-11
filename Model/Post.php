<?php

require_once 'Framework/Model.php';

class Post extends Model
{

    // Pour afficher le dernier chapitre en home
    // vue home/index
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
        $sql = 'SELECT p.id, title, content, DATE_FORMAT(p.date, \'%d/%m/%Y\') AS date_fr, count(c.id) as nbcomment FROM post as p 
        LEFT JOIN comment as c ON p.id = c.post_id GROUP BY p.id ORDER BY p.date';
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


    /**
     * Méthode pour compter le nombre de posts publiés.
     * count permet de compter le nombre d'enregistrement dans la table.
     * @return mixed
     */
    Public function getNumberPosts()
    {
        $sql = 'SELECT count(*) as nbPosts from post';
        $result = $this->executeRequest($sql);
        $line = $result->fetch(); // Le résultat comporte toujours une ligne
        return $line['nbPosts'];
    }


    /**
     * Méthode ajouter un post
     */
    public function addPost($title, $content)
    {
        $sql = 'INSERT INTO post(title, content, date)' . ' values(?,?, NOW())';
        $post = $this->executeRequest($sql, array($title, $content));
        return $post;
    }


    /**
     * Méthode mettre à jour un post
     */
    public function updatePost($title, $content, $id)
    {
        $sql = 'UPDATE post SET title = ? , content = ? WHERE id = ?';
        $post = $this->executeRequest($sql, array($title, $content, $id));
        return $post;
    }


    /**
     * Méthode supprimer un post
     */
    public function deletePost($id)
    {
        $sql = 'DELETE FROM post WHERE id = ?';
        $post = $this->executeRequest($sql, array($id));
        return $post;
    }

}
