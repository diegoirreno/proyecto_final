<?php

function registrar(array $datos,$conexion)
{
    $sql = $conexion->prepare("INSERT INTO productos (codigo, nombre, descripcion, disponibilidad, precio, descuento, catalogo) 
    VALUES(?,?,?,1,?,0,?)");
    if($sql->execute($datos)){
        return true;
    }
    return false;
}

?>