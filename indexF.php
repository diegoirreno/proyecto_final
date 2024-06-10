
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--Link CSS Bootstrap-->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="./css/index.css">

    <title>Distribuciones Irreño</title>
</head>
<body>
    <header>
        <div class="container-fluid p-0">
            <nav class="row navbar navbar-expand-md navbar-light bg-light border-bottom border-primary">

                <div class="col-3"> 
                    <a class="navbar-brand">Distribuciones Irreño</a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#Menu">
                        <span class="navbar-toggler-icon">
                        </span>
                    </button>
                </div>
                
                <!--Todo lo que esta dentro del menu desplegable-->

                <div id="Menu" class="collapse navbar-collapse">
                    <ul class="col navbar-nav ms-3 d-flex justify-content-end p-0">
                        <!-- Barra de busqueda
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
                        -->

                        <div class="col-2 col-sm-2 p-0">
                            <li class="nav-item d-flex justify-content-end"> 
                                <a class="btn btn-outline-primary" href="paginas/registrar_cli.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                        <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5"/>
                                    </svg>
                                    Registrarse
                                </a>
                            </li> 
                        </div>
                        <div class="col-1 d-flex justify-content-center">
                            <a type="button" href="paginas/colaPedido.php" class="btn btn-outline-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 
                                    3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
                                </svg>
                            </a>
                        </div>
                        <div class="col-2 col-sm-auto p-0 d-flex justify-content-end">
                            <a href="indexAdmin.php" type="button" class="btn btn-outline-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-fill-gear" viewBox="0 0 16 16">
                                <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4m9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382zM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0"/>
                                </svg>
                                Administrador
                            </a>
                        </div>
                    </ul>
                </div>

            </nav>
        </div>
    </header>

    <!--Hero de la pagina-->

    <main>
        <div class="container-fluid text-center">
            <div class="row text-reset">
                <div class="col bg-dark text-light">
                    <h4>Nuestros catálogos</h4>
                </div>
            </div>
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-4 p-0 bg-light">
                    <!--Carousel-->
                    <div id="carouselC" class="carousel slide">
                        <ol class="carousel-indicators">
                          <li type="button" data-bs-target="#carouselC" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></li>
                          <li type="button" data-bs-target="#carouselC" data-bs-slide-to="1" aria-label="Slide 2"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <a href="paginas/catalogo_producto.php">
                                <img src="./sources/Catal1.jpg" class="d-block w-100 img-fluid" alt="slide1">
                            </a>
                          </div>
                          <div class="carousel-item">
                            <a href="paginas/catalogo_tupper.php">
                                <img src="./sources/Catal2.jpg" class="d-block w-100 img-fluid" alt="slide2">
                            </a>
                          </div>
                        </div>
                        <a class="carousel-control-prev bg-light" type="button" href="#carouselC" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next bg-light" type="button" href="#carouselC" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Siguiente</span>
                        </a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="row bg-dark text-light">
                <ul class="col ml-3 mt-3 list-unstyled">
                    <li>
                        <h4>¿Quiénes somos?</h4>
                    </li>
                    <li>
                        <p class="text-justify">
                        Distribuciones Irreño es una empresa dedicada a la distribución de productos de marcas reconocidas como Novaventa y Tupperware. 
                        <br>
                        Nuestro objetivo principal es hacer llegar estos productos de calidad a los consumidores finales a través de una red de distribuidores.
                        <br>
                        Somos un equipo apasionado por el servicio al cliente y la excelencia operativa. Nos enorgullece mantener relaciones sólidas y de confianza con nuestros 
                        proveedores y distribuidores. Nuestra amplia experiencia en el sector nos permite ofrecer soluciones innovadoras y adaptadas a las necesidades de nuestros 
                        socios comerciales.
                        <br>
                        Nos caracterizamos por nuestro compromiso con la mejora continua, la transparencia y el trabajo en equipo. Estos son los pilares que sustentan nuestro 
                        crecimiento y nos permiten consolidarnos como una empresa líder en la distribución de productos de marca.
                        </p>
                    </li>
                </ul>
                <ul class="col mt-3 list-unstyled d-flex align-items-center justify-content-center">
                    <li>
                        <img src="./sources/imgQ.png" class="mx-auto d-block rounded img-fluid" width="500px" alt="ejemploI">
                    </li>
                </ul>
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