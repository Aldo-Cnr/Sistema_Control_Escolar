<?php
  include('/xampp/htdocs/escuela/config/conexion_mysql_i.php');

  if(isset($_POST['register'])){
    if(
      strlen($_POST['id_docente'])>= 1 &&
      strlen($_POST['nombres'])>= 1 &&
      strlen($_POST['apellidos'])>= 1 &&
      strlen($_POST['edad'])>= 1 &&
      strlen($_POST['profesion'])>= 1
    ){
      $id_docente = trim($_POST['id_docente']);
      $nombres = trim($_POST['nombres']);
      $apellidos = trim($_POST['apellidos']);
      $edad = trim($_POST['edad']);
      $profesion = trim($_POST['profesion']);

      $query = "INSERT INTO docentes (id_docente, nombres, apellidos, edad, profesion) VALUES 
      ('$id_docente', '$nombres', '$apellidos', '$edad', '$profesion')";

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
