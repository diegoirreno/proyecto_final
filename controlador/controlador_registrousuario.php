<?php
if(!empty($_POST["registro"])){
    if(empty($_POST["id"]) or empty($_POST["name"]) or empty($_POST["lastname"]) or empty($_POST["email"]) or empty($_POST["cellphone"])){
        echo 'Uno de los campos esta vacio';
        }else{
        $cedula=$_POST["id"];
        $nombre=$_POST["name"];
        $apellido=$_POST["lastname"];
        $email=$_POST["email"];
        $telefono=$_POST["cellphone"];
        $sql = $conexion->query(" insert into persona(cedula,nombres,apellidos,correo,telefono)values(' $cedula','$nombre','$apellido',' $email','$telefono')");
        if($sql==1)
        {
            echo '<div>Usuario registrado correctamente</div>';
        }else
        {
            echo '<div>Error al registrar el usuario</div>';
        }
    }
}


?>