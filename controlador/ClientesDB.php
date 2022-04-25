<?php
include_once 'Conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$_POST = json_decode(file_get_contents("php://input"),true);

$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';

$id_cliente = (isset($_POST['id_cliente'])) ? $_POST['id_cliente'] : '';
$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$apellido = (isset($_POST['apellido'])) ? $_POST['apellido'] : '';
$telefono = (isset($_POST['telefono'])) ? $_POST['telefono'] : '';
$correo = (isset($_POST['correo'])) ? $_POST['correo'] : '';
$direccion = (isset($_POST['direccion'])) ? $_POST['direccion'] : '';

switch(opcion){
    case 1:
        $consulta= "SELECT id_cliente, nombre, apellido, telefono, correo, direccion FROM clientes";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
    break;
    case 2:
        $consulta= "INSERT INTO clientes (id_cliente, nombre, apellido, telefono, correo, direccion) VALUES ('$id_cliente','$nombre', '$apellido','$telefono','$correo','$direccion')";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
    break;
}
print json_encode($data, JSON_UNESCAPED_UNICODE);
$conexion = NULL;
?>
