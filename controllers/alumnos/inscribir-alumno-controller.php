<?php
  include('/xampp/htdocs/escuela/config/conexion_mysql_i.php');

  if(isset($_POST['register'])){
    if(
      strlen($_POST['matricula'])>= 1  
    ){
      $id_semestre = (isset($_GET['id_semestre'])?$_GET['id_semestre']:"");
      $matricula = (isset($_POST['matricula'])?$_POST['matricula']:'');

      include('/xampp/htdocs/escuela/config/conexion_PDO.php');
      
      $stm = $conexion->prepare('SELECT * FROM alumnos WHERE id_alumno = :matricula');
      $stm->bindParam(":matricula", $matricula);
      $stm->execute();
      $registro = $stm->fetch(PDO::FETCH_LAZY);
      $status = $registro['status'];
      
      echo $status;
      
      if($status == 'pagado'){
        $query = "INSERT INTO inscripciones(alumno_id, semestre_id) VALUES 
        ('$matricula', '$id_semestre');";

        $result = mysqli_query($conection, $query);

        if($result){
          $stm_materias = $conexion->prepare('SELECT id_materia FROM materias WHERE semestre_id = :id_semestre');
          $stm_materias->bindParam(':id_semestre', $id_semestre);
          $stm_materias->execute();
          $materias = $stm_materias->fetchAll(PDO::FETCH_ASSOC);

          $stm_cursos = $conexion->prepare("INSERT INTO cursos (alumno_id, materia_id, calificacion) VALUES (:id_alumno, :id_materia, NULL)");
          $stm_cursos->bindParam('id_alumno', $matricula);
          foreach ($materias as $materia){
            $id_materia = $materia['id_materia'];
            $stm_cursos->bindParam(':id_materia', $id_materia);
            $stm_cursos->execute();
          }

          ?>
          <script script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
          <script>
              swal("El alumno fue inscrito al semestre con exito!!!", "", "success");
          </script>
          <?php
        }
        else{
          ?>
          <h3 class="error">Ocurrio un error!!!</h3>
        <?php
        }
      } else if ($status == 'adeudo'){
        ?>
        <script script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
          swal("El alumno tiene un adeudo de pagos, No puede ser inscrito!!!", "", "warning");
        </script>
        <?php
      }
      
    }
    else{
      ?>
      <script script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <script>
        swal("Llena todos los campos!!!");
      </script>
      <?php
    }
  }
  ?>