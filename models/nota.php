<?php 
require_once 'modeloBase.php';

class Nota extends ModeloBase{
    public $nombre;
    public $contenido;


    //GETTERS
    public function getNombre(){
        return $this->nombre;
    }

    public function getContenido(){
        return $this->contenido;
    }


    //SETTERS
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setContenido($contenido){
        $this->contenido = $contenido;
    }

}

?>