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

<h1 class="center">Estrutura de controle condicional</h1>
<hr>

<h2>Simples</h2>

<?php

$numero= 5;

if ( $numero > 1 ) {
    echo"<p> O $numero  é maior que 1 </p>";

}


//Sintaxe alternativa (omitindo chaves)
if ( $numero > 1 ) 
    echo"<p> O $numero  é maior que 1 </p>";

?>
<hr>


<h2>Composta</h2>


<?php

$produto = "Ultrabook Asus";
$qtdEmEstoque = 0;  // O que temos no momento
$qtdCritica = 14;   // mínimo necessário

echo "<h3>$produto</h3>";
if ($qtdEmEstoque < $qtdCritica ) {
    echo "<p class= \"repor\"> É necessário comprar! </p>";

    //condicional aninhada
    // == Igualdade (valor,tipo), === Identica
     if ($qtdEmEstoque === 0) {
      echo "<p><mark><b>URGENTE</b></mark></p>";  //Tag mark é um marca texto
     }

} else {
   echo  "<p class= \"ok\"> Estoque OK! </p>";
}

?>
<hr>

<h2>Encadeada</h2>


<?php

/*Cardápio Digital
1 -> Pastel
2 -> Pizza
3 -> Esfiha
x -> Opção inválida */


$opcao = 2;
$opcaoEscolhida;

if ( $opcao === 1 ) {
    $opcaoEscolhida = "Pastel";
 }    
                                                 //If -> Se | Else -> senao | Elseif ->senaose 
    elseif ( $opcao === 2 ) { 
     $opcaoEscolhida = "Pizza";
 }
    elseif ( $opcao === 3 ) {
        $opcaoEscolhida = "Esfiha";
}
    else {
        $opcaoEscolhida = "Opção Inválida";
}

    echo "<p>$opcaoEscolhida</p>";

?>
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

echo "<p>$pedido</p>";
?>
<hr>
    
</body>
</html>