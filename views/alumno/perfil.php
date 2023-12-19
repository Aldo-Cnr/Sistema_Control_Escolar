<?php

  include('/xampp/htdocs/escuela/config/conexion_PDO.php');
    
  $matricula = (isset($_GET['id_alumno'])?$_GET['id_alumno']:'');
  $stm = $conexion->prepare('SELECT * FROM alumnos WHERE id_alumno = :matricula');
  $stm->bindParam(":matricula", $matricula);
  $stm->execute();
  $alumno = $stm->fetch(PDO::FETCH_LAZY);
  $nombres = $alumno['nombres'];
  $apellidos = $alumno['apellidos'];
  $edad = $alumno['edad'];
  $status = $alumno['status'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil Alumnos</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="../css/styles-perfil.css">
    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- Iconos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

</head>
<body class="d-flex align-items-center justify-content-center vh-100">

    <div class="card cont-card text-white d-flex align-items-center justify-content-center">
        <div class="card-header fs-3 mt-5">
          Informacion Personal
        </div>
        <div class="card-body w-100 h-100 text-center d-flex flex-column justify-content-center align-items-center">
          <div class="row mb-3">
            <div class="col-md-6">
              <div class="mb-4 mt-1 w-100">
                <label for="matricula" class="m-2">Matricula:</label>
                <input type="text" class="rounded-3 text-center" value="<?php echo $matricula; ?>" readonly>
              </div>
              <div class="mb-4 mt-4 w-100">
                <label for="nombre" class="m-2">Nombre(s):</label>
                <input type="text" class="rounded-3 text-center" value="<?php echo $nombres; ?>" readonly>
              </div>
            </div>
            <div class="col-md-6">
            <div class="mb-4 mt-1 w-100">
                <label for="status" class="m-2">Status de pago:</label>
                <input type="text" class="rounded-3 text-center" value="<?php echo $status; ?>" readonly>
              </div>
              <div class="mb-4 w-100">
                <label for="apellidos" class="m-2">Apellidos:</label>
                <input type="text" class="rounded-3 text-center" value="<?php echo $apellidos; ?>" readonly>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="mb-4 w-100">
                <label for="edad" class="m-2">Edad:</label>
                <input type="text" class="rounded-3 text-center" value="<?php echo $edad; ?>" readonly>
              </div>
            </div>
          </div>
        

          <a href="../../views/alumno/editar-perfil.php?id_alumno=<?php echo $matricula; ?>" class="btn btn-primary mt-2 mb-5">Editar Perfil</a>
        </div>
      </div>

    <!-- Boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>