<?php
    include('/xampp/htdocs/escuela/config/conexion_PDO.php');

    $stm = $conexion->prepare("SELECT h.*, a.*, m.* FROM horarios h
    INNER JOIN aulas a
    ON h.aula_id = a.id_aula
    INNER JOIN materias m
    ON h.materia_id = m.id_materia 
    ORDER BY FIELD(h.dia, 'lunes', 'martes', 'miércoles', 'jueves', 'viernes'), h.hora_inicio;");
    $stm->execute();
    $horarios = $stm->fetchAll(PDO::FETCH_ASSOC);

    $stm_aulas = $conexion->prepare("SELECT * FROM aulas ORDER BY tipo");
    $stm_aulas->execute();
    $aulas = $stm_aulas->fetchAll(PDO::FETCH_ASSOC);

    $stm_materias = $conexion->prepare("SELECT * FROM materias ORDER BY materia");
    $stm_materias->execute();
    $materias = $stm_materias->fetchAll(PDO::FETCH_ASSOC);



    if(isset($_GET['id_horario'])){
        $txtId = isset($_GET['id_horario'])?$_GET['id_horario']:"";
        $stm = $conexion->prepare('DELETE FROM horarios WHERE id_horario = :txtId');
        $stm->bindParam(":txtId", $txtId);
        $stm->execute();
        header('location:horarios.php');
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Aulas</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="../css/styles-admin.css">
    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- Iconos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <style>
        input[type=number]::-webkit-inner-spin-button, 
        input[type=number]::-webkit-outer-spin-button { 
            -webkit-appearance: none; 
            margin: 0; 
        }
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
    <div class="navbar navbar-expand navbar-dark bg-dark text-center mb-4 sticky-top">
        <!-- Button trigger modal -->
        <div class="container m-2"> 
            <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#create">
                Añadir Horario +
            </button>
        </div>
    </div>

    <div class="table-responsive mt-4 container-fluid fw-light">
        <table class="table table-primary">
            <thead class="table table-dark">
                
                <tr>
                    <th scope="col">Identificador</th>
                    <th scope="col">Día</th>
                    <th scope="col">Hora de Inicio</th>
                    <th scope="col">Hora Final</th>
                    <th scope="col">Aula</th>
                    <th scope="col">Materia</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody class="table-secondary">
                <?php foreach($horarios as $horario){?>
                <tr class="">
                    <td scope="row"><?php echo $horario['id_horario']; ?></td>
                    <td> <?php echo $horario['dia'];?></td>
                    <td> <?php echo $horario['hora_inicio'];?></td>
                    <td> <?php echo $horario['hora_final'];?></td>
                    <td> <?php echo $horario['nombre']. ' - '. $horario['tipo'];?></td>
                    <td> <?php echo $horario['materia'];?></td>
                    <td>
                        <a href="./update/editar-horario.php?id_horario=<?php echo $horario['id_horario']; ?>" class="btn btn-outline-success bg-success">Editar</a>
                        <a href="horarios.php?id_horario=<?php echo $horario['id_horario']; ?>" class="delete-reg btn btn-outline-danger bg-danger">Eliminar</a>
                    </tr>
                <?Php }?>
               
            </tbody>
        </table>
    </div>

    <?php 
        include('../../views/admin/create/crear-horario.php');
    ?>
    
    
    <!-- Boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <!-- Confirm JS-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="../js/confirm.js"></script>
</body>
</html>