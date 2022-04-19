<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>



    <style>
        body{
            background-color:#f2f2f2;
        }
         .conteudo{color:black; font-size: 1.5rem; background-color: gold; }


         .titulo {text-align:center; color: blue;}

         .conteudo2 {color:black;font-size:1.5rem; background-color: red; }

    </style>

</head>
<body>

<<h1 class="titulo">Exercicio 02 usando array</h1> 

<h2>Dados 1:</h2>

<?php 

$identidade = [
    "nome" => "Lucas",
    "senha" => 123,
    "idade" => 18,
    "sexo" => "Masculino",
    "cidade" => "Ferraz de Vasconcelos",
    "email" => "lucasaraujo12345@outlook.com.br"
];

?>

<section class="conteudo">


<ol>
    <li>Nome: <?=$identidade["nome"]?> </li> 

    <li>Informe sua senha: <?=$identidade["senha"]?> </li>

    <li>Informe sua idade: <?=$identidade["idade"]?> </li>

    <li>Informe seu gênero: <?=$identidade["sexo"]?> </li>

    <li>Informe sua cidade: <?=$identidade["cidade"]?> </li>

    <li>Digite o seu e-mail: <?=$identidade["email"]?> </li>

</ol>

</section>
<hr>


<h2>Dados: 2</h2>

<?php 

$dados = [
    "nome" => "Thiago",
    "senha" => 123456,
    "idade" => 19,
    "sexo" => "Masculino",
    "cidade" => "Althur Alvim",
    "email" => "thiago123456@gmail.com"
];
?>

<section class="conteudo2">

<ol>
    <li>Nome: <?=$dados["nome"]?> </li> 

    <li>Informe sua senha: <?=$dados["senha"]?> </li>

    <li>Informe sua idade: <?=$dados["idade"]?> </li>

    <li>Informe seu gênero: <?=$dados["sexo"]?> </li>

    <li>Informe sua cidade: <?=$dados["cidade"]?> </li>

    <li>Digite o seu e-mail: <?=$dados["email"]?> </li>

</ol>
</section>
<hr>


    
</body>
</html>