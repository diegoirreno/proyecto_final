
<?php

if(!empty($_GET['cedula_admin'])){
    $cedula_admin = $_GET['cedula_admin'];
    $sql=$conexion->query(" DELETE FROM administrador WHERE cedula_admin=$cedula_admin ");
    if($sql==1){
        echo'
            <script>
                alert("El administrador fue eliminado con exito");
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