<?php

if(!empty($_POST["btnmodificarprodu"])){
    if(!empty($_POST["nombre_produ"]) and !empty($_POST["descripcion_produ"])and !empty($_POST["precio_produ"]) and !empty($_POST["tipo_catalogo"]))
    {
        $codigo = $_POST["codigo_produ"];
        $nombre = $_POST["nombre_produ"];
        $descripcion = $_POST["descripcion_produ"];
        $disponibilidad = $_POST["disponibilidad_produ"];
        $precio = $_POST["precio_produ"];
        $descuento = $_POST["descuento_produ"];
        $catalogo = $_POST["tipo_catalogo"];

        $sql = $conexion->query(" UPDATE productos SET nombre='$nombre', descripcion='$descripcion', disponibilidad='$disponibilidad', 
        precio='$precio', descuento='$descuento' , catalogo='$catalogo' WHERE codigo=$codigo ");
        if($sql==1){
            echo'
            <script>
                alert("El producto fue actualizado con exito");
                window.location = "adminProduct.php"
            </script>
            ';
        }else{
            echo "<div class='alert alert-danger'>Error al actualizar el producto</div>";
        }
    }else{
        echo "<div class='alert alert-warning'>No pueden exixtir campos Vacios</div>";
    }
}

?>