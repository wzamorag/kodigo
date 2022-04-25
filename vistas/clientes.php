<?php

include_once 'controlador/BaseDatos.php';

class clientes extends BaseDatos{

    function obtenerDatos(){
        $consulta= $this->Conectar()->query('Select * from clientes');
        return $consulta;
    }
}
?>