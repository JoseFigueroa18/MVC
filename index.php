<h1>Bienvenido a MVC</h1>


<?php 
require_once 'controllers/usuario.php';

//Controlador Frontal:
//Se encarga de cargar un fichero, una acción de lo que le llega por la url, es el unico fichero que se encarga de cargarlo todo.
if(isset($_GET['controller']) && class_exists($_GET['controller'])){
    $nombreControlador = $_GET['controller'];
    $controlador = new $nombreControlador ();

    if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
        $action = $_GET['action'];
        $controlador->$action();
    }else {
        echo "La página no existe";
    }

}else {
    echo "La página no existe";
}




?>