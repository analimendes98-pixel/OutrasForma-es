<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="style.css">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <title>ADM Visualizar Cadastro</title>
</head>
<body class="w3-white">

<?php
if(!isset($_SESSION)) { session_start(); }

if(!isset($_SESSION["idusuario"])) {
    $_SESSION["idusuario"] = 1; // exemplo: id do usuário
}


include_once __DIR__ . '/../Controller/UsuarioController.php';


$usuarioController = new UsuarioController();
$usuario = $usuarioController->visualizar($_SESSION["idusuario"]);

?>

<?php if($usuario != null): ?>

 <header class="w3-container w3-margin-top">
   <div class="w3-panel w3-cyan w3-text-white w3-center w3-padding-small w3-round">
     <h2 class="w3-large" style="margin:5px 0;"><?php echo $usuario->getNome(); ?> Curriculo</h2>
   </div>
 </header>

 <div class="w3-content w3-padding" style="max-width: 600px;">
   
   <div class="w3-panel w3-cyan w3-text-white w3-padding-small w3-round" style="margin: 8px 0;">
     <span class="w3-margin-left">NOME: <?php echo $usuario->getNome(); ?></span>
   </div>

   <div class="w3-panel w3-cyan w3-text-white w3-padding-small w3-round" style="margin: 8px 0;">
  <span class="w3-margin-left">CPF: <?php echo $usuario->getCPF(); ?></span>
</div>

<div class="w3-panel w3-cyan w3-text-white w3-padding-small w3-round" style="margin: 8px 0;">
  <span class="w3-margin-left">EMAIL: <?php echo $usuario->getEmail(); ?></span>
</div>

<div class="w3-panel w3-cyan w3-text-white w3-padding-small w3-round" style="margin: 8px 0;">
  <span class="w3-margin-left">DATA DE NASCIMENTO: <?php echo $usuario->getDataNascimento(); ?></span>
</div>



   <h3 class="w3-center w3-text-cyan w3-margin-top" style="font-size: 1.4em;">Formação Acadêmica</h3>
   <table class="w3-table w3-bordered w3-centered w3-small" style="margin-bottom: 20px;">
     <thead>
       <tr class="w3-blue w3-text-white">
         <th style="width:20%">Início</th>
         <th style="width:20%">Fim</th>
         <th>Descrição</th>
       </tr>
     </thead>
     <tbody>
       <tr class="w3-light-grey">
         <td>1970-01-01</td>
         <td>1970-01-01</td>
         <td></td>
       </tr>
       <tr>
         <td>1970-01-01</td>
         <td>1970-01-01</td>
         <td></td>
       </tr>
     </tbody>
   </table>

   <h3 class="w3-center w3-text-cyan w3-margin-top" style="font-size: 1.4em;">Experiência Profissional</h3>
   <table class="w3-table w3-bordered w3-centered w3-small">
     <thead>
       <tr class="w3-blue w3-text-white">
         <th style="width:15%">Início</th>
         <th style="width:15%">Fim</th>
         <th style="width:25%">Empresa</th>
         <th>Descrição</th>
       </tr>
     </thead>
     <tbody>
       <tr class="w3-light-grey">
         <td></td>
         <td></td>
         <td></td>
         <td></td>
       </tr>
     </tbody>
   </table>

<?php else: ?>
 <div class="w3-container w3-content w3-center w3-padding-64">
   <p class="w3-text-red">Não foi possível carregar as informações do currículo deste usuário.</p>
 </div>
<?php endif; ?>

   <div class="w3-row w3-section w3-center w3-margin-top">
     <form action="/Controller/navegacao.php" method="post">
       <button name="btnVoltarDaVisualizacao" class="w3-button w3-blue w3-round w3-margin-top" style="width: 120px;">
         Voltar
       </button>
     </form>
   </div>

 </div>

</body>
</html>