<?php
class DB{
    private $host;
    private $db;
    private $password;
    private $user;
    private $charset;
    public function __construct(){
        $this->host = 'localhost';
        $this->db = 'persefone';
        $this->user = 'root';
        $this->password = '';
        $this->charset = 'utf8mb4';
    }
    public function connect(){
        try {
            $conn = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
            $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_EMULATE_PREPARES => false];
            $pdo = new PDO($conn, $this->user, $this->password, $options);
            return $pdo;
        } catch (PDOException $e) {
            print_r("Error en la conexión: " . $e->getMessage());
        }
    }
}
?>