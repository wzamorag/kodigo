<?php

include_once 'vistas/contactos.php';

class ApiContactos{

    public static function getAll(){
        $contactos= new contactos();
        $contactos_array= array();
        $contactos_array["items"]=array();
        $respuesta=$contactos->obtenerDatos();
        if($respuesta->rowCount()){
            while($fila=$respuesta->fetch(PDO::FETCH_ASSOC)){
                $item=array(
                    'id_contacto'=>$fila['id_contacto'],
                    'id_cliente'=>$fila['id_cliente'],
					'nombres'=>$fila['nombres'],
					'apellidos'=>$fila['apellidos'],
                    'tipo'=>$fila['tipo'],
                );
                array_push($contactos_array["items"],$item);
            }
            echo json_encode($contactos_array);
        }else{
            echo json_encode(array('mensaje'=>'No hay registros'));
        }
    }
}
?>