<?php
include_once 'userSession.php';

$userSession = new UserSession();

$userSession->closeSession();

header('location:../index.php');

?>
<script script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    swal("Session Cerrada!!!", "", "success");
</script>
<?php

?>