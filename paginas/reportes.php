<?php
ob_start(); // Iniciar el almacenamiento en búfer de salida
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Productos</title>
    <!-- Enlace a Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php
        include 'config.php';
        include 'database.php';
        $db = new Database();
        $con = $db->conectar();
    ?>
    <table class="table table-striped table-hover table-bordered m-3">
        <thead>
            <tr>
                <th>Imágen</th> 
                <th>Código</th> 
                <th>Nombre</th>
                <th>Disponible</th>
                <th>Precio</th>
                <th>Descuento</th>  
                <th>Catálogo</th>                                                             
            </tr>                   
        </thead>
        <tbody>
            <?php
            include '../paginas/conexion_db.php';
            include '../paginas/eliminar_producto.php';

            // Obtener la URL base del servidor
            $base_url = "http://localhost/proyecto_final/";

            $sql = $conexion->query("SELECT * FROM productos");
            while($datos = $sql->fetch_object()) { 
                $code = $datos->codigo;
                $imagen_path = "C:/xampp/htdocs/proyecto_final/img/productos_novaventa/" . $code . ".png";
                $imagen_url = $base_url . "img/productos_novaventa/" . $code . ".png";
                if(!file_exists($imagen_path)){
                    $imagen_url = $base_url . "img/login.png";   
                }
            ?>
            <tr class="text-center">
                <td>
                    <img src="<?= $imagen_url ?>" alt="Imagen de <?= $datos->nombre ?>" width="100">
                </td>
                <td><?= $datos->codigo ?></td>
                <td><?= $datos->nombre ?></td>
                <td><?php 
                    echo $datos->disponibilidad == 1 ? "si" : "no";
                ?></td>
                <td><?= $datos->precio ?></td>
                <td><?= $datos->descuento ?></td>
                <td><?php 
                    if($datos->catalogo == 1){
                        echo "Novaventa";
                    } else if($datos->catalogo == 2){
                        echo "TupperWare";
                    } else {
                        echo "Otro catálogo";
                    }
                ?></td>
            </tr>
            <?php } ?>
        </tbody> 
    </table>

    <!-- Enlace a Bootstrap JS y dependencias -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
$html = ob_get_clean(); // Obtener el contenido del búfer y limpiarlo

require_once '../libreria/dompdf/autoload.inc.php';

use Dompdf\Dompdf;
$dompdf = new Dompdf();

$options = $dompdf->getOptions();
$options->set(array('isRemoteEnabled' => true));
$dompdf->setOptions($options);

$dompdf->loadHtml($html); // Cargar el HTML generado

$dompdf->setPaper('A4', 'landscape');

$dompdf->render();

$nombre_archivo = "reporte_productos_" . date("Y-m-d") . ".pdf";
$dompdf->stream($nombre_archivo, array("Attachment" => false));
?>
