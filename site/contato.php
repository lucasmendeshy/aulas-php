<!--<title>Contato - Site PHP</title>-->
<?php require "includes/cabecalhos.php"?>



<h2>Contato</h2>
<p>Entre em contato conosco:</p>
<p>
<label for="nome">Nome:</label>
<input type="text" id="nome" id="nome"/>
</p>
<button type="submit">Enviar</button>
<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe quo facere totam rem, fugiat asperiores eos nesciunt voluptas corporis fuga a molestias harum velit dicta et ab sint odit quisquam id illum assumenda obcaecati minus alias repellendus? Et, aliquid veritatis quaerat, iure quidem doloribus tenetur laudantium quam numquam illo repellendus.</p>


<?php  require "includes/rodape.php"
?>

<?php
$hoje = "date";

date_default_timezone_set("America/Sao_Paulo");

$date = date("d/m/Y H:i "); 



?>


<p> <?=$date?> </p>