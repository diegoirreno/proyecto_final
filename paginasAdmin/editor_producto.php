
<?php

require '../paginas/conexion_db.php';

$codigo =$_GET["codigo"];
$sql = $conexion->query("SELECT * FROM productos WHERE codigo=$codigo")

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
                    <h2>Modificar producto</h2>
                    <input type="hidden" name="codigo_produ" value="<?= $_GET["codigo"] ?>">

                    <?php
    
                    echo "Producto a modificar : $codigo";

                    include "../paginas/modificar_producto.php";

                    while($datos=$sql->fetch_object()){ ?> 
                        <div class="row d-flex justify-content-center">
                            <div class="col-4 mt-3 modifyC">
                                <label for="nombre producto">Nombre</label>
                                <input type="text" name="nombre_produ" class="form-control border border-dark border-1" value="<?= $datos->nombre ?>" required>
     
                                <label for="descripcion producto">Descripción</label>
                                <input type="text" name="descripcion_produ" class="form-control border border-dark border-1" value="<?= $datos->descripcion ?>" required>
                    
                                <label for="disponibilidad producto">Disponible</label>
                                <select name="disponibilidad_produ" class="form-control border border-dark border-1" value="<?= $datos->disponibilidad ?>" required>
                                    <option value="">Seleccionar</option>
                                    <option value="1">Sí</option>
                                    <option value="0">No</option>
                                </select>

                                <label for="precio">Precio</label>
                                <input type="text" name="precio_produ" class="form-control border border-dark border-1" value="<?= $datos->precio ?>" required>

                                <label for="descuento producto">Descuento</label>
                                <input type="number" min="0" max="100" step="10" name="descuento_produ" class="form-control border border-dark border-1" value="<?= $datos->descuento ?>" required>

                                <label for="tipo_catalogo">Catalogo</label>
                                <select name="tipo_catalogo" class="form-control border border-dark border-1" value="<?= $datos->catalogo ?>" required>
                                <option value="">Seleccionar</option>   
                                <?php
                                $tipo_catalogo = $conexion->query("SELECT id, nombre FROM catalogo");
                                while ($row = $tipo_catalogo->fetch_assoc()) { ?>
                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>
                                <?php } ?>
                                </select>
                            </div>
                        </div>            
                    <?php }
                    ?>
                    <div class="row d-flex justify-content-center">
                        <div class="col-3 d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary m-3" name="btnmodificarprodu" value="ok">Modificar producto</button>
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