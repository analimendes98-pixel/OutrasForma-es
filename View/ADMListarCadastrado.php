<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="style.css">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <title>Usuários Cadastrados</title>
</head>
<body class="w3-light-grey">

<?php
if(!isset($_SESSION)) { session_start(); }

include_once __DIR__ . '/../Model/Usuario.php';
include_once __DIR__ . '/../Controller/UsuarioController.php';

$usuarioController = new UsuarioController();
$results = $usuarioController->gerarLista();
?>

<header class="w3-container w3-padding-32 w3-center w3-cyan w3-text-white">
 <h1 class="w3-xxlarge">Lista de Usuários Cadastrados no Sistema</h1>
</header>

<div class="w3-padding-64 w3-content">
 <div class="w3-container">
   <table class="w3-table-all w3-centered w3-card-4">
     <thead>
       <tr class="w3-blue">
         <th>Código</th>
         <th>Nome</th>
         <th>Visualizar</th>
       </tr>
     </thead>
     <tbody>
       <?php
       if($results != null) {
         while($row = $results->fetch_object()) {
           echo '<tr>';
           echo '<td>'.$row->idusuario.'</td>';
           echo '<td>'.$row->nome.'</td>';
           echo '<td>
             <form action="/Controller/navegacao.php" method="post">
               <input type="hidden" name="idusuario" value="'.$row->idusuario.'"/>
               <button name="btnDetalhes" class="w3-button w3-blue w3-round-large">
                 <i class="fa fa-print"></i>
               </button>
             </form>
           </td>';
           echo '</tr>';
         }
       }
       ?>
       </tbody>
   </table>
 </div>
</div>

<div class="w3-container w3-center w3-padding-32">
 <form action="/Controller/navegacao.php" method="post">
   <button name="btnVoltar" class="w3-button w3-gray w3-round-large" style="width: 150px;">
     Voltar ao Menu
   </button>
 </form>
</div>

</body>
</html>