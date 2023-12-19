<?php
include('/xampp/htdocs/escuela/config/conexion_PDO.php');   

if(isset($_GET['id_materia'])){
    $stm_alumnos = $conexion->prepare("SELECT al.*, COALESCE(cu.calificacion, 'Calificación sin asignar') AS calificacion 
    FROM alumnos al
    INNER JOIN cursos cu ON cu.alumno_id = al.id_alumno
    WHERE cu.materia_id = :id_materia;");
    $stm_alumnos->bindParam(':id_materia', $_GET['id_materia']);
    $stm_alumnos->execute();
    $alumnos = $stm_alumnos->fetchAll(PDO::FETCH_ASSOC);
}
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Horarios</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="../../views/css/styles-admin.css">
    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- Iconos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <style>
        .btn{
            padding: 10px 25px;
            border: 1px solid whitesmoke;
            background-color: rgb(37, 37, 39);
            color: whitesmoke;
            font-size: 15px;
            cursor: pointer;
            transform: scale(.97);
            transition: .5s;
        }
        .btn:hover{
            background: rgb(60, 60, 60);
            transform: scale(1);
        }
    </style>
</head>
<body>

    <div class="table-responsive mt-4 container-fluid fw-light w-75">
        <table class="table table-primary">
            <thead class="table table-dark">
                <tr>
                    <th scope="col">Matricula</th>
                    <th scope="col">Alumno</th>
                    <th scope="col">Calificacion</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody class="table-secondary">
                <?php foreach($alumnos as $alumno){?>
                <tr class="">
                    <td> <?php echo $alumno['id_alumno']?></td>
                    <td> <?php echo $alumno['nombres']. ' '. $alumno['apellidos'];?></td>
                    <td> <?php echo $alumno['calificacion']?></td>
                    <td>
                        <a href="./asignar-calificacion.php?id_alumno=<?php echo $alumno['id_alumno']; ?>&id_materia=<?php echo $_GET['id_materia']; ?>" class="edit-reg btn btn-outline-success">Asignar calificacion</a>
                    </td>
                <?Php }?>
            </tbody>
        </table>
    </div>
            




<!-- Boostrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <!-- Confirm JS-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="../js/confirm.js"></script>
</body>
</html>