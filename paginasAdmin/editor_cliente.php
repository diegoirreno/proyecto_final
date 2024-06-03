<?php

require '../paginas/conexion_db.php';

$cedula =$_GET["cedula"];
$sql = $conexion->query("SELECT * FROM cliente WHERE cedula=$cedula")

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
     <link rel="stylesheet" href="./css/index.css">
    <title>Actualizar cliente</title>   
</head>
<body>
<div class="row abs-center"> 
                <form method="POST" class="border p-3 form">
                    <h5>Modificar cliente</h5>
                    <input type="hidden" name="cedula" value="<?= $_GET["cedula"] ?>">

                <?php

                echo "Cliente a modificar : $cedula";

                include "../paginas/modificar_cliente.php";

                while($datos=$sql->fetch_object()){ ?>
                    <div class="form-group col-md-12">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" class="form-control border border-dark border-1 " value="<?= $datos->nombre ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="lastname">Apellidos</label>
                        <input type="text" name="lastname" class="form-control border border-dark border-1" value="<?= $datos->apellido ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="email">Correo electrónico</label>
                        <input type="email" name="email" class="form-control border border-dark border-1" value="<?= $datos->correo ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="cellphone">Telefono</label>
                        <input type="tel" name="cellphone" class="form-control border border-dark border-1" value="<?= $datos->telefono ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="address">Direccion</label>
                        <input type="text" name="address" id="address" class="form-control border border-dark border-1" value="<?= $datos->direccion ?>">
                    </div>
                <?php }
                ?>
                
                <br>
                <button type="submit" class="btn btn-primary" name="btnmodificarcli" value="ok">Modificar Cliente</button>
                </form>
            </div>
</body>
</html>