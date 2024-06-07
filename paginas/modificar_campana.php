<?php

if(!empty($_POST["btnmodificarcampana"])){
    if(!empty($_POST["nombre_campana"]) and !empty($_POST["fecha_ini"]) and !empty($_POST["fecha_fin"]))
    {
        $id = $_POST["id"];
        $nombre = $_POST["nombre_campana"];
        $fecha_ini = $_POST["fecha_ini"];
        $fecha_fin = $_POST["fecha_fin"];
        $sql = $conexion->query(" UPDATE campana SET nombre='$nombre', fecha_inicio=' $fecha_ini', fecha_fin='$fecha_fin' 
        WHERE id=$id ");
        if($sql==1){
            echo'
            <script>
                alert("La campaña fue actualizada con exito");
                window.location = "adminProduct.php"
            </script>
            ';
        }else{
            echo "<div class='alert alert-danger'>Error al actualizar la campaña</div>";
        }
    }else{
        echo "<div class='alert alert-warning'>No pueden exixtir campos Vacios</div>";
    }
}

?>