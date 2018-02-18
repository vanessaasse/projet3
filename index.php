<?php
namespace Vanessa\Projet3;
use Vanessa\Projet3\Framework\Routeur;

require_once 'Autoloader.php';
Autoloader::register();
// Controleur frontal
$routeur = new Routeur();
$routeur->pathRequest();