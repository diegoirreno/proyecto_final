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
    <link rel="stylesheet" href="../css/index.css">
    <title>Actualizar cliente</title>   
</head>
<body>
    <main class="container-fluid">
        <div class="row">  
            <div class="col">
                <form method="POST" class="p-3 form">
                    <h2>Modificar cliente</h2>
                    <input type="hidden" name="cedula" value="<?= $_GET["cedula"] ?>">

                    <?php
    
                    echo "Cliente a modificar : $cedula";

                    include "../paginas/modificar_cliente.php";

                    while($datos=$sql->fetch_object()){ ?> 
                        <div class="row d-flex justify-content-center">
                            <div class="col-4 mt-3 modifyC">
                                <label for="name">Nombre</label>
                                <input type="text" name="name" class="form-control border border-dark border-1 " value="<?= $datos->nombre ?>" required>
                            
                                <label for="lastname">Apellidos</label>
                                <input type="text" name="lastname" class="form-control border border-dark border-1" value="<?= $datos->apellido ?>" required>
                            
                                <label for="email">Correo electrónico</label>
                                <input type="email" name="email" class="form-control border border-dark border-1" value="<?= $datos->correo ?>" required>
                            
                                <label for="cellphone">Telefono</label>
                                <input type="tel" name="cellphone" class="form-control border border-dark border-1" value="<?= $datos->telefono ?>" required>
                            
                                <label for="address">Direccion</label>
                                <input type="text" name="address" id="address" class="form-control border border-dark border-1" value="<?= $datos->direccion ?>" required>
                            </div>
                        </div>            
                    <?php }
                    ?>
                    <div class="row d-flex justify-content-center">
                        <div class="col-3 d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary m-3" name="btnmodificarcli" value="ok">Modificar Cliente</button>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-3 d-flex justify-content-center">
                            <a href="adminProduct.php" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                                    <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
                                </svg>
                                Volver
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>