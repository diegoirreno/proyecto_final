<?php

if(!empty($_GET['id'])){
    $id = $_GET['id'];
    $sql=$conexion->query(" DELETE FROM prefactura WHERE id=$id ");
    if($sql==1){
        echo'
            <script>
                alert("La prefactura fue eliminada con exito");
                window.location = "adminProduct.php"
            </script>
            ';
    }else{
        echo'
            <script>
                alert("Error al eliminar la prefactura");
                window.location = "adminProduct.php"
            </script>
            ';
    }

}

?>