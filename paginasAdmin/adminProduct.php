<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Link CSS Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
     <link rel="stylesheet" href="./css/index.css">
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
        <div class="container-fluid">
            <nav class="row m-2">
                <!--Modal Productos-->
                <div class="col-4 d-flex justify-content-center">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Productos
                    </button>
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
                                        <div class="row">
                                            <h5>Registrar producto</h5>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="row">
                                                    <div class="col">
                                                        <form action="#" class="table-responsive tb">
                                                            <div class="row">
                                                                <table class="table table-striped table-hover table-bordered m-3">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Código</th>
                                                                            <th>Nombre</th>
                                                                            <th>Descripción</th>
                                                                            <th>Disponibilidad</th>
                                                                            <th>Precio</th>
                                                                            <th>Descuento</th>
                                                                        </tr>  
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><input type="text" placeholder="Código del producto"></td>
                                                                            <td><input type="text" placeholder="Nombre del producto"></td>
                                                                            <td><input type="text" placeholder="Descripción del producto"></td>
                                                                            <td><input type="number" min="0" placeholder="0" name="" id=""></td>
                                                                            <td><input type="number" min="0" placeholder="Precio" name="" id=""></td>
                                                                            <td><input type="number" min="0" placeholder="0" name="" id=""></td>
                                                                        </tr>
                                                                    </tbody> 
                                                                </table>
                                                            </div>
                                                        <div class="row">
                                                                <div class="col d-flex justify-content-center">
                                                                    <button class="btn btn-outline-primary">
                                                                        Agregar producto
                                                                    </button>
                                                                </div>                                                                   
                                                        </div>                                                              
                                                        </form>                                                           
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                           
                                        <div class="row py-3">
                                            <h5>Productos registrados</h5>
                                        </div>
                                        <!--Tabla productos registrados-->
                                        <div class="row">
                                            <div class="col">
                                                <form action="#" class="table-responsive tb">
                                                    <nav class="row">
                                                        <div class="col ml-3">
                                                            <input class="form-control ms-3" type="search" placeholder="Buscar producto..." aria-label="search">
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
                                                                <th>Código</th>
                                                                <th>Nombre</th>
                                                                <th>Descripción</th>
                                                                <th>Disponibilidad</th>
                                                                <th>precio</th>
                                                                <th>Descuento</th>
                                                                <th>Eliminar</th>
                                                            </tr>                   
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>31414</td>
                                                                <td>Galletas</td>
                                                                <td>Galletas oreo de 100gr</td>
                                                                <td>4</td>
                                                                <td>$4000</td>
                                                                <td>0</td>
                                                                <td>
                                                                    <input type="number">
                                                                    <button class="btn btn-outline-primary">
                                                                        Eliminar
                                                                    </button>
                                                                </td>
                                                            </tr>
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
                <!--Modal Clientes-->
                <div class="col-4 d-flex justify-content-center">
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
                                        <div class="row">
                                            <h5>Registrar Cliente</h5>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="row">
                                                    <div class="col">
                                                        <form action="#" class="table-responsive tb">
                                                            <div class="row">
                                                                <table class="table table-striped table-hover table-bordered m-3">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Cedula</th>
                                                                            <th>Nombre</th>
                                                                            <th>Apellido</th>
                                                                            <th>Coreo-e</th>
                                                                            <th>Teléfono</th>
                                                                            <th>Dirección</th>
                                                                        </tr>  
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><input type="text" placeholder="#Cedula"></td>
                                                                            <td><input type="text" placeholder="Nombre"></td>
                                                                            <td><input type="text" placeholder="Apellido"></td>
                                                                            <td><input type="text" placeholder="Correo-e" name="" id=""></td>
                                                                            <td><input type="text" placeholder="Teléfono" name="" id=""></td>
                                                                            <td><input type="text" placeholder="Dirección"></td>
                                                                        </tr>
                                                                    </tbody> 
                                                                </table>
                                                            </div>
                                                        <div class="row">
                                                                <div class="col d-flex justify-content-center">
                                                                    <button class="btn btn-outline-primary">
                                                                        Agregar cliente
                                                                    </button>
                                                                </div>                                                                   
                                                        </div>                                                              
                                                        </form>                                                           
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row py-3">
                                            <h5>Clientes registrados</h5>
                                        </div>
                                        <!--Tabla clientes registrados-->
                                        <div class="row">
                                            <div class="col">
                                                <form action="#" class="table-responsive tb">
                                                    <nav class="row">
                                                        <div class="col ml-3">
                                                            <input class="form-control ms-3" type="search" placeholder="Buscar cliente..." aria-label="search">
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
                                                                <th>Cedula</th>
                                                                <th>Nombre</th>
                                                                <th>Apellido</th>
                                                                <th>Correo-e</th>
                                                                <th>Teléfono</th>
                                                                <th>Dirección</th>                                                               
                                                            </tr>                   
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>31414</td>
                                                                <td>Galletas</td>
                                                                <td>Galletas oreo de 100gr</td>
                                                                <td>4</td>
                                                                <td>$4000</td>
                                                                <td>0</td>
                                                                <td>
                                                                    <button class="btn btn-outline-primary">
                                                                        Eliminar
                                                                    </button>
                                                                </td>
                                                            </tr>
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
                <div class="col-4 d-flex justify-content-center">
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
                                        <div class="row">
                                            <h5>Registrar Administrador</h5>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="row">
                                                    <div class="col">
                                                        <form action="#" class="table-responsive tb">
                                                            <div class="row">
                                                                <table class="table table-striped table-hover table-bordered m-3">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Cedula</th>
                                                                            <th>Nombre</th>
                                                                            <th>Apellido</th>
                                                                            <th>Contraseña</th>
                                                                            <th>Código</th>
                                                                        </tr>  
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><input type="text" placeholder="Cedula"></td>
                                                                            <td><input type="text" placeholder="Nombre"></td>
                                                                            <td><input type="text" placeholder="Apellido"></td>
                                                                            <td><input type="password" name="" id=""></td>
                                                                            <td><input type="text" placeholder="Código" name="" id=""></td>
                                                                        </tr>
                                                                    </tbody> 
                                                                </table>
                                                            </div>
                                                        <div class="row">
                                                                <div class="col d-flex justify-content-center">
                                                                    <button class="btn btn-outline-primary">
                                                                        Agregar administrador
                                                                    </button>
                                                                </div>                                                                   
                                                        </div>                                                              
                                                        </form>                                                           
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row py-3">
                                            <h5>Administadores registrados</h5>
                                        </div>
                                        <!--Tabla administradores registrados-->
                                        <div class="row">
                                            <div class="col">
                                                <form action="#" class="table-responsive tb">
                                                    <nav class="row">
                                                        <div class="col ml-3">
                                                            <input class="form-control ms-3" type="search" placeholder="Buscar administrador..." aria-label="search">
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
                                                                <th>Cedula</th>
                                                                <th>Nombre</th>
                                                                <th>Apellido</th>
                                                                <th>Contraseña</th>
                                                                <th>Código</th>                                                             
                                                            </tr>                   
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>31414</td>
                                                                <td>Galletas</td>
                                                                <td>Galletas oreo de 100gr</td>
                                                                <td>4</td>
                                                                <td>$4000</td>
                                                                <td>
                                                                    <button class="btn btn-outline-primary">
                                                                        Eliminar
                                                                    </button>
                                                                </td>
                                                            </tr>
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