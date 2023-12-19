<?php
    include('/xampp/htdocs/escuela/config/conexion_PDO.php');

    if(isset($_GET['id_docente'])){
        $txtId = isset($_GET['id_docente'])?$_GET['id_docente']:"";
        $stm = $conexion->prepare('SELECT * FROM docentes WHERE id_docente = :txtId');
        $stm->bindParam(":txtId", $txtId);
        $stm->execute();
        $registro = $stm->fetch(PDO::FETCH_LAZY);
        $nombres = $registro['nombres'];
        $apellidos = $registro['apellidos'];
        $edad = $registro['edad'];
        $profesion = $registro['profesion'];
    } else{
        echo 'Registro no encontrado!!';
    }

    include('/xampp/htdocs/escuela/config/conexion_mysql_i.php');

    if(isset($_POST['update'])){
      if(
        strlen($_POST['id_docente'])>= 1 &&
        strlen($_POST['nombres'])>= 1 &&
        strlen($_POST['apellidos'])>= 1 &&
        strlen($_POST['edad'])>= 1 &&
        strlen($_POST['profesion'])>= 1
      ){
        $id_docente = (isset($_POST['id_docente'])?$_POST['id_docente']:'');
        $nombres = (isset($_POST['nombres'])?$_POST['nombres']:'');
        $apellidos = (isset($_POST['apellidos'])?$_POST['apellidos']:'');
        $edad = (isset($_POST['edad'])?$_POST['edad']:'');
        $status = (isset($_POST['profesion'])?$_POST['profesion']:'');
        
        $query = "UPDATE docentes SET 
            nombres = ?, 
            apellidos = ?, 
            edad = ?, 
            profesion = ? 
            WHERE id_docente = ?";

        $stmt = mysqli_prepare($conection, $query);
        mysqli_stmt_bind_param($stmt, 'ssisi', $nombres, $apellidos, $edad, $profesion, $id_docente);
        $result = mysqli_stmt_execute($stmt);
    
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