<?php

require '../paginas/conexion_db.php';

$cedula_admin =$_GET["cedula_admin"];
$sql = $conexion->query("SELECT * FROM administrador WHERE cedula_admin=$cedula_admin")

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
                    <h5>Modificar administrador</h5>
                    <input type="hidden" name="cedula_admin" value="<?= $_GET["cedula_admin"] ?>">

                <?php

                echo "Administrador a modificar : $cedula_admin";

                include "../paginas/modificar_admin.php";

                while($datos=$sql->fetch_object()){ ?>
                    <div class="form-group col-md-12">
                        <label for="name">Nombres</label>
                        <input type="text" name="name_admin" class="form-control border border-dark border-1 " value="<?= $datos->nombre_admin ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="lastname">Apellidos</label>
                        <input type="text" name="lastname_admin" class="form-control border border-dark border-1" value="<?= $datos->apellido_admin ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="password">Contraseña</label>
                        <input type="password" name="password_admin" class="form-control border border-dark border-1" value="<?= $datos->contra_admin ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="code">codigo</label>
                        <input type="number" name="code_admin" class="form-control border border-dark border-1" value="<?= $datos->codigo_admin ?>">
                    </div>
                <?php }
                ?>
                
                <br>
                <button type="submit" class="btn btn-primary" name="btnmodificaradmin" value="ok">Modificar Cliente</button>
                </form>
            </div>
</body>
</html>