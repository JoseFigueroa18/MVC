<h1>Bienvenido a MVC</h1>

<?php 
//Añadimos los respectivos require/ mediante un autoLoad
require_once 'autoLoad.php';

//Controlador Frontal:
//Se encarga de cargar un fichero, una acción de lo que le llega por la url, es el unico fichero que se encarga de cargarlo todo.

//Comprobamos que exista el parametro controller en la url
if(isset($_GET['controller'])){
    //Asignamos el nombre del controlador a una variable
    $nombreControlador = $_GET['controller'].'Controller';
}else{
    echo "La página que buscas no existe";
    exit();
}

//Comprobamos que exista ese controlador 
if(isset($nombreControlador)){
    //Si existe cargamos el controlador
    $controlador = new $nombreControlador();

    //comprobamos que el método exista
    if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
        $action = $_GET['action'];
        $controlador->$action();
    }else {
        echo "La página no existe";
    }

}else {
    echo "La página que buscas no existe ";
}




?>