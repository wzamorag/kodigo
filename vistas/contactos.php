<?php

include_once 'controlador/BaseDatos.php';

class contactos extends BaseDatos{

    function obtenerDatos(){
        $consulta= $this->Conectar()->query('Select * from contactos');
        return $consulta;
    }
}
?>