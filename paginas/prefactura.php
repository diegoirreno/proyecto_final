<?php

    include 'config.php';
    include 'database.php';

    $db = new Database();
    $con = $db->conectar();

    $productos = isset($_SESSION['carrito']['productos']) ? $_SESSION['carrito']['productos'] : null;

    //print_r($_SESSION);

    $lista_carrito = array();

    if($productos != null) {

        foreach($productos as $clave => $cantidad){
        $sql = $con->prepare("SELECT codigo,nombre,precio,descuento,disponibilidad, $cantidad AS cantidad FROM productos WHERE codigo=? AND disponibilidad = 1");
        $sql->execute([$clave]);
        $lista_carrito[] = $sql->fetch(PDO::FETCH_ASSOC); 
        }
    }else{
        echo'
        <script>
            alert("No hay productos registrados");
            window.location = "../indexF.php"
        </script>
    ';
    }
    //session_destroy();
  

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--Link CSS Bootstrap-->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="../css/index.css">
    <title>Cola del pedido</title>
</head>
<body class="container-fluid p-0">  
    <header>
        <div class="container-fluid p-0">
            <nav class="row navbar navbar-expand-md navbar-light bg-light border-bottom border-primary">

                <div class="col-3">
                    <a href="../indexF.php" class="navbar-brand">Distribuciones Irreño</a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#Menu">
                        <span class="navbar-toggler-icon">
                        </span>
                    </button>
                </div>
                
                <!--Todo lo que esta dentro del menu desplegable-->

                <div id="Menu" class="col collapse navbar-collapse">
                    <ul class="col navbar-nav ms-3">
                        <div class="col-4 col-sm-6 p-0">
                        </div>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <div class="container-fluid p-0">
            <div class="row text-center my-3">
                <div class="col">
                    <h4>Prefactura</h4>
                </div>
            </div>
            <!--Row contenedora del Hero-->
            <div class="row mt-3">
                <!--Col izquierda que contiene la cola de los productos-->
                <div class="col" >
                        <div class="table-responsive tb ">
                            <table class="table table-striped table-hover table-bordered m-3">
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Nombre Producto</th>
                                        <th>Valor unitario</th>
                                        <th>Cantidad</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if($lista_carrito == null){
                                        echo '<tr>
                                            <td colspan="5"><center>Lista vacia, no has agregado productos</center></td>
                                            </tr>'; 
                                    }else{

                                        $total = 0;
                                        foreach($lista_carrito as $producto){

                                            $_codigo = $producto['codigo'];
                                            $nombre = $producto['nombre'];
                                            $precio = $producto['precio'];
                                            $descuento = $producto['descuento'];
                                            $cantidad = $producto['cantidad'];
                                            $precio_desc = $precio - (($precio*$descuento)/100);
                                            $subtotal = $cantidad * $precio_desc;
                                            $total += $subtotal;
                                        ?>   
                                    <tr>
                                        <td><?php echo $_codigo ?></td>    
                                        <td><?php echo $nombre ?></td>
                                        <td><?php echo MONEDA . number_format($precio_desc,0, '.', ','); ?></td>
                                        <td><?php echo $cantidad ?></td>
                                        <td>
                                            <div id="subtotal_<?php echo $_codigo; ?>" name="subtotal[]"><?php echo MONEDA . 
                                            number_format($subtotal,0, '.', ','); ?></div>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                             <?php } ?>
                            </table>
                         </div>
                     </div>
            </div>
            <!---->
            <div class="row my-3">
                <div class="col bg-light">
                    <h6>Total: <?php 
                    if(empty($total)){
                        echo '$0';
                    }else {
                        echo MONEDA . number_format($total, 0, '.', ','); 
                    }
                    ?></h6>
                </div>
            </div>
            <a type="button" href="../indexF.php">Finalizar
            <?php
                    session_destroy();
                    ?>
            </a>
        </div>
    </main>
    <footer>
        <div class="container-fluid bg-light p-0">
            <nav class="row navbar navbar-expand-md navbar-light bg-light">
                <a href="../indexF.php" class="col navbar-brand">Distribuciones Irreño</a>
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