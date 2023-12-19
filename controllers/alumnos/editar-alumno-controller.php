<?php
    include('/xampp/htdocs/escuela/config/conexion_PDO.php');

    if(isset($_GET['id_alumno'])){
        $txtId = isset($_GET['id_alumno'])?$_GET['id_alumno']:"";
        $stm = $conexion->prepare('SELECT * FROM alumnos WHERE id_alumno = :txtId');
        $stm->bindParam(":txtId", $txtId);
        $stm->execute();
        $registro = $stm->fetch(PDO::FETCH_LAZY);
        $nombres = $registro['nombres'];
        $apellidos = $registro['apellidos'];
        $edad = $registro['edad'];
        $status = $registro['status'];
    } else{
        echo 'Registro no encontrado!!';
    }


    include('/xampp/htdocs/escuela/config/conexion_mysql_i.php');
    
    if(isset($_POST['update'])){
      if(
        strlen($_POST['id_alumno'])>= 1 &&
        strlen($_POST['nombres'])>= 1 &&
        strlen($_POST['apellidos'])>= 1 &&
        strlen($_POST['edad'])>= 1 &&
        strlen($_POST['status'])>= 1
      ){
        $id_alumno = (isset($_POST['id_alumno'])?$_POST['id_alumno']:'');
        $nombres = (isset($_POST['nombres'])?$_POST['nombres']:'');
        $apellidos = (isset($_POST['apellidos'])?$_POST['apellidos']:'');
        $edad = (isset($_POST['edad'])?$_POST['edad']:'');
        $status = (isset($_POST['status'])?$_POST['status']:'');
        
        $query = "UPDATE alumnos SET 
            nombres = ?, 
            apellidos = ?, 
            edad = ?, 
            status = ? 
            WHERE id_alumno = ?";

        $stm = mysqli_prepare($conection, $query);
        mysqli_stmt_bind_param($stm, 'ssisi', $nombres, $apellidos, $edad, $status, $id_alumno);
        $result = mysqli_stmt_execute($stm);
        
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
        <script script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
          swal("Llena todos los campos!!!");
        </script>
        <?php
      }
    }
    
?>