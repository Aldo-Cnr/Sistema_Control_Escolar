

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumno</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="../../views/css/styles-panel.css">
    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- Iconos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    
</head>
<body class="d-flex align-items-center justify-content-center">

    <div class="container d-flex flex-column">
        <div class="row mb-2">
            <div class="col-md-4 d-flex align-items-center justify-content-center">
                <a href="../alumno/perfil.php?id_alumno=<?php echo $_GET['id_alumno'] ?>" class="card bg-transparent">
                    <img class="card-img-top" src="../assets/icons/user-black.svg" alt="Card image cap">
                    <hr class="mb-0 mt-0">
                    <div class="card-body mt-0">
                        <p class="card-text text-center">Perfil</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4 d-flex align-items-center justify-content-center">
                <a href="../alumno/horarios.php?id_alumno=<?php echo $_GET['id_alumno'] ?>" class="card bg-transparent">
                    <img class="card-img-top" src="../assets/icons/calendar-black.svg" alt="Card image cap">
                    <hr class="mb-0 mt-0">
                    <div class="card-body">
                        <p class="card-text text-center">Horario</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4 d-flex align-items-center justify-content-center">
                <a href="../alumno/calificaciones.php?id_alumno=<?php echo $_GET['id_alumno'] ?>" class="card bg-transparent">
                    <img class="card-img-top" src="../assets/icons/file-black.svg" alt="Card image cap">
                    <hr class="mb-0 mt-0">
                    <div class="card-body">
                        <p class="card-text text-center">Calificaiones</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
        
    <!-- Boostrap -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>