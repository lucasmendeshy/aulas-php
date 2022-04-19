<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays no PHP</title>
</head>
<body>

<h1>Trabalhando com arrays (vetores e matrizes)</h1>
<hr>

<h2>Arrays com índices númericos</h2>

<?php 
//Sintaxe colchetes

$bandas = ["Savatage","Iron Mainden", "Nighwish"];

//Sintaxe com função array()

$cursos = array("HTML5", "CSS3", "NodeJS", "Photoshop");

//Sintaxe indicando indice manualmente

$comidaDeButeco[0] = "Bolinho de Bacalhau";
$comidaDeButeco[1] = "Pastel";
$comidaDeButeco[2] = "Esfiha de carne";


//Constantes de arrays

define("UNIDADES_SENAC", ["Penha, Tatuapé", "Itaquera"]);

const FRUTAS = ["Morango", "Abacaxi"];

?>

<h3>Acessando os dados</h3>

<ol>
    <li>Uma das bandas que mais gosto:
        <?=$bandas[2]?>
    </li>

    <li>Linguaguem base da Web:
        <?=$cursos[0]?>
    </li>

    <li>Quero comer: <?=$comidaDeButeco[0]?> </li>

    <li>Senac <?=UNIDADES_SENAC[1]?> </li>

    <li>Fruta: <?=FRUTAS[1]?> </li>
</ol>


<h2>Array associativos</h2>

<?php

$cursos = [
    //Chave associativa (identificação => valor)
    "nome" => "Gastronomia",
    "cargaHoraria" => 150,
    "unidade" => "penha"
];

?>

<p>Nome do curso: <?=$cursos["nome"]?> </p>
<p>Carga Horária: <?=$cursos["cargaHoraria"]?> horas </p>
<p>Unidade: <?=$cursos["unidade"]?> </p>

<h2>Matriz(Array dentro de Array)</h2>


<?php
     //Plano de estudos de Front, Back e Design

     $planoDeEstudos = [
        //  0                       1          2
          ["JavaScript Avançado", "Node.js", "React"], //0

      //    0        1      2        3
          ["PHP", "POO", "MySQL", "Python"], //1

     //          0                1            2  
          ["Teoria das cores", "Photoshop", "UX/UI"] //2

     ];
?>


         <h3> Mini exercício</h3> 


         <ul>  
             <li>
                 <?=$planoDeEstudos [0] [2]?>
             </li>

             <li>
                 <?=$planoDeEstudos [1] [0]?>/<?=$planoDeEstudos [1] [2]?>
             </li>

             <li>
                 <?=$planoDeEstudos [2] [1]?> e <?=$planoDeEstudos [2] [0] ?>
             </li>
         
         </ul>


         <h2>Análise de arrays (debug/depuração)</h2>

         <p> <?php var_dump($bandas)?> </p>

         <pre> <?php var_dump($bandas)?> </p> <!-- PRE -> QUEBRA DE LINHA -->
         
         
         <hr>


         <p> <?php print_r($bandas)?> </p>

         <p> <?php print_r($bandas)?> </p>

         <hr>



         <pre>
             <?=var_dump($planoDeEstudos)?>
         </pre>
         <hr>


    















</body>
</html>