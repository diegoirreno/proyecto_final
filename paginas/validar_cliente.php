<?php
    include 'conexion_db.php';

    $cedula = trim($_POST['cedula_vali']);

    // Verificar que el cliente ya está registrado
    $validar = "SELECT * FROM cliente WHERE cedula = '$cedula' LIMIT 1";
    $validando = $conexion->query($validar);

    if (empty($cedula)) {
        echo '
            <script>
                alert("El campo no puede estar vacío, por favor complételo");
                window.location = "colaPedido.php"; 
            </script>
        ';
    } else if ($validando->num_rows > 0) {
        echo '
            <script>
                var cedula = "' . $cedula . '";
                window.location.href = "prefactura.php?cedula=" + encodeURIComponent(cedula);
            </script>
        ';
    } else {
        echo '
            <script>
                alert("El cliente no está registrado, para proceder con la compra regístrese");
                window.location = "registrar_cli.php";
            </script>
        ';
    }
?>