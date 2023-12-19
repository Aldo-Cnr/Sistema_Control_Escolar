
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Informacion</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../views/css/admin/styles-editar-alumno.css">
    <style>
        input[type=number]::-webkit-inner-spin-button, 
        input[type=number]::-webkit-outer-spin-button { 
            -webkit-appearance: none; 
            margin: 0; 
        }
        .container{
            width: 400px;
            height: 400px;
            background: linear-gradient(120deg, #181818 50%, #8c8b8a 50%);
            border-radius: 25px;
            border-radius: 25px;
            box-shadow: 5px 5px 20px 0px rgb(175, 172, 172);
        }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center vh-100">
    <?php
        include('/xampp/htdocs/escuela/controllers/docentes/editar-perfil-controller.php');
    ?>
    <!-- Modal Editar Docente-->
    <div class="container d-flex align-items-center justify-content-center">
        <form method="POST" class="d-flex align-items-center justify-content-center flex-md-column">
            <h2 class="mb-2 mt-2">Editar Perfil</h2>
            <div class="mb-2 w-100 position-relative">
                <label class="text-white">Nombre(s):</label>
                <input type="text" class="form-control text-center" name="nombres" value="<?php echo $nombres; ?>" placeholder="Nombre(s)" autocomplete="off">
            </div>
            <div class="mb-2 w-100 position-relative">
                <label class="text-white">Apellidos:</label>
                <input type="text" class="form-control text-center" name="apellidos" value="<?php echo $apellidos; ?>" placeholder="Apellidos" autocomplete="off">
            </div>
            <div class="mb-5 w-100 position-relative">
                <label class="text-white">Edad:</label>
                <input type="number" class="form-control text-center" name="edad" value="<?php echo $edad; ?>" placeholder="Edad" autocomplete="off">
            </div>
            <div>
                <a href="../../views/docente/perfil.php?id_docente=<?php echo $_GET['id_docente']; ?>" class="btn btn-danger">Cancelar</a>
                <input type="submit" class="btn btn-primary" name="update" value="Guardar Cambios"/>
            </div>
        </form>
    </div>

    <!-- Boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>