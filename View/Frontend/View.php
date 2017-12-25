<?php

class View
{
    // Nom du fichier associé à la vue
    private $file;
    // Titre de la vue (définie dans le fichier vue)
    private $title;

    public function __construct($action) // paramètre action pour activer la commande
    {
        // détermination du nom du fichier vue à partir de l'action
        $this->file = "View/" . $action . "View.php";
    }


    /**
     * Construction et mise en tampon de la vue
     * @param $datas
     * @throws Exception
     */
    public function build($datas)
    {
        // Générer la partie spécifique à la vue
        $content = $this->buildFile($this->file, $datas);
        // Générer la vue spécifique au gabarit
        $view = $this->buildFile('View/Template.php', array('title' => $this->$title, 'content' => $content));
        // renvoie la vue au navigateur
        echo $view;
    }


    /**
     * Génère un fichier vue et renvoie le résultat produit
     * @param $file
     * @param $datas
     * @return string
     * @throws Exception
     */
    public function buildFile($file, $datas)
    {
        if(file_exists($file))
        {
            // rend les éléments du tableau associatif disponibles pour la vue
            extract($datas);
            // démarre la temporisation des données avant leur affichage
            ob_start();
            // Inclus le fichier vue
            require $file;
            // arrêt de la temporisation des données et affichage
            return ob_get_clean();
        }
        else
        {
            throw new Exception('Ficher ' . $file . ' introuvable.');
        }
    }

}