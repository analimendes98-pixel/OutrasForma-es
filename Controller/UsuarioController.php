<?php
class UsuarioController {

    public function gerarLista() {
        require_once __DIR__ . '/../Model/Usuario.php'; 
        $usuarioModel = new Usuario();
        return $usuarioModel->listaCadastrados(); 
    }

    
    public function visualizar($idusuario) {
        require_once __DIR__ . '/../Model/Usuario.php';
        
        $usuarioModel = new Usuario();
        
        if ($usuarioModel->carregarUsuario($idusuario)) {
            return $usuarioModel; // Devolve o objeto usuário com os dados preenchidos
        }
        
        return null; 
    }
}
?>