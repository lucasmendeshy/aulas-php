<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Nativas</title>

</head>
<body>

<h1>Exemplos de funções nativas no PHP</h1>
<hr>

<h2>1.Strings</h2>

<?php
/* trim () -> remove espaços antes e depois de strings */

$nome = "    Lucas Mendes            ";
$nomeSemEspa = trim($nome);
?>

<pre> <?=var_dump($nome)?> </pre>
<pre> <?=var_dump($nomeSemEspa)?> </pre>

   <h3>str_replace</h3>

 <?php
 /*replace substitui */
 $fraseFeia = "<p>Fulano é um bobão e xarope</p>";
 $fraseBonita = str_replace (

     ["bobão", "xarope"],

     ["cara legal", "genial"],

     $fraseFeia

    );

    echo $fraseFeia;
    echo $fraseBonita;
 ?>
     <h3>explode()</h3>
     
 <?php
 /* explode transforma em array */
 $linguaguens = "HTML - CSS - JS";
 $arrayLinguagens = explode(" - ", $linguaguens);

 ?>
 
 <pre> <?=var_dump($linguaguens)?> </pre>
 <pre> <?=var_dump($arrayLinguagens)?> </pre>
 <hr>

<h2>2.Arrays</h2>

 <h3> implode </h3>

 <?php
 /* implode transforma de array para string   */
 $bandas = ["Savatage", "Nightwish", "Ghost"];
 $stringsBandas = implode("/", $bandas);
 ?>

<pre> <?=var_dump($bandas)?> </pre>
<pre> <?=var_dump($stringsBandas)?> </pre>


  <h3>extract()</h3>

<?php

$aluno = [
    "id" => "Lucas Mendes",
    "idade" => 19,
    "sexo" => "masculino",
    "cidade" => "São Paulo"
];
extract($aluno)
?>

<p> <?=$id?> </p>
<p> <?=$idade?> </p>
<p> <?=$sexo?> </p>
<p> <?=$cidade?> </p>
<hr>

<h2>3.Filtros</h2>

<?php
$email = "lucasaraujo12345.outlook.com.br";
$ataque = "<script> document.body.innerHTML = 'sou ráqui!! mwahaha >.<' </script>";

$ataqueAnulado = filter_var($ataque, FILTER_SANITIZE_SPECIAL_CHARS);

echo $ataqueAnulado;
?>

<p> <?=var_dump ( filter_var ( $email, FILTER_VALIDATE_EMAIL ) )?> </p>
<hr>




<h2>4.Segurança (criptografia)</h2>

<?php
$senha = "12345"; // texto puro ou plain text (sem segurança)


/* Algoritmo mais comuns
MD5, SHA1, SHA256 */


$senhaMD5 = md5($senha);
$senhaSHA1 = sha1($senha);
$senhaSHA256 = hash('sha256', $senha);

//Método recomendado atualmente para senhas.
$senhaSegura = password_hash($senha, PASSWORD_DEFAULT);
?>

<p> senha (texto puro): <?=$senha?> </p>
<p> senha (MD5): <?=$senhaMD5?> </p>
<p> senha (SHA1): <?=$senhaSHA1?> </p>
<p> senha (SHA256): <?=$senhaSHA256?> </p>

<!-- Hash de 60 caracteres -->
<p> senha (password_hash): <?=$senhaSegura?> </p>
<hr>


<h2>5. Verificação de senhas</h2>


<?php
$senhaDigitada = "12zzzz";
if ( password_verify ($senhaDigitada, $senhaSegura) ) {
// if ($senhaDigitada === $senhaSegura) { // NÃO DA CERTO!     
    echo "Beleza, senhas iguais...";

} else {
    echo "Opa, senha errada!";
};
?>
</body>
</html>