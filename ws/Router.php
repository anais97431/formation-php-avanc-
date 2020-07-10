<?php

namespace app;

class Router
{
    public function route()
    {
        $url = $_SERVER['REQUEST_URI'];
        
        $method = $_SERVER['REQUEST_METHOD'];

        $routeConfig = json_decode(file_get_contents(__DIR__.'/routes.json'));

        $routeFound = false;

        foreach($routeConfig as $path => $route) {
            // on prefixe le debut et la fin avec un # et on lui dit que l'on ne veut rien d'autre au debut avec ^ et $ en fin
            // on recupère le résultat de preg_match() dans la variable $matches (paramètre entré sortie)
            preg_match('#^'.$path.'$#', $url, $matches);

            // valeur littéral a gauche et traitement à droite
            if(0 < count($matches)) {
                $routeFound = $route;
                array_shift($matches);
                $params = $matches;
            break;
            }
        }

        if (!$routeFound) {
            throw new NotFoundException();
            http_response_code(404);
            echo 'page non trouvée';
            die;
        }
        if (!key_exists($method, $routeFound)){
            throw new MethodNotAllowedException();
            http_response_code(405);
            echo 'méthode non permise';
            die;
        }
        list($class, $method) = explode('::', $routeFound->$method);
        $instance = new $class();
        return call_user_func_array([$instance, $method], $params);
         
    }
}

