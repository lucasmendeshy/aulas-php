<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>

    <style>
        .aprovado {color: blue;}
        .reprovado {color: red;}
    </style>
    
</head>
<body>

    <h1>Exercício 5  </h1>
    <hr>


 <?php

function calculaMedia ( $n1, $n2 ) {
    $media = ( $n1 + $n2 ) / 2; 
    return $media;

   //return $media ($n1, $n2) /2;
}

function verificaSituacao ( $m ) {

    if ($m >= 8) {
        return  "aprovado";

    } else  {
        return  "reprovado";   
    }

    //return $situacao;
 }




 $nota1 = 8;
 $nota2 = 2;
 $media = calculaMedia ($nota1, $nota2);

 ?>
 
 
 <p> <?=$media?> </p>

 <p class= "<?=verificaSituacao($media)?>">
      <?=verificaSituacao($media)?> </p>
<hr>






    
</body>
</html>