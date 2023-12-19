<?php
    include('/xampp/htdocs/escuela/config/conexion_PDO.php');

    if(isset($_GET['id_materia'])){
        $txtId = isset($_GET['id_materia'])?$_GET['id_materia']:"";
        $stm = $conexion->prepare('SELECT * FROM materias WHERE id_materia = :txtId');
        $stm->bindParam(":txtId", $txtId);
        $stm->execute();
        $registro = $stm->fetch(PDO::FETCH_LAZY);
        $materia = $registro['materia'];
    } else{
        echo 'Registro no encontrado!!';
    }

    include('/xampp/htdocs/escuela/config/conexion_mysql_i.php');

    if(isset($_POST['update'])){
      if(
        strlen($_POST['materia'])>= 1 &&
        strlen($_POST['creditos'])>= 1 &&
        strlen($_POST['docente'])>= 1 
      ){
        $id_materia = isset($_GET['id_materia'])?$_GET['id_materia']:"";
        $materia = (isset($_POST['materia'])?$_POST['materia']:'');
        $creditos = (isset($_POST['creditos'])?$_POST['creditos']:'');
        $docente = (isset($_POST['docente'])?$_POST['docente']:'');
        
        $query = "UPDATE materias SET 
            materia = ?, 
            docente_id = ?,
            creditos = ?
            WHERE id_materia = ?";

        $stmt = mysqli_prepare($conection, $query);
        mysqli_stmt_bind_param($stmt, 'siii', $materia, $docente, $creditos, $id_materia);
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