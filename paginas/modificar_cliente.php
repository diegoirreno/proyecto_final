
<?php

if(!empty($_POST["btnmodificarcli"])){
    if(!empty($_POST["name"]) and !empty($_POST["lastname"]) and !empty($_POST["email"])
     and !empty($_POST["cellphone"]) and !empty($_POST["address"]))
    {
        $cedula = $_POST["cedula"];
        $nombre = $_POST["name"];
        $apellido = $_POST["lastname"];
        $correo = $_POST["email"];
        $telefono = $_POST["cellphone"];
        $direccion = $_POST["address"];
        $sql = $conexion->query(" UPDATE cliente SET nombre='$nombre', apellido=' $apellido', correo='$correo', 
        telefono='$telefono', direccion='$direccion' WHERE cedula=$cedula ");
        if($sql==1){
            echo'
            <script>
                alert("El cliente fue actualizado con exito");
                window.location = "adminProduct.php"
            </script>
            ';
        }else{
            echo "<div class='alert alert-danger'>Error al actualizar el cliente</div>";
        }
    }else{
        echo "<div class='alert alert-warning'>No pueden exixtir campos Vacios</div>";
    }
}

?>