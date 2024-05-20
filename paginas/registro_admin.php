<?php

    include 'conexion_db.php';

    $cedula_admin = $_POST['cedu_admin'];
    $nombre_admin = $_POST['name_admin'];
    $apellido_admin = $_POST['lastname_admin'];
    $contrasena_admin = $_POST['password_admin'];
    $codigo_admin = $_POST['code_admin'];
    
    //Verificar que el codigo del administrador sea correcto
    /*$validar_code = "SELECT * FROM administrador WHERE codigo_admin = '$codigo_admin'";
    $validando_code = $conexion->query($validar_code);
    if($validando_code->num_rows > 0){

        echo'
        <script>
            alert("El codigo de administrador es incorrecto , intente nuevamente");
            window.location = "../indexAdmin.php"
        </script>
        ';

    }else */
    //Verificar que el administrador ya esta registrado
    $validar = "SELECT * FROM administrador WHERE cedula_admin = '$cedula_admin' ";
    $validando = $conexion->query($validar);
    if($validando->num_rows > 0){
        
        echo'
            <script>
                alert("El administrador ya esta registrado, intente nuevamente");
                window.location = "../indexAdmin.php"
            </script>
        ';

    }else{

    //insertar clientes a ala base de datos
    $insertar = "INSERT INTO administrador(cedula_admin,nombre_admin,apellido_admin,contra_admin,codigo_admin) 
              VALUES('$cedula_admin', '$nombre_admin', '$apellido_admin', '$contrasena_admin', '$codigo_admin')";
    $guardar = $conexion->query($insertar);
    if($guardar > 0){
        echo'
            <script>
                alert("Administrador registrado exitosamente");
                window.location = "../indexF.php"
            </script>
        ';
    }else{
        echo'
        <script>
            alert("El administrador no fue registrado, intentar nuevamente");
            window.location = "../indexAdmin.php"
        </script>
    ';
    }

    }
?>