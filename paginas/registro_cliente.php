<?php

    include 'conexion_db.php';

    $cedula = $_POST['document'];
    $nombre = $_POST['name'];
    $apellido = $_POST['lastname'];
    $correo = $_POST['email'];
    $telefono = $_POST['cellphone'];
    $direccion = $_POST['address'];

    $query = "INSERT INTO cliente(cedula,nombre,apellido,correo,telefono,direccion) 
              VALUES('$cedula', '$nombre', '$apellido', '$correo', '$telefono', '$direccion')";

    
    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo'
            <script>
                alert("Usuario registrado exitosamente");
                window.location = "../login.php"
            </script>
        ';
    }else{
        echo'
        <script>
            alert("Usuario no registrado, intentar nuevamente");
            window.location = "../login.php"
        </script>
    ';
    }
?>