<?php
    include('/xampp/htdocs/escuela/config/conexion_PDO.php');

    $stm = $conexion->prepare("SELECT * FROM aulas");
    $stm->execute();
    $aulas = $stm->fetchAll(PDO::FETCH_ASSOC);


    if(isset($_GET['id_aula'])){
        $txtId = isset($_GET['id_aula'])?$_GET['id_aula']:"";
        $stm = $conexion->prepare('DELETE FROM aulas WHERE id_aula = :txtId');
        $stm->bindParam(":txtId", $txtId);
        $stm->execute();
        header('location:aulas.php');
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
                Añadir Aula +
            </button>
        </div>
    </div>

    <div class="table-responsive mt-4 container-fluid fw-light">
        <table class="table table-primary">
            <thead class="table table-dark">
                
                <tr>
                    <th scope="col">Identificador</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Tipo de Aula</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody class="table-secondary">
                <?php foreach($aulas as $aula){?>
                <tr class="">
                    <td scope="row"><?php echo $aula['id_aula']; ?></td>
                    <td> <?php echo $aula['nombre'];?></td>
                    <td> <?php echo $aula['tipo'];?></td>
                    <td>
                        <a href="./update/editar-aula.php?id_aula=<?php echo $aula['id_aula']; ?>" class="btn btn-outline-success bg-success">Editar</a>
                        <a href="aulas.php?id_aula=<?php echo $aula['id_aula']; ?>" class="delete-reg btn btn-outline-danger bg-danger">Eliminar</a>
                    </tr>
                <?Php }?>
               
            </tbody>
        </table>
    </div>

    <?php 
        include('../../views/admin/create/crear-aula.php');
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