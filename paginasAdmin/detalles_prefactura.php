<?php

require '../paginas/conexion_db.php';

$id =$_GET["id"];
$sql = $conexion->query("SELECT * FROM detalle_prefactura WHERE id=$id")

?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
     <link rel="stylesheet" href="../css/index.css">
    <title>Detalles prefactura</title>   
</head>
<body>
    <main class="container-fluid">
        <div class="row"> 
            <div class="col">
                <form method="POST" class="p-3 form">
                        <h5>Detalle prefactura</h5>
                        <input type="h" name="id" value="<?= $_GET["id"] ?>">

                    <?php 

                    echo "Detalles de la prefactura : $id";

                    while($datos=$sql->fetch_object()){ ?>
                            
                        <div class="row d-flex justify-content-center">
                            <div class="col-4 mt-3 modifyC">
                                <label for="name">Codigo</label>
                                <input type="text" name="codigo_producto" class="form-control border border-dark border-1 " value="<?= $datos->codigo_producto ?>" required>

                                <label for="lastname">Nombre</label>
                                <input type="text" name="nombre_producto" class="form-control border border-dark border-1" value="<?= $datos->nombre_producto ?>" required>

                                <label for="password">Precio</label>
                                <input type="password" name="precio_producto" class="form-control border border-dark border-1" value="<?= $datos->precio_producto ?>" required>


                                <label for="code">Cantidad</label>
                                <input type="number" name="cantidad" class="form-control border border-dark border-1" value="<?= $datos->cantidad ?>" required>
                            </div>
                        </div>
                            
                    <?php }
                    ?>
                    <div class="row d-flex justify-content-center">
                        <div class="col-3 d-flex justify-content-center mt-3">
                            <button type="submit" class="btn btn-primary" value="ok">
                                Modificar Administrador
                            </button>
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