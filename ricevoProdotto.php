<html>

<body>

<h1>Prodotto ricevuto</h1>

<?php

//recupero valore parametro nome
$nome= $_POST['nome'];
$descrizione= $_POST['descrizione'];
$prezzo=$_POST['prezzo'];

echo "<p>PRODOTTO: ". $nome. "</p> ";
echo "<p>DESCRIZIONE: ". $descrizione. "</p>";
echo "<p>PREZZO: ". $prezzo. "</p>";


?>



</body>


</html>