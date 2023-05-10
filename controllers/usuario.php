<?php
class UsuarioController {

    //Metodos de acción
    public function mostrarTodos(){
        //Importamos el modelo para usar sus métodos.
        require_once 'models/usuario.php';

        //Creamos una instancia de la clase del modelo.
        $usuario = new Usuario();

        //Utilizamos el método de dicha clase.
        $todosLosUsuarios = $usuario -> conseguirTodos();

        //Importamos la vista para mostrar el resultado del método ahí.
        require_once 'views/usuarios/mostrar-todos.php';
    }

    public function crear(){
        require_once 'views/usuarios/crear.php';
    }
}









?>