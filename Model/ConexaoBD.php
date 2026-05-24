<?php
class ConexaoBD {
    private $host = "127.0.0.1";   
    private $user = "root";       
    private $password = "33024071.Ana";
    private $database = "projeto_final"; 

    public function conectar() {
        $conn = new mysqli($this->host, $this->user, $this->password, $this->database);

        if ($conn->connect_error) {
            die("<div style='color:red;'>Erro na conexão com o banco: " . $conn->connect_error . "</div>");
        }

        return $conn;
    }
}
?>
