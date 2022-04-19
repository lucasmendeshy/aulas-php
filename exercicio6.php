<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 06 </title>  

    <style>

        form{border: solid 2px black; margin: 0 auto; width: 400px; padding: 1em; border-radius: 1em;}
        h1{margin: 0px 0px 0px 10px; text-align: center;}
        body{background-color: #f3f3f3;}
        label{display: inline-block; width: 90px; text-align: right}
        p{font-family:Arial, Helvetica, sans-serif ;}   
        
        
       

    </style>
</head>
<body>

    <h1>Exercício 06</h1>
    <hr>


    <form action="exercicio06-processa-post.php" method="post">

     <p>
         <label for="nome">Nome:</label>
         <input type="text" name="nome" id="nome">
     </p>

     <p><label for="fabricante">Fabricante:</label>
    <select name="fabricantes">
         <option value=""></option>


<?php
$fabricantes = array("Casas Bahia", "MagazineLuiza", "Americanas", "Pernambucanas");
foreach( $fabricantes as $fabricante ){
?>
        <option> <?=$fabricante?> </option>
<?php } ?>

      
     </select>

    </p>
     
     <p>
         <label for="preco">Preço.:R$</label>
         <input type="number"name="preco" id="preco" min="100" max="10000" step="0.01" placeholder="Preço informado">
    </p>

     <p> <label for="descricao">Descrição:</label> <br> 
        <textarea name="descricao" id="descricao" cols="30" rows="5"></textarea>
    </p>

     <button type="submit" name="enviar">Enviar</button>

    </form>
    
</body>
</html>