<?php
class Usuario {
    private $idusuario;
    private $nome;

    public function setIDUsuario($idusuario) { $this->idusuario = $idusuario; }
    public function getIDUsuario() { return $this->idusuario; }

    public function setNome($nome) { $this->nome = $nome; }
    public function getNome() { return $this->nome; }

    public function listaCadastrados() {
        require_once 'ConexaoBD.php';
        $con = new ConexaoBD();
        $conn = $con->conectar();

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        
        $sql = "SELECT idusuario, nome FROM usuario;";
        $re = $conn->query($sql);
        $conn->close();
        
        return $re;
    }
}
?>