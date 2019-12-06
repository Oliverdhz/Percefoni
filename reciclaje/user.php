<?php
require_once "conexion_login.php";
class User extends DB{
    private $emailregistrado;
    private $nombreregistrado;
    private $apellidoregistrado;
    public function userExists($email, $contrasena){
        /*if(!empty($_POST['email'])
        && !empty($_POST['contrasena'])){
            $email = "";
            $email = $_POST['email'];*/
            $contrasena = md5($contrasena);
            $verificacion = $this->connect()->prepare('SELECT email, contrasena FROM usuarios WHERE email = :email AND contrasena = :contrasena');
            $verificacion->execute(['email' => $email, 'contrasena' => $contrasena]);
            /*$real = $verificacion->fetch_assoc()['email'];
            $verificacion = $conexion->query("SELECT email, contrasena FROM usuarios WHERE email = '$email'");
            $real2 = $verificacion->fetch_assoc()['contrasena'];*/
            if($verificacion->rowCount()){
                /*$contrasena = "";
                $contrasena = $_POST['contrasena'];
                $contrasena = md5($contrasena);
                if($contrasena == $real2){
                    echo "<p>Ya estás logueado</p>";
                }else{
                    echo "<p>La contraseña es incorrecta</p>";
                }*/
                return true;
            }else{
                return false;
            }
        //}
    }
    public function setUser($email){
        $query = $this->connect()->prepare("SELECT * FROM usuarios WHERE email = :email");
        $query->execute(['email' => $email]);
        foreach($query as $currentUser){
            $this->emailregistrado = $currentUser['email'];
            $this->nombreregistrado = $currentUser['nombre'];
            $this->apellidoregistrado = $currentUser['apellido'];
        }
    }
    public function getEmail(){
        return $this->emailregistrado;
    }
    public function getNombre(){
        return $this->nombreregistrado;
    }
    public function getApellido(){
        return $this->apellidoregistrado;
    }
}
?>