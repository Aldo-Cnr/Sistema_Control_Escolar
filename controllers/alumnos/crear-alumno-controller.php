<?php
  include('/xampp/htdocs/escuela/config/conexion_mysql_i.php');

  if(isset($_POST['register'])){
    if(
      strlen($_POST['id_alumno'])>= 1 &&
      strlen($_POST['nombres'])>= 1 &&
      strlen($_POST['apellidos'])>= 1 &&
      strlen($_POST['edad'])>= 1 &&
      strlen($_POST['status'])>= 1
    ){
      $id_alumno = trim($_POST['id_alumno']);
      $nombres = trim($_POST['nombres']);
      $apellidos = trim($_POST['apellidos']);
      $edad = trim($_POST['edad']);
      $status = trim($_POST['status']);

      $query = "INSERT INTO alumnos (id_alumno, nombres, apellidos, edad, status) VALUES 
      ('$id_alumno', '$nombres', '$apellidos', '$edad', '$status')";

      $result = mysqli_query($conection, $query);

      if($result){
          ?>
          <script script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
          <script>
              swal("Datos actualizados con éxito!!!", "", "success");
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
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <script>
        swal("Llena todos los campos!!!");
      </script>
      <?php
    }

  }
  ?>