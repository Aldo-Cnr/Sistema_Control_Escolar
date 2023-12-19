
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
</head>
<body>
<?php
    
    if(isset($_GET['id_docente']) && isset($_GET['id_semestre'])){
    
        include('/xampp/htdocs/escuela/config/conexion_PDO.php');

        $stm_docente = $conexion->prepare("SELECT * FROM materias WHERE docente_id = :id_docente AND semestre_id = :id_semestre");
        $stm_docente->bindParam(':id_docente', $_GET['id_docente']);
        $stm_docente->bindParam(':id_semestre', $_GET['id_semestre']);
        $stm_docente->execute();
        if($stm_docente->rowCount()){
            $stm_horarios = $conexion->prepare("SELECT h.*, au.*, ma.*
            FROM  semestres 
            INNER JOIN materias ma
            ON semestres.id_semestre = ma.semestre_id
            INNER JOIN horarios h
            ON h.materia_id = ma.id_materia 
            INNER JOIN aulas au
            ON h.aula_id = au.id_aula
            WHERE ma.docente_id = :id_docente AND semestres.id_semestre = :id_semestre
            ORDER BY FIELD(h.dia, 'lunes', 'martes', 'miércoles', 'jueves', 'viernes'), h.hora_inicio;");
            $stm_horarios->bindParam(':id_docente', $_GET['id_docente']);
            $stm_horarios->bindParam(':id_semestre', $_GET['id_semestre']);
            $stm_horarios->execute();
            $horarios = $stm_horarios->fetchAll(PDO::FETCH_ASSOC);
            ?>
            <div class="table-responsive mt-4 container-fluid fw-light">
                <table class="table table-primary">
                    <thead class="table table-dark">

                        <tr>
                            <th scope="col">Día</th>
                            <th scope="col">Hora de Inicio</th>
                            <th scope="col">Hora Final</th>
                            <th scope="col">Aula</th>
                            <th scope="col">Materia</th>
                        </tr>
                    </thead>
                    <tbody class="table-secondary">
                        <?php foreach($horarios as $horario){?>
                        <tr class="">
                            <td> <?php echo $horario['dia'];?></td>
                            <td> <?php echo $horario['hora_inicio'];?></td>
                            <td> <?php echo $horario['hora_final'];?></td>
                            <td> <?php echo $horario['nombre']. ' - '. $horario['tipo'];?></td>
                            <td> <?php echo $horario['materia'];?></td>
                            
                        <?Php }?>
                        
                    </tbody>
                </table>
            </div>
            <?php
        } else{
            ?>
            <script script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <script>
                swal({
                        title: "No hay materias asignadas de este semestre!!!",
                        text: "",
                        icon: "warning",
                    }).then(function() {
                        // Después de mostrar la alerta, redirigir a la nueva página
                        window.location.href = "../../views/docente/horarios.php?id_semestre=<?php echo $_GET['id_semestre']; ?>&id_docente=<?php echo $_GET['id_docente']; ?>";
                    });
            </script>
            <?php
        }
    } else{
        echo 'Docente no encontrado';
    }

    
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