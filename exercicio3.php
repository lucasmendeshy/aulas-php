<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
</head>
<body>

    <h1>Exercício 03</h1>
    <hr>

<?php
$salario = 1100;



if ($salario < 500) {
   $novoSalario = $salario *1.15;
}

elseif ( $salario <= 1000 ) {
   $novoSalario = $salario *1.10;
}

else { 
    $novoSalario = $salario *1.05;
 }


// number_format(valor,)2,"," ,"."     
?>

<p>Salario antigo : <?=number_format($salario, 2, "," , ".")?> </p>
<p>Salário novo: <?=number_format($novoSalario, 2, "," , ".")?> </p>





    
</body>
</html>