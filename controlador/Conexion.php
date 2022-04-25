<?php
class Conexion{

    public static function Conectar(){
        define('servidor','localhost');
        define('nombre_bd','kodigo');
        define('usuario','kodigo');
        define('pass','kodigo2022@'); 
        $opciones= array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
        try {
            $conexion= new PDO("mysql:host=".servidor."; dbname=".nombre_bd, usuario, pass,$opciones);
            return $conexion;
        } catch (Exception $e) {
            // die("El error de conexion es: ", $e->getMessage());
        }
    }
}
?>