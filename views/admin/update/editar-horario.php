<?php
    include('/xampp/htdocs/escuela/config/conexion_PDO.php');
    
    $stm_aulas = $conexion->prepare("SELECT * FROM aulas ORDER BY tipo");
    $stm_aulas->execute();
    $aulas = $stm_aulas->fetchAll(PDO::FETCH_ASSOC);

    $stm_materias = $conexion->prepare("SELECT * FROM materias ORDER BY materia");
    $stm_materias->execute();
    $materias = $stm_materias->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Horario</title>
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
            height: 500px;
            background: linear-gradient(120deg, #181818 50%, #8c8b8a 50%);
            border-radius: 25px;
            border-radius: 25px;
            box-shadow: 5px 5px 20px 0px rgb(175, 172, 172);
        }
    </style>
</head>
<body>
    <?php
        include('/xampp/htdocs/escuela/controllers/horarios/editar-horario-controller.php');
    ?>
    <!-- Modal Editar Administrador-->
    <div class="container d-flex align-items-center justify-content-center">
        <form method="POST" class="d-flex align-items-center justify-content-center flex-md-column">
            <h2 class="mb-2 mt-2">Editar Horario</h2>
          <div class="mb-2 w-100 position-relative d-flex flex-column">
            <label for="dia" class="text-white">Día:</label>
            <input type="text" name="dia" id="dia" value="<?php echo $dia; ?>" readonly >
          </div>
          <div class="mb-2 w-100 position-relative d-flex flex-column">
            <label for="inicio" class="text-white">Hora de Inicio:</label>
            <input type="text" name="inicio" id="inicio" value="<?php echo $inicio; ?>" readonly >
          </div>
          <div class="mb-2 w-100 position-relative d-flex flex-column">
            <label for="final" class="text-white">Hora Final:</label>
            <input type="text" name="final" id="final" value="<?php echo $final; ?>" readonly >
          </div>
          <div class="mb-2 w-100 position-relative">
            <label for="aula" class="text-white">Aula:</label>
            <select class="rounded-2 w-100 text-center" name="aula" id="aula">
              <?php foreach($aulas as $aula){?> 
              <option value="<?php echo $aula['id_aula'] ?>"><?php echo $aula['nombre']. ' - '. $aula['tipo'];?></option>
              <?Php }?>
            </select>
          </div>
          <div class="mb-2 w-100 position-relative">
            <label for="materia" class="text-white">Materia:</label>
            <select class="rounded-2 w-100 text-center" name="materia" id="materia">
              <?php foreach($materias as $materia){?> 
              <option value="<?php echo $materia['id_materia'] ?>"><?php echo $materia['materia'];?></option>
              <?Php }?>
            </select>
          </div>
            <div>
                <a href="../horarios.php" class="btn btn-danger">Cancelar</a>
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