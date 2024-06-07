<?php

if(!empty($_POST["btnmodificarcata"])){
    if(!empty($_POST["nombre_catalogo"]))
    {
        $id = $_POST["id"];
        $nombre = mb_convert_case($_POST["nombre_catalogo"],MB_CASE_UPPER);
        $id_campana= $_POST["id_campana"];
        $sql = $conexion->query(" UPDATE catalogo SET nombre='$nombre', id_campana=' $id_campana' WHERE id=$id ");
        if($sql==1){
            echo'
            <script>
                alert("El catalogo fue actualizado con exito");
                window.location = "adminProduct.php"
            </script>
            ';
        }else{
            echo "<div class='alert alert-danger'>Error al actualizar el catalogo</div>";
        }
    }else{
        echo "<div class='alert alert-warning'>No pueden exixtir campos Vacios</div>";
    }
}

?>