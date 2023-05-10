<?php
class NotaController {

    public function listar(){
        //Modelo
        require_once 'models/nota.php';

        $nota = new Nota();
        $todasLasNotas = $nota->conseguirTodos('notas');
        //Vista
        require_once 'views/nota/listar.php';
        
    }
    
    public function crear(){
        require_once 'models/nota.php';
        $nota = new Nota();
        $nota->setTitulo('Nota desde PHP MVC');
        $nota->setUsuarioId(1);
        $nota->setCategoriaId(1);
        $nota->setDescripcion("Descripción de mi nota");
        
        $guardar = $nota->insertar();
        header('Location:index.php?controller=Nota&action=listar');
    }

    public function borrar(){
        
    }


}









?>