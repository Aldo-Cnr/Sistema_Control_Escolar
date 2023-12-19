<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="../css/styles-registro-alumno.css">
    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- Iconos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<body class="d-flex align-items-center justify-content-center">
    
    <div class="container d-flex align-items-center justify-content-center">
        <div class="row d-flex align-items-center justify-content-center">
          <div class="col-md-12 text-white text-center">
            <form  action="" method="POST" class="d-flex align-items-center justify-content-center flex-md-column">
              <h2 id="titulo" class="mb-5">Completa los campos para crear una cuenta.</h2>
              <div class="mb-4 w-100 position-relative">
                <input type="text" class="form-control text-center" name="usuario" placeholder="Ingresa un nombre de usuario" autocomplete="off">
                <i class="bi bi-person-fill input-icon"></i>
              </div>
              <div class="mb-4 w-100 position-relative">
                <input type="email" class="form-control text-center" name="correo" placeholder="Ingresa un correo electronico" autocomplete="off">
                <i class="bi bi-envelope-at-fill input-icon"></i>
              </div>
              <div class="mb-4 w-100 position-relative">
                  <input type="tel" class="form-control text-center" name="telefono" placeholder="Ingresa un numero telefónico" autocomplete="off">
                  <i class="bi bi-telephone-fill input-icon"></i>
              </div>
              <div class="mb-4 w-100 position-relative">
                <input type="password" class="form-control text-center" name="pass" placeholder="Ingresa una contraseña" autocomplete="off">
                <i class="bi bi-key-fill input-icon"></i>
              </div>
              <div class="mb-4 w-100 position-relative">
                <input type="text" class="form-control text-center" name="matricula" placeholder="Ingresa tu matrícula" autocomplete="off">
                <i class="bi bi-person-fill-lock input-icon"></i>
              </div>
              <button type="submit" name="register" class="btn mb-4">Registrarse</button>
              <a href="../../index.php">Iniciar Sesión</a>
            </form>
          </div>

        </div>
      </div>

      <?php
      include('../../controllers/alumnos/registro-alumno-controller.php');
      ?>



    <!-- Boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>