<?php
    ob_start(); // Iniciar el almacenamiento en búfer de salida
    include 'config.php';
    include 'database.php';
    require '../paginas/conexion_db.php';

    $total = 0;
    $last_id = $_GET['id_prefactura'];
    $cedula = $_GET['cedula'];
    $sql = $conexion->query("SELECT * FROM cliente WHERE cedula=$cedula");
    if($sql->num_rows>0)
    {
        $row = $sql->fetch_assoc();
        $nombre = $row['nombre'];
        $apellido = $row['apellido'];
        $correo = $row['correo'];
        $telefono = $row['telefono'];
        $direccion = $row['direccion'];

    }else{

        echo "No se encontraron datos para la cedula";
    }

    $fecha = date("Y-m-d H:i:s");
 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--Link CSS Bootstrap-->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="../css/index.css">
    <title>Cola del pedido</title>
</head>
<body class="container-fluid p-0">  
    <header>
        <div class="container-fluid p-0">
            <nav class="row navbar navbar-expand-md navbar-light bg-light border-bottom border-primary">

                <div class="col-3">
                    <a class="navbar-brand">Distribuciones Irreño</a>
                </div>
                
                <!--Todo lo que esta dentro del menu desplegable-->

                <div id="Menu" class="col collapse navbar-collapse">
                    <ul class="col navbar-nav ms-3">
                        <div class="col-4 col-sm-6 p-0">
                        </div>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <div class="container-fluid p-0">
            <div class="row text-center my-3">
                <div class="col">
                    <h4>Prefactura </h4>
                </div>
            </div>
            <div>
                <?php
                echo "<p>Nombre: $nombre</p>";
                echo "<p>Apellido: $apellido</p>";
                echo "<p>Correo: $correo</p>";
                echo "<p>Teléfono: $telefono</p>";
                echo "<p>Dirección: $direccion</p>";
                ?>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <div class="table-responsive tb">
                        <table class="table table-striped table-hover table-bordered m-3">
                            
                            <thead>
                                <tr>
                                    <th>Codigo Producto</th>
                                    <th>Nombre del producto</th>
                                    <th>Precio del producto</th>
                                    <th>Cantidad</th> 
                                    <th>Subtotal</th>                                                            
                                </tr>                   
                            </thead>
                            <tbody>
                                <?php
                                                             
                                $sql = $conexion->query("SELECT * FROM detalle_prefactura WHERE id_prefactura=$last_id");
                                while($datos = $sql->fetch_object()) { ?>
                                <tr class="text-center">
                                <td><?= $datos->codigo_producto ?></td>
                                <td><?= $datos->nombre_producto ?></td>
                                <td><?= $datos->precio_producto ?></td>
                                <td><?= $datos->cantidad ?></td>
                                <td><?php 
                                    $precio = $datos->precio_producto;
                                    $cantidad = $datos->cantidad;
                                    $subtotal = $precio * $cantidad;
                                    $total += $subtotal;
                                    echo $subtotal;
                                 ?></td>
                                </tr>
                                <?php } 
                                ?>
                                <tr>
                                    <td colspan="3"></td>
                                    <td colspan="2">
                                 <p class="h3 text-end">Total: <?php echo MONEDA . number_format($total, 0, '.', ','); ?></p>   
                                </td>
                                </tr>
                            </tbody> 
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--JS Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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

$nombre_archivo = "Prefactura_{$last_id}.pdf";
$dompdf->stream($nombre_archivo, array("Attachment" => true));
?>

