<?php
include_once 'db.php';

class User extends DB{
    private $matricula;
    private $nombre;
    private $usuario;

    public function userExists($user, $pass){

        // $pass_hash = password_hash($pass, PASSWORD_DEFAULT,['cost' => 5]);
        
        $query = $this->connect()->prepare('SELECT * FROM registro_usuarios WHERE usuario = :user AND constraseña = :pass');
        $query->execute(['user' => $user, 'pass' => $pass]);

        if($query->rowCount()){
            return true;
        } else{
            return false;
        }
    }

    public function validRol($user){
        $query = $this->connect()->prepare("SELECT rol FROM registro_usuarios WHERE usuario = :user;");
        $query->execute(['user' => $user]);

        // Obtener el resultado como un array asociativo
        $result = $query->fetch(PDO::FETCH_ASSOC);

        // Verificar si se encontró un usuario con el usuario y contraseña proporcionados
        if ($result) {
            // Retorna el rol encontrado
            return $result['rol'];
        } else {
            // Retorna null si no se encontró un usuario con las credenciales proporcionadas
            return null;
        }
    }


    public function setUserAdmin($user){
        $query = $this->connect()->prepare('SELECT us.*, ad.* FROM registro_usuarios us
        INNER JOIN admin ad ON 
        us.admin_id = ad.id_admin WHERE us.usuario = :user');
        $query->execute(['user' => $user]);
        
        foreach($query as $currentUser){
            $this->nombre = $currentUser['nombres'];
            $this->usuario = $currentUser['usuario'];
        }
    }

    public function setUserDocente($user){
        $query = $this->connect()->prepare('SELECT us.*, doc.* FROM registro_usuarios us
        INNER JOIN docentes doc ON 
        us.docente_id = doc.id_docente WHERE us.usuario = :user');
        $query->execute(['user' => $user]);
        
        foreach($query as $currentUser){
            $this->nombre = $currentUser['nombres'];
            $this->usuario = $currentUser['usuario'];
            $this->matricula = $currentUser['docente_id'];
        }
    }

    public function setUserAlumno($user){
        $query = $this->connect()->prepare('SELECT us.*, al.* FROM registro_usuarios us
        INNER JOIN alumnos al ON 
        us.alumno_id = al.id_alumno WHERE us.usuario = :user');
        $query->execute(['user' => $user]);
        
        foreach($query as $currentUser){
            $this->nombre = $currentUser['nombres'];
            $this->usuario = $currentUser['usuario'];
            $this->matricula = $currentUser['alumno_id'];

        }
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function getMatricula(){
        return $this->matricula;
    }
}

?>