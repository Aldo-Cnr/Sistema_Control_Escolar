<?php
  include('/xampp/htdocs/escuela/config/conexion_mysql_i.php');

  if(isset($_POST['register'])){
    if(
      strlen($_POST['id_admin'])>= 1 &&
      strlen($_POST['nombres'])>= 1 &&
      strlen($_POST['apellidos'])>= 1 &&
      strlen($_POST['edad'])>= 1
    ){
      $id_admin = trim($_POST['id_admin']);
      $nombres = trim($_POST['nombres']);
      $apellidos = trim($_POST['apellidos']);
      $edad = trim($_POST['edad']);

      $query = "INSERT INTO admin (id_admin, nombres, apellidos, edad) VALUES 
      ('$id_admin', '$nombres', '$apellidos', '$edad')";

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