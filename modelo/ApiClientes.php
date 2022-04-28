<?php

include_once 'vistas/clientes.php';
 
class ApiClientes{
    
    
    public static function getAll(){
		
		$cliente = new clientes();
		$cliente_array = array();
		$cliente_array["items"] = array();
		$respuesta = $cliente-> obtenerDatos();
		
		if($respuesta->rowCount()){
			while($fila = $respuesta->fetch(PDO::FETCH_ASSOC)){
				$item = array(
					'id_cliente'=>$fila['id_cliente'],
					'nombre'=>$fila['nombre'],
					'apellido'=>$fila['apellido'],
					'telefono'=>$fila['telefono'],
					'correo'=>$fila['correo'],
					'direccion'=>$fila['direccion'],
				);
				array_push($cliente_array['items'],$item);
			}
			echo json_encode($cliente_array);
		}else{
			echo json_encode(array('mensaje'=>'No hay registros'));
		}
	}      
}
?>