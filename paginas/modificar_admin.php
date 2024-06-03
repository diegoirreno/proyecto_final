<?php

if(!empty($_POST["btnmodificaradmin"])){
    if(!empty($_POST["name_admin"]) and !empty($_POST["lastname_admin"]) and !empty($_POST["password_admin"])
     and !empty($_POST["code_admin"]))
    {
        $cedula_admin = $_POST["cedula_admin"];
        $nombre = $_POST["name_admin"];
        $apellido = $_POST["lastname_admin"];
        $clave = $_POST["password_admin"];
        $codigo = $_POST["code_admin"];
        $sql = $conexion->query(" UPDATE administrador SET nombre_admin='$nombre', apellido_admin=' $apellido', contra_admin='$clave', 
        codigo_admin='$codigo' WHERE cedula_admin=$cedula_admin ");
        if($sql==1){
            echo'
            <script>
                alert("El administrador fue actualizado con exito");
                window.location = "adminProduct.php"
            </script>
            ';
        }else{
            echo "<div class='alert alert-danger'>Error al actualizar el aadministrador</div>";
        }
    }else{
        echo "<div class='alert alert-warning'>No pueden exixtir campos Vacios</div>";
    }
}

?>