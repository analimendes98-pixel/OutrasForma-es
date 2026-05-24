<?php
if(!isset($_SESSION)) { session_start(); }

// Botão de login do administrador
if(isset($_POST["btnLoginADM"])) {
    require_once 'Controller/AdministradorController.php';
    $aController = new AdministradorController();
    if($aController->login($_POST['txtLoginADM'], $_POST['txtSenhaADM'])) {
        include_once '../View/ADMPrincipal.php';
    } else {
        echo "Login inválido!";
    }
}

// Botão para abrir tela de login do administrador
if(isset($_POST["btnADM"])) {
    include_once '../View/ADMLogin.php';
}

// Botão para listar usuários cadastrados
if(isset($_POST["btnListarCadastrados"])) {
    include_once '../View/ADMListarCadastrados.php';
}

// Botão de detalhes de usuário
if(isset($_POST["btnDetalhes"])) {
    $_SESSION["idusuario"] = $_POST["idusuario"];
    include_once '../View/ADMDetalhesUsuario.php';
}

// Botão voltar
if(isset($_POST["btnVoltar"])) {
    include_once '../View/ADMPrincipal.php';
}
?>
