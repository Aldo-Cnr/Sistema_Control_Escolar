<?php
  include('/xampp/htdocs/escuela/config/conexion_mysql_i.php');

  if(isset($_POST['register'])){
    if(
      strlen($_POST['materia'])>= 1 &&
      strlen($_POST['creditos'])>= 1 &&
      strlen($_POST['docente'])>= 1 
    ){

      include('/xampp/htdocs/escuela/config/conexion_PDO.php');
      $txtId = isset($_GET['id_semestre'])?$_GET['id_semestre']:"";
      $stm_semestre = $conexion->prepare("SELECT * FROM semestres WHERE id_semestre = $txtId");
      $stm_semestre->execute();
      $registro = $stm_semestre->fetch(PDO::FETCH_LAZY);
      $semestre = $registro['id_semestre'];
      
      $nombre = trim($_POST['materia']);
      $creditos = trim($_POST['creditos']);
      $docente = trim($_POST['docente']);

      $query = "INSERT INTO materias (materia, docente_id, semestre_id, creditos) VALUES 
      ('$nombre', $docente, $semestre, $creditos);";

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