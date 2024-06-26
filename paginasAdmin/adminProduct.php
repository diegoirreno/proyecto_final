
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Link CSS Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
     <link rel="stylesheet" href="../css/index.css">
    <title>Administración de BD</title>
</head>
<body>
    <header>
        <div class="container-fluid p-0">
            <nav class="row navbar navbar-expand-md navbar-light bg-light border-bottom border-primary p-3">
                <div class="col-3"> 
                    <a href="../indexF.php" class="navbar-brand">Distribuciones Irreño</a>
                </div>  
                <div class="col-9 d-flex justify-content-end">
                    <a href="../paginas/cerrar_sesion.php" class="btn btn-outline-primary">
                        Cerrar sesión
                    </a>
                </div>   
            </nav>
            <div class="row">
                <div class="col text-center my-3 bg-dark text-light">
                    <h5>Menú Administrador</h5>
                </div>
            </div> 
        </div>
    </header>
    <main>
        <div class="container-fluid" id="space">
            <nav class="row m-2">
                <!--Modal Clientes-->
                <div class="col-2 d-flex justify-content-center">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                        Clientes
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-fullscreen">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Clientes</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid">
                                        <div class="row py-3">
                                            <h5>Clientes registrados</h5>
                                        </div>
                                        <!--Tabla clientes registrados-->
                                        <div class="row">
                                            <div class="col">
                                                <form class="table-responsive tb">
                                                    <table class="table table-striped table-hover table-bordered m-3">
                                                        <thead>
                                                            <tr>
                                                                <th>Cedula</th> 
                                                                <th>Nombre</th>
                                                                <th>Apellido</th>
                                                                <th>Correo</th>
                                                                <th>Teléfono</th>
                                                                <th>Dirección</th>                                                               
                                                            </tr>                   
                                                        </thead>
                                                        <tbody>
                                                            <?php

                                                            include '../paginas/conexion_db.php';
                                                            include '../paginas/eliminar_cliente.php';
                                                            
                                                                
                                                            $sql = $conexion->query("SELECT * FROM cliente");
                                                            while($datos = $sql->fetch_object()) { ?>
                                                            <tr class="text-center">
                                                                <td><?= $datos->cedula ?></td>
                                                                <td><?= $datos->nombre ?></td>
                                                                <td><?= $datos->apellido ?></td>
                                                                <td><?= $datos->correo ?></td>
                                                                <td><?= $datos->telefono ?></td>
                                                                <td><?= $datos->direccion ?></td>
                                                                <td>
                                                                    <a href="../paginasAdmin/editor_cliente.php?cedula=<?= $datos->cedula ?>" class="btn btn-outline-primary">
                                                                        Modificar
                                                                    </a>
                                                                    <a href="../paginasAdmin/adminProduct.php?cedula=<?= $datos->cedula ?>" class="btn btn-outline-primary">
                                                                        Eliminar
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <?php } 
                                                            ?>
                                                        </tbody> 
                                                    </table>
                                                </form>                                         
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">                                       
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Modal Administradores-->
                <div class="col-2 d-flex justify-content-center">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
                        Administradores
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-fullscreen">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Administradores</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid">
                                        <div class="row py-3">
                                            <h5>Administadores registrados</h5>
                                        </div>
                                        <!--Tabla administradores registrados-->
                                        <div class="row">
                                            <div class="col">
                                                <form class="table-responsive tb">
                                                    <table class="table table-striped table-hover table-bordered m-3">
                                                        <thead>
                                                            <tr>
                                                                <th>Cedula</th>
                                                                <th>Nombre</th>
                                                                <th>Apellido</th>
                                                                <th>Contraseña</th>
                                                                <th>Codigo</th>                                                             
                                                            </tr>                   
                                                        </thead>
                                                        <tbody>
                                                            <?php

                                                            include '../paginas/conexion_db.php';
                                                            include '../paginas/eliminar_admin.php';
                                                            
                                                                
                                                            $sql = $conexion->query("SELECT * FROM administrador");
                                                            while($datos = $sql->fetch_object()) { ?>
                                                            <tr class="text-center">
                                                                <td><?= $datos->cedula_admin ?></td>
                                                                <td><?= $datos->nombre_admin ?></td>
                                                                <td><?= $datos->apellido_admin ?></td>
                                                                <td><?= $datos->contra_admin ?></td>
                                                                <td><?= $datos->codigo_admin ?></td>
                                                                <td>
                                                                    <a href="../paginasAdmin/editor_admin.php?cedula_admin=<?= $datos->cedula_admin ?>" class="btn btn-outline-primary">
                                                                        Modificar
                                                                    </a>
                                                                    <a href="../paginasAdmin/adminProduct.php?cedula_admin=<?= $datos->cedula_admin ?>" class="btn btn-outline-primary">
                                                                        Eliminar
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <?php } 
                                                            ?>
                                                        </tbody> 
                                                    </table>
                                                </form>                                         
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">                                       
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Modal Productos-->
                <div class="col-2 d-flex justify-content-center">
                    <!--BTN Dropdown-->
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle bg-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Productos
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        Consulta de productos
                                    </button>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item text-center" href="../paginas/registrar_producto.php">
                                    <button type="button" class="btn btn-primary">
                                        Registrar productos
                                    </button>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item text-center" href="../paginas/reportes.php">
                                    <button type="button" class="btn btn-primary">
                                        Reporte productos
                                    </button>
                                </a>
                            </li>
                        </ul>
                    </div>
            
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-fullscreen">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Productos</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid">                         
                                        <div class="row py-3">
                                            <h5>Productos registrados</h5>
                                        </div>
                                        <!--Tabla productos registrados-->
                                        <div class="row">
                                            <div class="col">
                                                <form class="table-responsive tb">
                                                    <table class="table table-striped table-hover table-bordered m-3">
                                                        <thead>
                                                            <tr>
                                                                <th>Código</th> 
                                                                <th>Nombre</th>
                                                                <th>Descripción</th>
                                                                <th>Disponible</th>
                                                                <th>Precio</th>
                                                                <th>Descuento</th>  
                                                                <th>Catálogo</th>                                                             
                                                            </tr>                   
                                                        </thead>
                                                        <tbody>
                                                            <?php

                                                            include '../paginas/conexion_db.php';
                                                            include '../paginas/eliminar_producto.php';
                                                            
                                                                
                                                            $sql = $conexion->query("SELECT * FROM productos");
                                                            while($datos = $sql->fetch_object()) { ?>
                                                            <tr class="text-center">
                                                                <td><?= $datos->codigo ?></td>
                                                                <td><?= $datos->nombre ?></td>
                                                                <td><?= $datos->descripcion ?></td>
                                                                <td><?php 
                                                                 if(($datos->disponibilidad)==1){
                                                                    echo "si";
                                                                 }else{
                                                                    echo "no";
                                                                 }
                                                                  ?></td>
                                                                <td><?= $datos->precio ?></td>
                                                                <td><?= $datos->descuento ?></td>
                                                                <td><?php 
                                                                 if(($datos->catalogo)==1){
                                                                    echo "Novaventa";
                                                                 }else if(($datos->catalogo)==2){
                                                                    echo "TupperWare";
                                                                 }else{
                                                                    echo "Otro catalogo";
                                                                 }
                                                                  ?></td>
                                                                <td>
                                                                    <a href="../paginasAdmin/editor_producto.php?codigo=<?= $datos->codigo ?>" class="btn btn-outline-primary">
                                                                        Modificar
                                                                    </a>
                                                                    <a href="../paginasAdmin/adminProduct.php?codigo=<?= $datos->codigo ?>" class="btn btn-outline-primary">
                                                                        Eliminar
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <?php } 
                                                            ?>
                                                        </tbody> 
                                                    </table>
                                                </form>                                         
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">                                       
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Modal prefactura-->
                <div class="col-2 d-flex justify-content-center">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop4">
                        Prefactura
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-fullscreen">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Prefactura</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid">
                                        <div class="row py-3">
                                            <h5>Prefacturas registradas</h5>
                                        </div>
                                        <!--Tabla prefacturas registradas-->
                                        <div class="row">
                                            <div class="col">
                                                <form class="table-responsive tb">
                                                    <table class="table table-striped table-hover table-bordered m-3">
                                                        <thead>
                                                            <tr>
                                                                <th>Id</th>
                                                                <th>Fecha</th>
                                                                <th>Correo Cliente</th>
                                                                <th>Cedula Cliente</th>
                                                                <th>Total</th>                                                             
                                                            </tr>                   
                                                        </thead>
                                                        <tbody>
                                                            <?php

                                                            include '../paginas/conexion_db.php';
                                                            include '../paginas/eliminar_prefactura.php';
                                                            
                                                                
                                                            $sql = $conexion->query("SELECT * FROM prefactura");
                                                            while($datos = $sql->fetch_object()) { ?>
                                                            <tr class="text-center">
                                                                <td><?= $datos->id ?></td>
                                                                <td><?= $datos->fecha ?></td>
                                                                <td><?= $datos->correo_cli ?></td>
                                                                <td><?= $datos->cedula_cli ?></td>
                                                                <td><?= $datos->total ?></td>
                                                                <td>
                                                                    <a href="../paginasAdmin/detalles_prefactura.php?id=<?= $datos->id ?>" class="btn btn-outline-primary">
                                                                        Detalles
                                                                    </a>
                                                                    <a href="../paginasAdmin/adminProduct.php?id=<?= $datos->id ?>" class="btn btn-outline-primary">
                                                                        Eliminar
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <?php } 
                                                            ?>
                                                        </tbody> 
                                                    </table>
                                                </form>                                         
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">                                       
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Modal Catálogo-->
                <div class="col-2 d-flex justify-content-center">
                    <!--BTN Dropdown-->
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle bg-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Catálogo
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop6">
                                        Consulta catálogo
                                    </button>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item text-center" href="../paginas/registrar_catalogo.php">
                                    <button type="button" class="btn btn-primary">
                                        Registrar catálogo
                                    </button>
                                </a>
                            </li>
                        </ul>
                    </div>
       
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop6" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-fullscreen">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Catálogos</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid">
                                        <div class="row py-3">
                                            <h5>Catálogos Registrados</h5>
                                        </div>
                                        <!--Tabla catalogo-->
                                        <div class="row">
                                            <div class="col">
                                                <form class="table-responsive tb">
                                                    <table class="table table-striped table-hover table-bordered m-3">
                                                        <thead>
                                                            <tr>
                                                                <th>Nombre</th> 
                                                                <th>Campaña</th>                                                           
                                                            </tr>                   
                                                        </thead>
                                                        <tbody>
                                                            <?php

                                                            include '../paginas/conexion_db.php';
                                                            include '../paginas/eliminar_catalogo.php';
                                                            
                                                                
                                                            $sql = $conexion->query("SELECT * FROM catalogo");
                                                            while($datos = $sql->fetch_object()) { ?>
                                                            <tr class="text-center">
                                                            <input type="hidden" name="id" value="<?= $datos->id ?>">

                                                            <td><?= htmlspecialchars($datos->nombre); ?></td>
                                                            <td>
                                                            <?php
                                                            // Obtener el id de la campaña actual
                                                            $id_final = $datos->id_campana; 

                                                            // Realizar la consulta para obtener los tipos de campaña
                                                            $tipo_campana = $conexion->query("SELECT id, nombre FROM campana");

                                                            // Variable para almacenar el nombre de la campaña encontrada
                                                            $nombre_campana = "Otra campaña";

                                                            // Recorrer todos los resultados
                                                            while ($row = $tipo_campana->fetch_assoc()) { 
                                                            if ($id_final == $row['id']) {
                                                            $nombre_campana = $row['nombre'];
                                                            break; // Salir del bucle cuando se encuentra la coincidencia
                                                                        }
                                                                     }

                                                            // Imprimir el nombre de la campaña encontrada
                                                            echo htmlspecialchars($nombre_campana);
                                                            ?>
                                                            </td>
                                                                <td>
                                                                    <a href="../paginasAdmin/editor_catalogo.php?id=<?= $datos->id ?>" class="btn btn-outline-primary">
                                                                        Modificar
                                                                    </a>
                                                                    <a href="../paginasAdmin/adminProduct.php?id=<?= $datos->id ?>" class="btn btn-outline-primary">
                                                                        Eliminar
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <?php } 
                                                            ?>
                                                        </tbody> 
                                                    </table>
                                                </form>                                         
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">                                       
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Modal Campaña-->
                <div class="col-2 d-flex justify-content-center">
                    <!--BTN Dropdown-->
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle bg-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Campaña
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop5">
                                        Consulta campaña
                                    </button>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item text-center" href="../paginas/registrar_campaña.php">
                                    <button type="button" class="btn btn-primary">
                                        Registrar campaña
                                    </button>
                                </a>
                            </li>
                        </ul>
                    </div>
       
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-fullscreen">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Campañas</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid">
                                        <div class="row py-3">
                                            <h5>Campañas Registradas</h5>
                                        </div>
                                        <!--Tabla campaña-->
                                        <div class="row">
                                            <div class="col">
                                                <form class="table-responsive tb">
                                                    <table class="table table-striped table-hover table-bordered m-3">
                                                        <thead>
                                                            <tr>
                                                                <th>Nombre</th> 
                                                                <th>Fecha Inicio</th>
                                                                <th>Fecha Fin</th>                                                            
                                                            </tr>                   
                                                        </thead>
                                                        <tbody>
                                                            <?php

                                                            include '../paginas/conexion_db.php';
                                                            include '../paginas/eliminar_campaña.php';
                                                            
                                                                
                                                            $sql = $conexion->query("SELECT * FROM campana");
                                                            while($datos = $sql->fetch_object()) { ?>
                                                            <tr class="text-center">
                                                            <input type="hidden" name="id" value="<?= $datos->id ?>">
                                                                <td><?= $datos->nombre ?></td>
                                                                <td><?= $datos->fecha_inicio ?></td>
                                                                <td><?= $datos->fecha_fin ?></td>
                                                                <td>
                                                                    <a href="../paginasAdmin/editor_campana.php?id=<?= $datos->id ?>" class="btn btn-outline-primary">
                                                                        Modificar
                                                                    </a>
                                                                    <a href="../paginasAdmin/adminProduct.php?id=<?= $datos->id ?>" class="btn btn-outline-primary">
                                                                        Eliminar
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <?php } 
                                                            ?>
                                                        </tbody> 
                                                    </table>
                                                </form>                                         
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">                                       
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>                    
        </div>   
    </main>
    <footer>
        <div class="container-fluid">
            <nav class="row navbar navbar-expand-md navbar-dark bg-dark text-light">
                <a href="../indexF.php" class="col navbar-brand">Distribuciones Irreño</a>
                <ul class="col list-unstyled">
                    <li>
                        <h5>Acerca de nosotros</h5>
                    </li>
                    <li>
                        <p>Nuestra sede principal se encuentra ubicada en la Calle 19 No. 11-45 en Tunja, desde donde coordinamos y gestionamos todas nuestras operaciones. 
                            Además, contamos con bodegas y centros de distribución estratégicamente ubicados para garantizar un servicio oportuno y eficiente a nuestros clientes.
                        </p>
                    </li>
                </ul>
                <ul class="col list-unstyled">
                    <li>
                        <h5>Contactanos</h5>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                        </svg>
                          <p>+57 322 577 2456</p>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                        </svg>
                        <p>distribucionesirreno@gmail.com</p>
                    </li>
                </ul>
            </nav>
        </div>
    </footer>

    <!--JS Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>