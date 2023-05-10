<?php

class Database{
    public static function conectar(){
        $conexion = new mysqli("localhost","root","","notas");
        $conexion->query("SET NAMES 'utf8'");

        return $conexion;
    }
}





?>