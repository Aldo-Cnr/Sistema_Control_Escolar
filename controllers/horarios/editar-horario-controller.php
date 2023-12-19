<?php
    include('/xampp/htdocs/escuela/config/conexion_PDO.php');

    if(isset($_GET['id_horario'])){
        $txtId = isset($_GET['id_horario'])?$_GET['id_horario']:"";
        $stm = $conexion->prepare('SELECT * FROM horarios WHERE id_horario = :txtId');
        $stm->bindParam(":txtId", $txtId);
        $stm->execute();
        $registro = $stm->fetch(PDO::FETCH_LAZY);
        $dia = $registro['dia'];
        $inicio = $registro['hora_inicio'];
        $final = $registro['hora_final'];
    } else{
        echo 'Registro no encontrado!!';
    }

    include('/xampp/htdocs/escuela/config/conexion_mysql_i.php');

    if(isset($_POST['update'])){
      if(
        strlen($_POST['aula'])>= 1 &&
        strlen($_POST['materia'])>= 1 
      ){
        $id_horario = isset($_GET['id_horario'])?$_GET['id_horario']:"";
        $aula = (isset($_POST['aula'])?$_POST['aula']:'');
        $materia = (isset($_POST['materia'])?$_POST['materia']:'');
        
        $query = "UPDATE horarios SET 
            aula_id = ?,
            materia_id = ?
            WHERE id_horario = ?";

        $stmt = mysqli_prepare($conection, $query);
        mysqli_stmt_bind_param($stmt, 'iii', $aula, $materia, $id_horario);
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