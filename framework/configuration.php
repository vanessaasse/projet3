<?php

class Configuration
{
    private static $parameters; // attribut qui stocke les valeurs des paramètres de configuration

    /**
     * Renvoie la valeur d'un paramètre de configuration
     * La méthode Get permet de chercher la valeur d'un paramètre à partir de son nom
     * @param $name
     * @param null $defaultvalue
     * @return mixed
     */
    public static function get($name, $defaultvalue = null) /* Comme la méthode est statique, elle ne peut être utilisée
 qu'une fois, ne peut pas instancier la class Configuration */
    {
        if(isset(self::getParameters()[$name])) // self:: fait référence à un membre static
        {
            $value = self::getParameters()[$name];
        }
        else
        {
            $value = $defaultvalue;
        }

        return $value;
    }


    /**
     * Renvoie le tableau des paramètres en le chargeant au besoin
     * Cette méthode statique permet le chargement du fichier contenant les paramètres de configuration
     * @return array|bool
     * @throws Exception
     */
    private static function getParameters()
    {
        if(self::$parameters == null)
        {
            $filepath = "config/dev.ini";
            if(!file_exists($filepath))
            {
                $filepath = "config/prod.ini";
            }
            if(!file_exists($filepath))
            {
                throw new Exception("Aucun fichier de configuration trouvé");
            }
            else
            {
                self::$parameters = parse_ini_file($filepath); /* fonction parse_ini_file analyse un fichier de configuration. Celle-ci
                instancie et renvoie un tableau associatif attribué à l'attribue $parameters */
            }
        }
        return self::$parameters;
    }
}