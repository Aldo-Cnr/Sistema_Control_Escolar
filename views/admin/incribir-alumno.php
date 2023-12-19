<?php
include('/xampp/htdocs/escuela/config/conexion_PDO.php');

$txtId = isset($_GET['id_semestre'])?$_GET['id_semestre']:"";
$stm_semestre = $conexion->prepare("SELECT * FROM semestres WHERE id_semestre = $txtId");
$stm_semestre->execute();
$registro = $stm_semestre->fetch(PDO::FETCH_LAZY);
$semestre = $registro['id_semestre'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Aula</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/admin/styles-editar-alumno.css">
    <style>
        input[type=number]::-webkit-inner-spin-button, 
        input[type=number]::-webkit-outer-spin-button { 
            -webkit-appearance: none; 
            margin: 0; 
        }
        .container{
            width:400px;
            height: 350px;
            background: linear-gradient(120deg, #181818 50%, #8c8b8a 50%);
            border-radius: 25px;
            border-radius: 25px;
            box-shadow: 5px 5px 20px 0px rgb(175, 172, 172);
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center">
    <?php
        include('/xampp/htdocs/escuela/controllers/alumnos/inscribir-alumno-controller.php');
    ?>
    <!-- Modal Editar Administrador-->
    <div class="container d-flex flex-colum align-items-center justify-content-center">
    <form method="POST" class="d-flex align-items-center justify-content-center flex-md-column">
        <h3 class="text-center mb-35 text-white">Inscribir alumno, Semestre <?php echo $semestre ?></h3>
        <div class="mb-5 w-100 position-relative d-flex flex-column">
          <label class="text-white fs-5 mb-2 mt-4" for="matricula">Matricula del Alumno:</label>
          <input type="number" class="rounded-2 text-center" name="matricula" id="matricula" autocomplete="off">
        </div>
        
        <div class="d-flex">
            <a href="semestres.php" class="btn btn-danger">Cancelar</a>
            <input type="submit" class="btn btn-primary" name="register" value="Inscribir Alumno"/>
        </div>
        </form>
    </div>

    <!-- Boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>