<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas condicionais PHP</title>
    <style>

        body{font-family: sans-serif; }

        .center{text-align: center;}

        .ok {color: red;}

        .repor{color: purple;}
    </style>
</head>
<body>

<h1 class="center">(VERSÃO 2) Estrutura de controle condicional</h1>
<hr>

<h2>Simples</h2>

<?php

$numero= 5;

if ( $numero > 1 ) {
?>
    <p> <?= $numero?>  é maior que 1 </p>

<?php
     }
?>

<hr>


<h2>Composta</h2>


<?php

$produto = "Ultrabook Asus";
$qtdEmEstoque = 0;  // O que temos no momento
$qtdCritica = 14;   // mínimo necessário

?>

  <h3> <?=$produto?> </h3>

<?php  
if ($qtdEmEstoque < $qtdCritica ) {
?>    
    <p class="repor"> É necessário comprar! </p>

<?php    
     if ($qtdEmEstoque === 0) {
?>         
      <p><mark><b>URGENTE</b></mark></p>
<?php        
     }


} else {
?>    
   <p class= "ok"> Estoque OK! </p>

<?php   
     }
?>

<hr>

<h2>Encadeada</h2>


<?php

$opcao = 2;
$opcaoEscolhida;

if ( $opcao === 1 ) {
    
    $opcaoEscolhida = "Pastel";
 }    
                                                
    elseif ( $opcao === 2 ) { 
     $opcaoEscolhida = "Pizza";
 }
    elseif ( $opcao === 3 ) {
        $opcaoEscolhida = "Esfiha";
}
    else {
        $opcaoEscolhida = "Opção Inválida";
}
?>
    <p ><?=$opcaoEscolhida?> </p>


<hr>


<h2>Switch / case</h2>

<?php

switch ( $opcao  ) {
    case 1:  $pedido = "Pastel";
     break;
     

     case 2: $pedido = "Pizza";
     break;

     case 3; $pedido = "esfiha";
     break;

     default: $pedido = "Opção inválida"; 
     break;
}
?>
<p> <?=$pedido?> </p>

<hr>
    
</body>
</html>