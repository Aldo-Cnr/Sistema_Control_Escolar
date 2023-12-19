<?php
    include('/xampp/htdocs/escuela/config/conexion_PDO.php');

    if(isset($_GET['id_aula'])){
        $txtId = isset($_GET['id_aula'])?$_GET['id_aula']:"";
        $stm = $conexion->prepare('SELECT * FROM aulas WHERE id_aula = :txtId');
        $stm->bindParam(":txtId", $txtId);
        $stm->execute();
        $registro = $stm->fetch(PDO::FETCH_LAZY);
        $nombre = $registro['nombre'];
        $tipo = $registro['tipo'];
    } else{
        echo 'Registro no encontrado!!';
    }

    include('/xampp/htdocs/escuela/config/conexion_mysql_i.php');

    if(isset($_POST['update'])){
      if(
        strlen($_POST['nombre'])>= 1 &&
        strlen($_POST['tipo'])>= 1
      ){
        $id_aula = isset($_GET['id_aula'])?$_GET['id_aula']:"";
        $nombre = (isset($_POST['nombre'])?$_POST['nombre']:'');
        $tipo = (isset($_POST['tipo'])?$_POST['tipo']:'');
        
        $query = "UPDATE aulas SET 
            nombre = ?, 
            tipo = ?
            WHERE id_aula = ?";

        $stmt = mysqli_prepare($conection, $query);
        mysqli_stmt_bind_param($stmt, 'ssi', $nombre, $tipo, $id_aula);
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