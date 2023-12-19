<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Aula</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/admin/styles-editar-alumno.css">
    <style>
        input[type=number]::-webkit-inner-spin-button, 
        input[type=number]::-webkit-outer-spin-button { 
            -webkit-appearance: none; 
            margin: 0; 
        }
        .container{
            width: 400px;
            height: 350px;
            background: linear-gradient(120deg, #181818 50%, #8c8b8a 50%);
            border-radius: 25px;
            border-radius: 25px;
            box-shadow: 5px 5px 20px 0px rgb(175, 172, 172);
        }
    </style>
</head>
<body>
    <?php
        include('/xampp/htdocs/escuela/controllers/aulas/editar-aula-controller.php');
    ?>
    <!-- Modal Editar Administrador-->
    <div class="container d-flex align-items-center justify-content-center">
        <form method="POST" class="d-flex align-items-center justify-content-center flex-md-column">
            <h2 class="mb-2 mt-2">Editar Aula</h2>
            <div class="mb-2 w-100 position-relative">
                <label class="text-white">Nombre:</label>
                <input type="text" class="form-control text-center" name="nombre" value="<?php echo $nombre; ?>" autocomplete="off">
            </div>
            <div class="mb-2 w-100 position-relative">
                <label for="tipo" class="text-dark">Tipo de Aula:</label>
                <select class="rounded-2 w-100 text-center" name="tipo" id="tipo">
                  <option value="Aula Regular">Aula Regular</option>
                  <option value="Laboratorio de Ciencias">Lab. Ciencias</option>
                  <option value="Laboratorio de Cómputo">Lab. Cómputo</option>
                  <option value="Salon de Arte">Salon de Arte</option>
                  <option value="Gimnasio">Gimnasio</option>
                </select>
            </div>
            <div>
                <a href="../aulas.php" class="btn btn-danger">Cancelar</a>
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