<?php

if(!empty($_GET['id'])){
    $id = $_GET['id'];
    $sql=$conexion->query(" DELETE FROM catalogo WHERE id=$id ");
    if($sql==1){
        echo'
            <script>
                alert("El catálogo fue eliminado con exito");
                window.location = "adminProduct.php"
            </script>
            ';
    }else{
        echo'
            <script>
                alert("Error al eliminar el catálogo");
                window.location = "adminProduct.php"
            </script>
            ';
    }

}

?>