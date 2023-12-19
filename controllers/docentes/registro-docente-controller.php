<?php
  include('/xampp/htdocs/escuela/config/conexion_mysql_i.php');

  if(isset($_POST['register'])){
    if(
      strlen($_POST['usuario'])>= 1 &&
      strlen($_POST['correo'])>= 1 &&
      strlen($_POST['telefono'])>= 1 &&
      strlen($_POST['pass'])>= 1 &&
      strlen($_POST['matricula'])>= 1
    ){
      $usuario = trim($_POST['usuario']);
      $correo = trim($_POST['correo']);
      $telefono= trim($_POST['telefono']);
      $pass = trim($_POST['pass']);
      $pass_hash = password_hash($pass, PASSWORD_DEFAULT,['cost' => 5]);
      $matricula = trim($_POST['matricula']);
      
      $query = "INSERT INTO registro_usuarios (usuario, constraseña, admin_id, docente_id, alumno_id, telefono, correo, rol) VALUES
      ('$usuario', '$pass', NULL, '$matricula', NULL, '$telefono', '$correo', 'docente');";

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
  } else{
  }
  ?>