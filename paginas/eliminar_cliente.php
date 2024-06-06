
<?php

if(!empty($_GET['cedula'])){
    $cedula = $_GET['cedula'];
    $sql=$conexion->query(" DELETE FROM cliente WHERE cedula=$cedula ");
    if($sql==1){
        echo'
            <script>
                alert("El cliente fue eliminado con exito");
                window.location = "adminProduct.php"
            </script>
            ';
    }else{
        echo'
            <script>
                alert("Error al eliminar el cliente");
                window.location = "adminProduct.php"
            </script>
            ';
    }

}

?>