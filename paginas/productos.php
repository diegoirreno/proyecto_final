<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="container-fluid">
    <header>
        <div class="container-fluid p-0">
            <nav class="row navbar navbar-expand-md navbar-light bg-light border-bottom border-primary">

                <div class="col-3">
                    <a href="../index.php" class="navbar-brand">Distribuciones Irreño</a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#Menu">
                        <span class="navbar-toggler-icon">
                        </span>
                    </button>
                </div>
                
                <!--Todo lo que esta dentro del menu desplegable-->

                <div id="Menu" class="col collapse navbar-collapse">
                    <ul class="col navbar-nav ms-3">
                        <div class="col-8 col-sm-6 p-0">
                            <form action="#" class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="search">
                                <button class="btn btn-outline-primary btn-xs" type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                                        </svg>
                                </button>
                            </form>
                        </div>
                        <div class="col-4 col-sm-6 p-0">
                            <li class="nav-item d-flex align-items-center"> 
                                <a target="_blank" class="nav-link" href="./login.html">Registrarse</a>
                                <a target="_blank" type="button" href="./colaPedido.html" class="btn btn-outline-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                                        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 
                                        3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
                                        </svg>
                                </a>
                            </li> 
                        </div>

                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <div class="container-fluid p-0">
            <div class="row">
                <!-- Sidebar -->
                <div class="col-md-3">
                    <div class="list-group">
                        <nav class="nav flex-column nav-pills ">        
                            <p class="d-inline-flex gap-1">
                            <a class="btn btn-primary form-control my-3" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Catálogo
                            </a>
                            </p>
                            <div class="collapse" id="collapseExample">
                                <div class="card card-body">
                                    <a class="" id="catalogo-1" href="#">NOVAVENTA</a>
                                    <a class="" id="catalogo-2" href="#">AVON</a>
                                    <a class="" id="catalogo-3" href="#">TUPPERWARE</a>
                                </div>
                            </div>
                            
                        </nav>
                        <div class="col-9">
                            <div id="productos"></div>
                        </div>

                        <!-- Filtros -->
                        <a href="#" class="list-group-item list-group-item-action active">Filtros</a>
                        <!-- Tipo de producto -->
                        <a href="#" class="list-group-item list-group-item-action">Tipo de producto</a>
                        <!-- Checkbox Aseo -->
                        <div class="list-group-item list-group-item-action">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="true" id="aseo">
                                <label class="form-check-label" for="aseo">
                                    Aseo
                                </label>
                            </div>
                        </div>
                        <!-- Checkbox Alimentos -->
                        <div class="list-group-item list-group-item-action">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="true" id="alimentos">
                                <label class="form-check-label" for="alimentos">
                                    Alimentos
                                </label>
                            </div>
                        </div>
                        <!-- Checkbox Productos para el hogar -->
                        <div class="list-group-item list-group-item-action">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="true" id="productoshogar">
                                <label class="form-check-label" for="productoshogar">
                                    Productos para el hogar
                                </label>
                            </div>
                        </div>
                        <!-- Checkbox Higiene y cuidado personal -->
                        <div class="list-group-item list-group-item-action">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="true" id="higiene">
                                <label class="form-check-label" for="higiene">
                                    Higiene y cuidado personal
                                </label>
                            </div>
                        </div>
                        <!-- Checkbox Productos para mascotas -->
                        <div class="list-group-item list-group-item-action">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="true" id="higiene">
                                <label class="form-check-label" for="higiene">
                                    Productos para mascotas
                                </label>
                            </div>
                        </div>
                        <!-- Precio -->
                        <a href="#" class="list-group-item list-group-item-action">Precio</a>
                        <!-- Radio button $100 -->
                        <div class="list-group-item list-group-item-action">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="precio" id="precio1" value="100">
                                <label class="form-check-label" for="precio1">
                                    $100
                                </label>
                            </div>
                        </div>
                        <!-- Radio button $500 -->
                        <div class="list-group-item list-group-item-action">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="precio" id="precio2" value="500">
                                <label class="form-check-label" for="precio2">
                                    $500
                                </label>
                            </div>
                        </div>
                        <!-- Radio button $1000 -->
                        <div class="list-group-item list-group-item-action">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="precio" id="precio3" value="1000">
                                <label class="form-check-label" for="precio3">
                                    $1000
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Productos -->
                <div class="col my-3">
                    <!-- Producto 1 -->
                    <div class="card mb-4" style="width: 650px;">
                        <div class="row g-0">
                            <!-- Imagen producto 1 -->
                            <div class="col-md-4 align-self-center">
                                <img src="../sources/cafe.png" class="" width="90%" alt="cafeNov">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">NOVAVENTA</h5>
                                    <p class="card-text text-end"><small class="text-body-secondary">Cod:213123</small>
                                    <p class="card-text">Cafe Instantaneo Nescafe 170 G</p>
                                    <p class="card-text text-end"><small class="text-body-secondary">27,538 $
                                            COP*</small>
                                    </p>
                                    <!-- Botón añadir al pedido -->
                                    <a href="./verProducto.html" target="_blank" class="btn btn-primary">Añadir al pedido</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Producto 2 -->
                    <div class="card mb-4" style="width: 650px;">
                        <div class="row g-0">
                            <!-- Imagen producto 2 -->
                            <div class="col-md-4 align-self-center">
                                <img src="../sources/burbuja.png" class="border border-dark border-5" width="90%" alt="aseo2">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">NOVAVENTA</h5>
                                    <p class="card-text text-end"><small class="text-body-secondary">Cod:213123</small>
                                    <p class="card-text">Burbujas Jet x12</p>
                                    <p class="card-text text-end"><small class="text-body-secondary">#### $ COP*</small>
                                        <!-- Botón añadir al pedido -->
                                        <a href="./verProducto.html" target="_blank" class="btn btn-primary">Añadir al pedido</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Producto 3 -->
                    <div class="card mb-4" style="width: 650px;">
                        <div class="row g-0">
                            <!-- Imagen producto 3 -->
                            <div class="col-md-4 align-self-center">
                                <img src="../sources/gsc_124405791_3970232_1.avif" class="img-fluid rounded-start" width="90%" alt="aseo3">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Producto 3</h5>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Sed interdum, enim vel ultricies convallis, diam velit
                                        vestibulum turpis, eget posuere dui enim vel turpis.
                                    </p>
                                    <ul class="list-unstyled">
                                        <li>Categoria: Aseo</li>
                                        <li>Precio: $100</li>
                                    </ul>
                                    <!-- Botón añadir al pedido -->
                                    <a href="./verProducto.php" target="_blank" class="btn btn-primary">Añadir al pedido</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container-fluid bg-light p-0">
            <nav class="row navbar navbar-expand-md navbar-light bg-light">
                <a href="../index.php" class="col navbar-brand">Distribuciones Irreño</a>
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
    <!-- Custom JS -->
    <!--<script src="js/script.js"></script>-->
</body>

</html>