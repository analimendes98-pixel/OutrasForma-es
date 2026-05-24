<?php
class UsuarioController {

    public function gerarLista() {
        require_once __DIR__ . '/../Model/Usuario.php'; 
        
        $usuarioModel = new Usuario();
        return $usuarioModel->listaCadastrados(); 
    }
}
?>