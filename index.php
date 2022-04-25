<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Agenda Kodigo</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <!-- <form action="vistas/ApiClientes.php" method="post"> -->
    <!-- <input type="submmit" name="cliente"  value="MostrarClientes"/> -->
    <!-- <button type="submit" >Mostrar Clientes</button>   -->

    <?php
    include_once 'modelo/ApiClientes.php';
    $api = new ApiClientes();
    $api->getAll();
    ?>
</form>
    </body>
</html>