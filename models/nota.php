<?php 
require_once 'modeloBase.php';

class Nota extends ModeloBase{
    public $usuario_id;
    public $categoria_id;
    public $titulo;
    public $descripcion;

    //Heredar constructor Padre
    public function __construct(){
        parent::__construct();
    }

    //GETTERS
    public function getUsuarioId()
    {
        return $this->usuario_id;
    }

    public function getCategoriaId()
    {
        return $this->categoria_id;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    //SETTERS
    
    public function setUsuarioId($usuario_id)
    {
        $this->usuario_id = $usuario_id;

        return $this;
    }

    public function setCategoriaId($categoria_id)
    {
        $this->categoria_id = $categoria_id;

        return $this;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    //OTROS
    public function insertar(){
        $sql = "INSERT INTO notas (usuario_id, categoria_id, titulo, descripcion, fecha) VALUES ({$this->usuario_id},{$this->categoria_id}, '{$this->titulo}', '{$this->descripcion}', CURDATE());";
        $guardado =$this->db->query($sql);
        return $guardado;
    }

}

?>