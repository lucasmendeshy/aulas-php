<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 06</title>

<style>

    form{border: solid 2px black; margin: 0 auto; width: 400px; padding: 1em; border-radius: 1em;}
     h1{margin: 0px 0px 0px 10px; text-align: center;}
    body{background-color: #f3f3f3;}
    p{font-family:Arial, Helvetica, sans-serif ;}

</style>

</head>
<body>

<h1>Processamento dos dados</h1>
<hr>

<?php

 if (empty($_POST['nome']) || empty ( $_POST ['fabricantes'] ) ) {
 ?>    <p style="color: red">Você deve preencher nome e fabricantes</p>

<?php
} else {  

$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);

$fabricante = filter_input(INPUT_POST, "fabricantes", FILTER_SANITIZE_SPECIAL_CHARS);

$preco = filter_input (INPUT_POST, "preco", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

//$descricao = filter_input(INPUT_POST, "descricao", FILTER_SANITIZE_SPECIAL_CHARS);

$descricao = $_POST["descricao"];

?>

<h2>Exibir dados</h2>

<ul>
    <li>Nome: <?=$nome?></li>
    <li>fabricantes: <?=$fabricante?> </li>
    <li>Preço: R$ <?=number_format($preco,2, ",", ".")?> </li>
    <li>Descrição: <?=nl2br($descricao)?></li>
</ul>

<!-- tag -  NL12BR -> MANTÉM TUDO NA MESMA LINHA, INDEPEDENTE SE VOCE ESCREVER O TEXTO DANDO QUEBRAS DE LINHA -->








 <?php } ?>   
</body>
</html>