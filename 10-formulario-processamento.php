<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário e processamento PHP</title>
</head>
<body>

<h1>Formulário e processamento PHP</h1>
<hr>


<?php

//Detectar quando o formulário é acionado


if ( isset($_POST['Enviar']) ) {
    
    if (empty($_POST['nome']) || empty($_POST['email']) ) {
       
?>   
        
   <p>Preencha os campos!</p>
   <p><a href="10-formulario-processamento.php">voltar</a></p>


<?php   

 } else {

    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);


 


?>

  <section>
      <h2>Dados</h2>
      <p>Nome: <?=$nome?> </p>
      <p>Email:  <?=$email?> </p>
  </section>
  <p><a href="10-formulario-processamento.php">voltar</a></p>

<?php
  }
 } else { 
?>

<!--Deixe o acion vazio-->
<form action="" method="post">

<p>
    <label for="name">Nome:</label>
    <input type="text" name="nome" id="nome">
</p>

<p>
    <label for="email">E-mail</label>
    <input type="text" name="email" id="email">
</p>

<!--Importante da um name ao botão -->
<button type="submit" name="Enviar">Enviar</button>

</form> 


<?php 
}
 ?>
</body>
</html>