<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <h1>Estrutura de Controle de Repetição</h1>
    <hr>

    <h2>While (enquanto)</h2>


<?php

$i = 1;


while ($i <= 5) {
?>    
   <p> <?=$i?> </p>

   <!--$i = $i + 1;  -->

<?php

  $i++;  //usando icremento
}
?>

<hr>

<h2> do / while (repita)</h2>

<?php

$j =1;

do {
?> 

<div> <h3>Olá!</h3></div>


<?php

$j++ ;

} while ($j <= 3 );

?>

<hr>


<h2> for (para) </h2>



<?php 

//controle; condição; atualização
// para i de 1 ate 10 faça
 for ( $i = 1; $i <= 10; $i++) {
     echo $i. "";


 

}

?>
<hr>

<h2>Exercício</h2>

<?php 


$meses = [
 
 "janeiro", "fevereiro", "março", "abril", "maio", "junho", "julho", "agosto", "setembro", "outubro", "novembro", "dezembro"

];


?>

 

<ol>

<?php

$quantidade = count($meses);

 for ($i = 1; $i < $quantidade; $i++ ) { ?>

     <li> <?=$meses[$i]?> </li>

<?php } ?>
 
</ol>

<hr>


<h2> foreach (para cada...) </h2>

<ol>

 <?php foreach ( $meses as $mes ) {  ?>

 <li> <?=$mes?> </li>

<?php  }?>



</ol>
<hr>

 <h2> Clubes </h2>

<?php 

$clubes = [
  
  "Corinthians" => "Timão",
  "Palmeiras" => "Porco",
  "São Paulo" => "Tricolor",
  "Santos" => "Peixe"


];

//foreach ( $clubes as $clube ) {

    foreach ($clubes as $clube => $apelido) {  
?>
  
  <p>O <?=$clube?> é conhecido como <?=$apelido?>. </p>
  

<?php
 }
 
 // Matriz (array dentro de array)
 $alunos = [

     [
         "nome" => "Chaves",
         "idade" => 8
     ],

     [
         "nome" => "Chapolin",
         "idade" => 20
     ],

     [
         "nome" => "Chiquinha",
         "idade" => 10
     ]

 ];


 foreach ($alunos as $aluno) { 
?> 

<p>Nome: <?=$aluno ['nome']?>  </p>
<p>Idade: <?=$aluno ['idade']?>  </p>
<hr>

<?php
 }
?> 















   
</body>
</html>