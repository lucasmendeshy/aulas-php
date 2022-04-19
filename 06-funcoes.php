<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções no PHP</title>
</head>
<body>

<h1>Criando e usando Funções</h1>
<hr>

<h2>Funções como sub-rotina ou procedimento</h2>
    

<?php

    function dadosAutor() {
        echo "<div>";
        echo "<p>Lucas Mendes</p>";
        echo "<p>lucasaraujo12345@outlook.com.br</p>";
        echo "</div>";
    }
?>

<section>
    <h3>Chamada da sub-rotina</h3>
    <?=dadosAutor()?>

    <article>
        <h4>Outra chamada</h4>
        <?=dadosAutor()?>
    </article>

</section>
<hr>


<h2>Função com retorno de dados</h2>

<?php

function dadosCurso() {
    return "Téc. em informática para internet"; // return para retornar
}
?>

<p>Estamos no curso de <?=dadosCurso()?> </p>
<p> <?=dadosCurso()?> é ministrado no Senac Penha.</p>
<hr>

<h2>Função com parâmetros  (ou argumentos)</h2>

<?php
//O Terceiro parâmetro quando não informado assumirá o valor padrão (no caso,zero)
//Variável GLOBAL <- FORA
function soma($valor1, $valor2, $valor3 = 0) {
    //Variável LOCAL <- DENTRO
    $total = $valor1 + $valor2 + $valor3;
    return $total; 
}
?>

<p> <?=soma ( 10,20,30 )?> </p>
<p> <?=soma ( 100,200,300 )?> </p>
<p> <?=soma ( 1,2, )?> </p>
 

<!-- Variável abaixo é de escopo global -->
<?php $total = soma ( 1500,2000,125 ); ?>
<p> <?=$total?> </p>
<hr>


<?php

if (soma (500,200,700) > 1000 ) {
   echo "Resultado da função é maior/igual a 1000";
}


function verificaNegativo($valor) {

   /* if ($valor < 0 ) {
      return "Negativo"; 
    } else {
      return "Não é negativo";
    }
}*/

   //Versão 2: if/else usando operador ternário
   return $valor < 0 ? "negativo" : "não é negativo";
 }
?>


<p> <?=verificaNegativo(10)?> </p>
<p> <?=verificaNegativo(-150)?> </p>
<p> <?=verificaNegativo(258.99)?> </p>

<hr>

<h2>Função anônima (closure,lambda)</h2>


<?php
$formataPreco = function ($valor) {
  return "R$".number_format($valor, 2, ",", ".");
}; 

?>

<p> <?=$formataPreco(1000)?> </p>
<p> <?=$formataPreco(1500)?> </p>
<p> <?=$formataPreco(1500.75)?> </p>
<hr>

<h2>Indução de tipos</h2>



<?php

/* Tipos de dados no PHP
FLOAT: valores númericos podendo ter casa decimal

INT: valor númerico inteiros

STRING: caracteres */

function calculaMedia(float $n1,  float $n2): float {
    
    $media = ( $n1 + $n2 ) / 2; 
    return $media;

 }

?>

<p> <?=calculaMedia(10,7)?> </p>





</body>
</html>