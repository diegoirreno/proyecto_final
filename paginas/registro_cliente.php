
<?php

    include 'conexion_db.php';

    $cedula = trim($_POST['document']);
    $nombre = trim($_POST['name']);
    $apellido = trim($_POST['lastname']);
    $correo = trim($_POST['email']);
    $telefono = trim($_POST['cellphone']);
    $direccion = trim($_POST['address']);

    //Verificar que el cliente ya esta registrado
    
    $validar = "SELECT * FROM cliente WHERE cedula = '$cedula' || correo = '$correo'";
    $validando = $conexion->query($validar);

    if(empty($cedula) or empty($nombre) or empty($apellido) or empty($correo) 
    or empty($telefono) or empty($direccion)){

        echo'
        <script>
            alert("Uno o mas campos estan vacios, por favor completarlos todos");
            window.location = "registrar_cli.php"
        </script>
    ';

    }else if($validando->num_rows > 0){
        
        echo'
            <script>
                alert("El cliente ya esta registrado, intente nuevamente");
                window.location = "registrar_cli.php"
            </script>
        ';

    }else{

    //insertar clientes a ala base de datos
    $insertar = "INSERT INTO cliente(cedula,nombre,apellido,correo,telefono,direccion) 
              VALUES('$cedula', '$nombre', '$apellido', '$correo', '$telefono', '$direccion')";
    $guardar = $conexion->query($insertar);
    if($guardar > 0){
        echo'
            <script>
                alert("Cliente registrado exitosamente");
                window.location = "../indexF.php"
            </script>
        ';
    }else{
        echo'
        <script>
            alert("Cliente no registrado, intentar nuevamente");
            window.location = "registrar_cli.php"
            </script>"
        </script>
    ';
    }

    }
?>