<?php
include('/xampp/htdocs/escuela/config/conexion_PDO.php');

if(isset($_GET['id_materia'])){
    $stm_docentes = $conexion->prepare("SELECT * FROM docentes");
    $stm_docentes->execute();
    $docentes = $stm_docentes->fetchAll(PDO::FETCH_ASSOC);
}
?>

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
        include('/xampp/htdocs/escuela/controllers/materias/editar-materia-controller.php');
    ?>
    <!-- Modal Editar Administrador-->
    <div class="container d-flex align-items-center justify-content-center">
    <form method="POST" class="d-flex align-items-center justify-content-center flex-md-column">
          <div class="mb-2 w-100 position-relative">
            <input type="text" class="rounded-2 text-center" name="materia" value="<?php echo $materia ?>" placeholder="Nombre de la materia" autocomplete="off">
          </div>
          <div class="mb-2 w-100 position-relative">
            <label for="docente" class="text-white">Creditos:</label>
            <select class="rounded-2 w-100 text-center" name="creditos" id="creditos">
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>
          <div class="mb-5 w-100 position-relative">
            <label for="docente" class="text-white">Docente:</label>
            <select class="rounded-2 w-100 text-center" name="docente" id="docente">
              <?php foreach($docentes as $docente){?> 
              <option value="<?php echo $docente['id_docente'] ?>"><?php echo $docente['nombres']. " ". $docente['apellidos']?></option>
              <?Php }?>
            </select>
          </div>
          <div class="d-flex">
              <a href="../semestres.php" class="btn btn-danger">Cancelar</a>
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