<?php

if(!empty($_GET['codigo'])){
    $codigo = $_GET['codigo'];
    $sql=$conexion->query(" DELETE FROM productos WHERE codigo=$codigo ");
    if($sql==1){
        echo'
            <script>
                alert("El producto fue eliminado con exito");
                window.location = "adminProduct.php"
            </script>
            ';
    }else{
        echo'
            <script>
                alert("Error al eliminar el producto");
                window.location = "adminProduct.php"
            </script>
            ';
    }

}

?>