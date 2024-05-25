<?php

    require '../paginas/config.php';
    require '../paginas/database.php';

    if (isset($_POST['action'])){

        $action = $_POST['action'];
        $codigo = isset($_POST['codigo']) ? $_POST['codigo'] : 0;

        if ($action == 'agregar') {
            $cantidad = isset($_POST['cantidad']) ? $_POST['cantidad'] : 0;
            $respuesta = agregar($codigo, $cantidad);
            if($respuesta > 0) {
                $datos['ok'] = true;
            }else{
                $datos['ok'] = false;
            }
            $datos['sub'] = MONEDA . number_format($respuesta, 0, '.', ',');
        } else if ($action == 'eliminar') {
            $datos['ok'] = eliminar($codigo);
        }else{
            $datos['ok'] = false;
        }

    }else{
        $datos['ok'] = false;
    }

    echo json_encode($datos);

    function agregar($codigo, $cantidad){
        $res = 0;
        if($codigo > 0 && $cantidad > 0 && is_numeric(($cantidad))){
            if(isset($_SESSION['carrito']['productos'][$codigo])){
                $_SESSION['carrito']['productos'][$codigo] = $cantidad;
                
                $db = new Database();
                $con = $db->conectar();
                $sql = $con->prepare("SELECT precio,descuento FROM productos WHERE codigo=? AND disponibilidad = 1 
                LIMIT 1");
                $sql->execute([$codigo]);
                $row = $sql->fetch(PDO::FETCH_ASSOC);
                $codigo = $row['codigo'];
                $precio = $row['precio'];
                $descuento = $row['descuento'];
                $precio_desc = $precio - (($precio*$descuento) / 100);
                $res = $cantidad * $precio_desc;

                return $res;
            }
        }else{
            return $res;
        }
    }

    function eliminar($codigo){
        if($codigo > 0){
            if(isset($_SESSION['carrito']['productos'][$codigo])){
                unset($_SESSION['carrito']['productos'][$codigo]);
                return true;
            }
        } else {
            return false;
        }
    }

?>