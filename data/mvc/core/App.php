<?php
class App {

    function __construct()
    {
        //parseo, transformacion para el controlador
        isset($_GET["url"]) ? $url = $_GET["url"] : $url = "home";
        $arguments = explode('/',trim($url,'/'));

        //obtener controlador 
        $controllerName = array_shift($arguments);

        $controllerName = ucwords($controllerName) . "Controller";

        count($arguments) ? $method = array_shift($arguments) : $method = "index";

        //importar el controlador
        $file = "../app/controllers/$controllerName" . ".php";
        if (file_exists($file)){
            require_once $file;
            $this->$controllerName = new $controllerName();
        } else{
            http_response_code(404);
            echo "Recurso no encontrado";
            die();
        }

        $controllerObject= new $controllerName;
        if(method_exists($controllerObject,$method)){
            //invocarlo
            $controllerObject->$method($arguments);
        } else{
            http_response_code(404);
            echo "Funcion no encontrada";
            die();
        }

    }//fin constructor

}//fin clase