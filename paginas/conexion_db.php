
<?php

$conexion = mysqli_connect("localhost", "root", "", "pry_final");

if($conexion){
    echo 'La conexion fue exitosa';
}else{
    echo 'La conexion fue fallida';
}

?>
