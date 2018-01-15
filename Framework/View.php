<?php


require_once 'Configuration.php';

class View
{
    // Nom du fichier associé à la vue
    private $file;
    // Titre de la vue (définie dans le fichier vue)
    private $title;


    /**
     * Constructeur
     *
     * @param string $action Action à laquelle la vue est associée
     * @param string $controller Nom du contrôleur auquel la vue est associée
     * @param string $template Template auquel la vue est associée
     */
    public function __construct($action, $controller = "", $template)
    {
        // Détermination du nom du fichier vue à partir de l'action et du constructeur
        // La convention de nommage des fichiers vues est : view/<$controller>/<$action>.php
        $file = "view/";

        if ($controller != "")
        {
            $file = $file . strtolower($controller) . "/";
        }
        $this->file = $file . $action . ".php";

        //choix du template
        if($controller == "Admin")
        {
            $this->template = "templateBack.php";
        }
        else
        {
            $this->template = "template.php";
        }
    }


    /**
     * Génère et affiche la vue
     *
     * @param array $datas Données nécessaires à la génération de la vue
     */
    public function build($datas)
    {

        // Générer la partie spécifique à la vue
        $content = $this->buildFile($this->file, $datas);

        // On définit une variable locale accessible par la vue pour la racine Web
        // Il s'agit du chemin vers le site sur le serveur Web
        // Nécessaire pour les URI de type controleur/action/id
        $racineWeb = Configuration::get("racineWeb", "/");
        // Génération du gabarit commun utilisant la partie spécifique
        $view = $this->buildFile('view/'. $this->template,
            array('title' => $this->title, 'content' => $content,
                'racineWeb' => $racineWeb));
        // Renvoi de la vue générée au navigateur
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
            throw new Exception("Fichier ' $file ' introuvable.");
        }
    }


    /**
     * Nettoie une valeur insérée dans une page HTML
     * Permet d'éviter les problèmes d'exécution de code indésirable (XSS) dans les vues générées
     *
     * @param string $value Valeur à nettoyer
     * @return string Valeur nettoyée
     */
    private function sanitize($value) {
        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8', false); /* pour protéger le site
 des failles XSS - envoi de codes dans les pages web - et d'injection SQL - envoi de données non attendues dans la BDD. */
    }
}