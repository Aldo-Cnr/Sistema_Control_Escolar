<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="../../escuela/views/css/styles-login.css">
    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- Iconos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

</head>
<body class="d-flex align-items-center justify-content-center">

    <div class="container d-flex align-items-center justify-content-center">
        <div class="row">
          <div class="col-md-6 text-white cont-izq">
            <!-- Contenido del primer subcontenedor -->
            <h1>!BIENVENIDO!</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel, consequatur? Laborum, vero vel? Molestiae, libero.</p>
          </div>

          <div class="col-md-6 text-white cont-der">
            <!-- Contenido del segundo subcontenedor -->
            <form  action="" method="POST" class="d-flex align-items-center justify-content-center flex-md-column">

              <h2 id="titulo" class="mb-5">Ingresa tus datos para acceder</h2>
              <div class="mb-4 w-100 position-relative">
                <input type="text" name="user" class="form-control text-center" placeholder="Ingresa tu usuario" autocomplete="off">
                <img src="../../escuela/views/assets/icons/user-black.svg" class="input-icon">
              </div>
              <div class="mb-4 w-100 position-relative">
                <input type="password" name="password" class="form-control text-center" placeholder="Ingresa tu contraseña" autocomplete="off">
                <img src="../../escuela/views/assets/icons/key.svg" class="input-icon">
              </div>
              <button type="submit" class="btn mb-4">Acceder</button>
              <p>¿Aun no tienes una cuenta? <a href="views/alumno/registro-alumno.php">Registrate</a> gratis!!!</p>
              
            </form>
          </div>

        </div>
      </div>

    <!-- Boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>