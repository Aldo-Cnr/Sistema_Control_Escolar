<?php
    include('/xampp/htdocs/escuela/config/conexion_PDO.php');

    if(isset($_GET['id_materia'])){
        $stm = $conexion->prepare("SELECT al.*, COALESCE(cu.calificacion, 'Calificación sin asignar') AS calificacion 
        FROM alumnos al
        INNER JOIN cursos cu ON cu.alumno_id = al.id_alumno
        WHERE cu.materia_id = :id_materia AND al.id_alumno = :id_alumno;");
        $stm->bindParam(":id_materia", $_GET['id_materia']);
        $stm->bindParam(":id_alumno", $_GET['id_alumno']);
        $stm->execute();
        $registro = $stm->fetch(PDO::FETCH_LAZY);
        $matricula = $registro['id_alumno'];
        $nombres = $registro['nombres'];
        $calificacion = $registro['calificacion'];
    } else{
        echo 'Registro no encontrado!!';
    }


    include('/xampp/htdocs/escuela/config/conexion_mysql_i.php');
    
    if(isset($_POST['update'])){
      if(
        strlen($_POST['calificacion'])>= 1
      ){
        $id_alumno = (isset($_GET['id_alumno'])?$_GET['id_alumno']:'');
        $id_materia = (isset($_GET['id_materia'])?$_GET['id_materia']:'');
        $calificacion = (isset($_POST['calificacion'])?$_POST['calificacion']:'');
        
        $query = "UPDATE cursos SET 
            calificacion = ?
            WHERE alumno_id = ?
            AND materia_id = ?";

        $stm = mysqli_prepare($conection, $query);
        mysqli_stmt_bind_param($stm, 'dii', $calificacion, $id_alumno, $id_materia);
        $result = mysqli_stmt_execute($stm);
        
        if($result){
          ?>
            <script script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <script>
              swal("Calificacion Asignada!!", "", "success");
            </script>
          <?php
        }
        else{
          ?>
          <h3 class="error">Ocurrio un error!!!</h3>
          <?php
        }
      }
      else{
        ?>
        <script script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
          swal("Asigna una calificacion al alumno!!!", "", "warning");
        </script>
        <?php
      }
    }
    
?>