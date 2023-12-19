

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="../../../escuela/views/css/styles-admin.css">
    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- Iconos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="row d-flex flex-row justify-content-between h-100 m-0">
        
        <div class="cont-menu col-md-2">
            <div class="menu">
                <div class="perfil text-center">
                    <img src="../../../escuela/views/assets/img/perfil.jpg" alt="Foto de perfil Administrador">
                    <h2><?php echo $user->getNombre(); ?></h2>
                    <p>Administrador</p>
                </div>
                <hr class="sep-menu">
                    <div class="opciones overflow-auto">
                        <nav>
                            <ul class="mt-5">
                                <li class="mb-4">
                                    <img src="../../../escuela/views/assets/icons/dash-gray.svg" class="">
                                    <p onclick="panel_principal()">Panel principal</p>
                                </li>
                                <li class="mb-4">
                                    <img src="../../../escuela/views/assets/icons/user-gray.svg" class="">
                                    <p onclick="ver_alumnos()">Alumnos</p>
                                </li>
                                <li class="mb-4">
                                    <div class="list-button">
                                        <img src="../../../escuela/views/assets/icons/book.svg" class="">
                                        <p class="d-inline-block sub-menu">Docentes</p>
                                        <img src="../../../escuela/views/assets/icons/arrow.svg" class="list-arrow">
                                    </div>
                                    <ul class="list-show">
                                        <li class="mb-2 mt-1"><p onclick="ver_docentes()">Ver docentes</p></li>
                                        <li class="mb-2"><p onclick="registrar_docente()">Crear cuenta</p></li>
                                    </ul>
                                    
                                </li>
                                <li class="mb-4">
                                    <div class="list-button">
                                        <img src="../../../escuela/views/assets/icons/suitcase.svg" class="">
                                        <p class="d-inline-block sub-menu">Administradores</p>
                                        <img src="../../../escuela/views/assets/icons/arrow.svg" class="list-arrow">
                                    </div>
                                    <ul class="list-show">
                                        <li class="mb-2 mt-1"><p onclick="ver_admin()">Ver administradores</p></li>
                                        <li class="mb-2"><p onclick="registrar_admin()">Crear cuenta</p></li>
                                    </ul>
                                </li>
                                <li class="mb-4">
                                    <img src="../../../escuela/views/assets/icons/calendar.svg" class="">
                                    <p onclick="ver_semestres()">Semestres</p>
                                </li>
                                <li class="mb-4">
                                    <img src="../../../escuela/views/assets/icons/home.svg" class="">
                                    <p onclick="ver_aulas()">Aulas</p>
                                </li>
                                <li class="mb-4">
                                    <img src="../../../escuela/views/assets/icons/clock-gray.svg" class="">
                                    <p onclick="ver_horarios()">Horarios</p>
                                </li>
                                
                            </ul>
                        </nav>
                    </div>
            </div>
        </div>
        
        
        <div class="cont-panel col-md-10">
            <div class="panel-menu">
                <img src="../../../escuela/views/assets/icons/menu.svg" >
            </div>
            <hr class="">
            <div class="panel-encabezado">
                <div class="titulo d-flex aling-items-center justify-content-between ">
                    <div class="d-flex"> 
                        <img src="../../../escuela/views/assets/icons/dash-black.svg" >
                        <h1>PANEL PRINCIPAL</h1>
                    </div>
                    <div>
                        <a class="text-dark fs-5" href="../../../escuela/config/logout.php">Cerrar Sesión</a>
                    </div>
                </div>
                <div class="descripcion">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed quos quo, maiores similique atque vero harum odio amet iste placeat quae recusandae numquam, voluptatum tenetur porro quia, doloremque non necessitatibus.</p>
                </div>
            </div>
            <div class="panel overflow-auto">
                <iframe src="../../../escuela/views/admin/panel-principal.php" id="panel-admin" frameborder="0"></iframe>
            </div>
        </div>
        
    </div>
        
        
    <!-- Boostrap -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
     <!-- Menu -->
     <script src="../../../escuela/views/js/menu.js"></script>
     <script src="../../../escuela/views/js/vistas-admin.js"></script>
</body>
</html>