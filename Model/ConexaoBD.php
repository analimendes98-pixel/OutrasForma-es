<?php
class ConexaoBD {
    private $host = "127.0.0.1";   
    private $user = "root";       
    private $password = "";        
    private $database = "projeto_final"; 
    public function conectar() {
        $conn = new mysqli($this->host, $this->user, $this->password, $this->database);

        if ($conn->connect_error) {
            die("Erro na conexão: " . $conn->connect_error);
        }

        return $conn;
    }
}
?>
