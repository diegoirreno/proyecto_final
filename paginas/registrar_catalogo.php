<?php
require '../paginas/conexion_db.php';
require 'database.php';

$db = new Database();
$con = $db->conectar(); 

$errors = [];

function registrar(array $datos,$conexion)
{
    $sql = $conexion->prepare("INSERT INTO catalogo (nombre, id_campana) 
    VALUES(?,?)");
    if($sql->execute($datos)){
        return true;
    }
    return false;
}


if(!empty($_POST)){

    $nombre = trim(mb_convert_case($_POST['nombre_catalogo'],MB_CASE_UPPER));
    $id_campana = trim($_POST['id_campana']);


    $validar = "SELECT * FROM catalogo WHERE nombre = '$nombre'";
    $validando = $conexion->query($validar);

    if($validando->num_rows > 0){
        
    echo "<div class='alert alert-warning'>No puedes agregar dos catálogos con el mismo nombre</div>"; 

    }else{
   

    $id = registrar([$nombre,$id_campana], $conexion);

    if($id > 0){
        echo "<div class='alert alert-success'>El catálogo fue registrado con exito</div>";
    }else{
        $errors[] = "Error al registrar la campaña";
    }

    if(count($errors) == 0){

    }else{
        print_r($errors);
    }

    }
}


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link CSS Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Registro de catálogo</title>
</head>
<body class="container-fluid p-0">
    <header>
        <div class="container-fluid p-0">
            <nav class="row navbar navbar-expand-md navbar-light bg-light border-bottom border-primary">
                <div class="col-3">
                    <a class="navbar-brand">Distribuciones Irreño</a>
                </div>
                <div id="Menu" class="col collapse navbar-collapse">
                </div>
            </nav>
        </div>
    </header>
    <main> 
        <div class="container-fluid p-0">
            <div class="row">
                <nav class="col" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../paginasAdmin/adminProduct.php">Volver</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Registro de catálogo</li>
                    </ol>
                </nav>
            </div>
            <div class="row d-flex justify-content-center">
                <form class="col-3 p-3 form" action="../paginas/registrar_catalogo.php" method="post" autocomplete="off">
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <h3>Registro de catálogo</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-journal-plus" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 5.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 .5-.5"/>
                                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2"/>
                                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="name">Nombre</label>
                            <input type="text" name="nombre_catalogo" id="nombre_catalogo" class="form-control border border-dark border-1" required>

                            <label for="tipo_campana">Catalogo</label>
                            <select name="id_campana" id="id_campana" class="form-control border border-dark border-1" required>
                            <option value="">Seleccionar</option>
                            <?php
                            $tipo_campana = $conexion->query("SELECT id, nombre FROM campana");
                            while ($row = $tipo_campana->fetch_assoc()) { ?>
                                <option value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>
                            <?php } ?>
                            </select>

                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col text-center mt-3">
                            <button type="submit" class="btn btn-outline-primary">Registrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer>
        <div class="container-fluid bg-light p-0">
            <nav class="row navbar navbar-expand-md navbar-light bg-light">
                <a class="col navbar-brand">Distribuciones Irreño</a>
                <ul class="col list-unstyled">
                    <li>
                        <h5>Acerca de nosotros</h5>
                    </li>
                    <li>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse quas ea facilis, illum similique sed debitis. 
                            Suscipit placeat accusantium ut doloribus earum quisquam eos velit, adipisci ea temporibus quas beatae!</p>
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
                          <p>+57 ### #######</p>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                        </svg>
                        <p>alguienExample@gmail.com</p>
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