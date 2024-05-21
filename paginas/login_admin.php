<?php

    session_start();

    include 'conexion_db.php';

    $cedula_vali = $_POST['cedu_admin'];
    $contraseña_vali = $_POST['pass_admin'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM administrador WHERE 
    cedula_admin='$cedula_vali' AND contra_admin='$contraseña_vali'");

    if(mysqli_num_rows($validar_login) > 0){
        header("location: ../paginasAdmin/adminProduct.php");
        exit;
    }else{
        echo'
        <script>
            alert("El administrador no esta registrado, intente nuevamente");
            window.location = "../indexAdmin.php"
        </script>
        ';
        exit;
    }
    
?>