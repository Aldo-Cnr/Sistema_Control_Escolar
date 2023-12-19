<?php
include '../escuela/config/user.php';
include '../escuela/config/userSession.php';

include '../escuela/config/conexion_PDO.php';


$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['rol'])){
  switch ($user->validRol($userSession->getCurrentUser())){
    case 'admin':
      $user->setUserAdmin($userSession->getCurrentUser());
      include_once './views/admin/admin-panel.php';      
    break;
    case 'docente':
      $user->setUserDocente($userSession->getCurrentUser());
      include_once './views/docente/docente-panel.php';
    break;
    case 'alumno':
      $user->setUserAlumno($userSession->getCurrentUser());
      include_once './views/alumno/alumno-panel.php';
    break;
  }
} else if(isset($_POST['user']) && isset($_POST['password'])){
  // echo "Validacion de login!!!";
  $userForm = $_POST['user'];
  $passForm = $_POST['password'];

  if($user->userExists($userForm, $passForm)){
    $userSession->setCurrentUser($userForm);
    switch ($user->validRol($userForm)){
      case 'admin':
        $user->setUserAdmin($userForm);
        include_once './views/admin/admin-panel.php';      
      break;
      case 'docente':
        $user->setUserDocente($userForm);
        include_once './views/docente/docente-panel.php';
      break;
      case 'alumno':
        $user->setUserAlumno($userSession->getCurrentUser());
        include_once "./views/alumno/alumno-panel.php";
      break;
    }
  } else{
    include_once './views/login.php';
    ?>
    <script script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        swal("Usuario o contraseña incorrectos!!!", "", "warning");
    </script>
    <?php
  }
} else{
  // echo "login";
  include_once '../escuela/views/login.php';
}

?>