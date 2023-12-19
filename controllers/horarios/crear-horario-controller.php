<?php
  include('/xampp/htdocs/escuela/config/conexion_mysql_i.php');

  if(isset($_POST['register'])){
    if(
      strlen($_POST['dia'])>= 1 &&
      strlen($_POST['hora-inicio'])>= 1 &&
      strlen($_POST['hora-final'])>= 1 &&
      strlen($_POST['aula'])>= 1 &&
      strlen($_POST['materia'])>= 1
    ){
      $dia = trim($_POST['dia']);
      $inicio = trim($_POST['hora-inicio']);
      $final = trim($_POST['hora-final']);
      $aula = trim($_POST['aula']);
      $materia = trim($_POST['materia']);

      $query = "INSERT INTO horarios (dia, hora_inicio, hora_final, aula_id, materia_id) VALUES 
      ('$dia', '$inicio', '$final', $aula, $materia);";

      $result = mysqli_query($conection, $query);

      if($result){
        ?>
        <script script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            swal("El registro se completo con exito!!!", "", "success");
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
        swal("Llena todos los campos!!!");
      </script>
      <?php
    }
  }
  ?>