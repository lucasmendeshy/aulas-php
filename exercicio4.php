<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>

    <style>
        /*table, th, td{   {
            border:  1px
            solid;
        }*/

        /*Formatando as linhas de formas alternadas*/   
        tr:nth-child(even) {background:purple;}
        

    </style>

</head>
<body>

    <h1>Exercício 04 - Loop e Array (Usando Array associativo)</h1>
    <hr>

    

 <?php 
 
 $linguagens = [
  
       "HTML" => "Estruturação",
       "CSS" => "Estilos",
       "JS" => "Comportamentos",
       "PHP" => "Back-end"
 ];

?>


<table>

<thead> <!-- cabeçalho da tabela -->

<tr>

    <th>ID</th>
    <th>Linguaguem</th>
    <th>Descrição</th>
</tr>

</thead>



<tbody> <!-- corpo da tabela (área de conteúdo) -->

<?php

 $id = 1;

 foreach ($linguagens as $linguagem => $descricao) { ?>

    <tr>
     <td> <?=$id++?> </td>
     <td> <?=$linguagem?> </td>
     <td> <?=$descricao?> </td>

    </tr>

    <?php

    //$id++;  // icremento  de 1 até 4, atualiza a cada repetição.

    } ?>

</tbody>
 
</table>
<hr>


<h2>Versão 2 - Usando Matriz (Array dentro de Array)</h2>


<?php

$linguagens2 = [
    [
        "id" => 1,
        "linguagem" => "HTML",
        "descrição" => "Estruturação"
    ],

    [
        "id" => 2,
        "linguagem" => "CSS",
        "descrição" => "Estilos"
    ],

    [
        "id" => 3,
        "linguagem" => "JS",
        "descrição" => "Comportamento"
    ],

    [
        "id" => 4,
        "linguagem" => "PHP",
        "descrição" => "Back end"
    ]

    
];
?>

<table>

    <tr>
        <th>ID</th>
        <th>Linguaguem</th>
        <th>Descrição</th>
    </tr>

    <?php foreach ( $linguagens2 as $linguagem ) { ?>
        
        <tr>
            <td> <?=$linguagem ['id']?> </td>
            <td> <?=$linguagem ['linguagem']?> </td>
            <td> <?=$linguagem ['descrição']?> </td>
        </tr>

    <?php  } ?>

</table>











</body>
</html>