<?php

require_once 'Request.php';
require_once 'View.php';

abstract class Controller
{
    //Action à réaliser
    private $action;

    // Requête entrante
    /** @var Request */
    protected $request;



    // Définit la requête entrante
    public function setRequest(Request $request)
    {
        $this->request = $request;
    }

    // Exécute l'action à réaliser
    public function executeAction($action)
    {
        if (method_exists($this, $action)) {
            $this->action = $action;
            $this->{$this->action}();
        } else {
            $classController = get_class($this);
            throw new Exception("Action '$action' non définie dans la classe $classController");
        }
    }

    // Méthode abstraite correspondant à l'action par défaut
    // Oblige les classes dérivées à implémenter cette action par défaut
    public abstract function index();

    // Génère la vue associée au controller courant
    protected function buildView($dataView = array(), $action = null)
    {
        // Détermination du nom du fichier vue à partir du nom du controller actuel
        $classController = get_class($this); // get_class retourne le nom de la classe d'un objet
        $controller = str_replace("Controller", "", $classController);

        //Instanciation et génération de la vue
        if(is_null($action))
        {
            $action = $this->action;
        }

        $view = new View($action, $controller);
        $view->build($dataView);
    }



    /**
     * Effectue une redirection vers un autre controller et une autre action
     * Fonctionne avec ControllerSecure.php (l.25).
     * Quand l'utilisateur n'est pas identifié, il est renvoyé vers la page de connexion.
     */
    protected function redirect($controller, $action = null)
    {
        $racineWeb = configuration::get("racineWeb", "/");
        // redirection vers l'url racine_site/controller/action
        header('Location: ' . $racineWeb . $controller . '/' . $action);
    }
}

