<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício</title>

    <style>
        .destaque{color: purple; text-align: center;}
        .dados{color: gray;}
        .limite {color: gray;}
        
    </style>
</head>
<body>
   <h1 class="destaque">Exercício PHP</h1>
   <hr>

   <h2>Saídas de dados</h2>


   <?php
     
     define ("MEU_NOME", "Lucas Mendes.");

     //const NOME = "Lucas";
     //const DATA : "18/03/2002";


     date_default_timezone_set("America/Sao_Paulo");

     $date = date("d/m/Y H:i "); 

    

     const CURSO = "Gastronomia";

     const CARGA_HORARIA = 500;

     const LIMITE_FALTAS = CARGA_HORARIA  *0.25;

   ?>


   <section class="dados">
   <p>Olá, me chamo <?=MEU_NOME?> </p>

   <p>Data: <?=$date?> </p>

   <p>Curso: <?=CURSO?> </p>

   <p>Carga Horária do curso: <?=CARGA_HORARIA?> </p>

   <p>Limite de faltas: <?=LIMITE_FALTAS?> </p>

   </section>

   <?php CARGA_HORARIA <- CARGA_HORARIA + LIMITE_FALTAS *0.25
   
   ?>

   

   <h2>Limite de faltas</h2>

   <div class="limite">
   <p>Limite de faltas informado foi de: <?=LIMITE_FALTAS?>horas.</p>
   </div>
</body>
</html>