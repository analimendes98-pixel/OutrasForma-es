<?php
class Usuario {
    private $idusuario;
    private $nome;
    private $cpf;
    private $email;
    private $data_nascimento;

    // Getters e Setters
    public function setIDUsuario($idusuario) { $this->idusuario = $idusuario; }
    public function getIDUsuario() { return $this->idusuario; }

    public function setNome($nome) { $this->nome = $nome; }
    public function getNome() { return $this->nome; }

    public function setCPF($cpf) { $this->cpf = $cpf; }
    public function getCPF() { return $this->cpf; }

    public function setEmail($email) { $this->email = $email; }
    public function getEmail() { return $this->email; }

    public function setDataNascimento($data_nascimento) { $this->data_nascimento = $data_nascimento; }
    public function getDataNascimento() { return $this->data_nascimento; }

    // Lista todos os cadastrados
    public function listaCadastrados() {
        require_once 'ConexaoBD.php';
        $con = new ConexaoBD();
        $conn = $con->conectar();

        $sql = "SELECT idusuario, nome FROM usuario;";
        $re = $conn->query($sql);
        $conn->close();
        
        return $re;
    }

    // Carrega um usuário específico
    public function carregarUsuario($id) {
        require_once 'ConexaoBD.php';
        $con = new ConexaoBD();
        $conn = $con->conectar();

        $sql = "SELECT * FROM usuario WHERE idusuario = " . intval($id);
        $re = $conn->query($sql);
        $r = $re->fetch_object();

        if ($r != null) {
            $this->idusuario = $r->idusuario;
            $this->nome = $r->nome;
            $this->cpf = $r->cpf;
            $this->email = $r->email;
            $this->data_nascimento = $r->data_nascimento;
            
            $conn->close();
            return true;
        } else {
            $conn->close();
            return false;
        }
    }
}
?>
