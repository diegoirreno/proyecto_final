<?php

    include 'conexion_db.php';

    $cedula = trim($_POST['cedula_vali']);

    //Verificar que el cliente ya esta registrado
    
    $validar = "SELECT * FROM cliente WHERE cedula = '$cedula' LIMIT 1";
    $validando = $conexion->query($validar);

    if(empty($cedula)){

        echo'
        <script>
            alert("El campo no puede estar vacio, por favor completarlo");
            window.location = "colaPedido.php"
        </script>
    ';

    }else if($validando->num_rows > 0){
        
        echo'
            <script>
                alert("El cliente ya esta registrado, proceda con la prefactura");
                window.location = "prefactura.php"
            </script>
        ';

    }else{
        echo'
            <script>
                alert("El cliente no esta registrado, para proceder con la compra registrese");
                window.location = "registrar_cli.php"
            </script>
        ';
    }

    
?>