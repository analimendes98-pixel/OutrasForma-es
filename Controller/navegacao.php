<?php
if(!isset($_SESSION)) { session_start(); }

// 1. Rota de Login do Administrador
if(isset($_POST["btnLoginADM"])) {
    require_once 'Controller/AdministradorController.php';
    $aController = new AdministradorController();
    if($aController->login($_POST['txtLoginADM'], $_POST['txtSenhaADM'])) {
        include_once '../View/ADMPrincipal.php';
    } else {
        echo "Login inválido!";
    }
}

// 2. Rota para ir à tela de Login do Administrador
if(isset($_POST["btnADM"])) {
    include_once '../View/ADMLogin.php';
}

// 3. Rota para listar os usuários cadastrados na tabela 
if(isset($_POST["btnListarCadastrados"])) {
    include_once '../View/ADMListarCadastrados.php';
}

// =========================================================================
// CORRIGIDO: Abre a nova View ADMVisualizarCadastro sem o erro de sintaxe
// =========================================================================
if(isset($_POST["btnDetalhes"])) {
    $_SESSION["idusuario"] = $_POST["idusuario"];
    include_once '../View/ADMVisualizarCadastro.php'; 
}

// =========================================================================
// NOVO: Ação para voltar da página ADMVisualizarCadastro para a Listagem 
// =========================================================================
if(isset($_POST["btnVoltarDaVisualizacao"])) {
    include_once '../View/ADMListarCadastrados.php'; 
}

// 4. Rota para voltar dos menus gerais para o Painel Principal do ADM
if(isset($_POST["btnVoltar"])) {
    include_once '../View/ADMPrincipal.php';
}
?>