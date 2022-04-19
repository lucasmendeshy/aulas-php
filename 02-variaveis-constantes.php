<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e Constantes</title>
    <style>

        <?php $cor = "red";?>
        p { color: <?=$cor?>}

    </style>
</head>
<body>
    <h1>Manipulando dados na memória</h1>
    <hr>

<?php
     //Variáveis

     $curso = " Técnico em Informática para Internet";
     $ano = 2022; //inteiro (integer)
     $preco = 2500.45; //real (float)


     echo "<h2>Sáidas de dados usando echo e a sintaxe completa</h2>";  
     echo "<p>$curso</p>";  // Aspas dupla permite Interpolação (Variáveis e texto)
     echo '<p>$ano</p>';   // Aspas simples encara tudo como texto
     echo "<p>$ano</P>";
     echo "<p>R$$preco</p>";

     //Estamos fazendo o curso técnico informática para internet
     echo "<h3>Estamos fazendo o curso $curso no ano de $ano</h3>";

?> 

<h2>Saída de dados usando sintaxe simplificada</h2>
<p> <?php echo $curso ?> </p>
<p> <?=$curso?> </p> <!-- forma abreviada-->

<p>Estamos fazendo o curso <?=$curso?> no ano de <?=$ano?> </p>

<hr>

<?php
     //CONSTANTES

    //1ª Forma: usando a função define("NOME", "VALOR")
    
    define("MEU_NOME", "LUCAS");

   //2ª Forma: usando a palavra-chave const
   const ESCOLA = "Senac";

?>

<p>Olá! me chamo <?=MEU_NOME?> </p>
<p>Estamos estudando no <b><?=ESCOLA?></b<> </p>

<?php  //Versão concatenada (mais trabalhosa)
echo "<p>Olá! me chamo ".MEU_NOME."</p>";
echo "<p>Estamos estudando no <b>".ESCOLA."</b> </p>";
?>
</body>
</html>