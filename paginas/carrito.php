<?php
require '../paginas/config.php';

if(isset($_POST['codigo'])){

    $codigo = $_POST['codigo'];
    $cantidad = isset($_POST['cantidad']) ? $_POST['cantidad'] : 1;
    $token = $_POST['token'];

    $token_tmp = hash_hmac('sha1', $codigo, KEY_TOCKEN);

    if($token == $token_tmp && $cantidad>0 && is_numeric($cantidad)){

        if(isset($_SESSION['carrito']['productos'][$codigo])){

            $_SESSION['carrito']['productos'][$codigo] += $cantidad;

        }else{

            $_SESSION['carrito']['productos'][$codigo] = $cantidad;
        }

        $datos['numero'] = count($_SESSION['carrito']['productos']);
        $datos['ok'] = true; // Cambiado a true cuando se agrega correctamente el producto al carrito

    }else{
        $datos['ok'] = false;
    }

}else{
    $datos['ok'] = false;
}

echo json_encode($datos);
?>
