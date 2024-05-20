<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Link CSS Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="./css/index.css">
    <title>Administración de BD</title>
</head>
<body>
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
            </nav>
            <div class="row">
                <div class="col text-center my-3 bg-dark text-light">
                    <h5>Menú Administrador</h5>
                </div>
            </div> 
        </div>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-3">
                    <nav class="mx-2">
                        <p class="d-inline-flex">
                            <a class="btn btn-primary form-control my-3" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Bases de datos
                            </a>
                            </p>
                            <div class="collapse" id="collapseExample">
                                <div class="card card-body">
                                    <ul>
                                        <li>
                                            BS_DistrIrreno
                                            <ul>
                                                <li><a href="#">Cliente</a></li>
                                                <li><a href="#">Administrador</a></li>
                                                <li><a href="#">Prefactura</a></li>
                                                <li><a href="#">Detalle Prefactura</a></li>
                                                <li><a href="#">Producto</a></li>
                                                <li><a href="#">Catálogo</a></li>
                                                <li><a href="#">Campaña</a></li>
                                            </ul>
                                        </li>
                                    
                                    </ul>
                                </div>
                            </div>
                    </nav>
                </div>
                <div class="col-9">
                    <div class="row">
                        <div class="col my-3">
                            <h6>Tabla: Producto</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">

                            <form action="#" class="table-responsive tb">
                                <nav class="row">
                                    <div class="col ml-3">
                                        <input class="form-control me-2" type="search" placeholder="Buscar elemento..." aria-label="search">
                                    </div>
                                    <div class="col">
                                        <button class="btn btn-outline-primary btn-xs" type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                                            </svg>
                                        </button>
                                    </div>
                                </nav>
                                <table class="table table-striped table-hover table-bordered m-3">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>ID</th>
                                            <th>Nombre Producto</th>
                                            <th>Código</th>
                                            <th>Precio</th>
                                            <th>Eliminar</th>
                                        </tr>
                                        <tr>
                                            <th>
                                                <button class="btn btn-outline-primary" type="submit">
                                                    ADD +
                                                </button>
                                            </th>
                                            <th>1</th>
                                            <th><input type="text" placeholder="Nombre del producto"></th>
                                            <th><input type="number" min="0" placeholder="1436521"></th>
                                            <th><input type="number" min="0" placeholder="$####" name="" id=""></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="text-center">
                                                <a href="#" class="btn btn-outline-primary btn-xs">
                                                    -
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container-fluid bg-light p-0">
            <nav class="row navbar navbar-expand-md navbar-light bg-light">
                <a href="../indexAdmin.html" class="col navbar-brand">Distribuciones Irreño</a>
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