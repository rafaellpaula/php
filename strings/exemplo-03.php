<?php

$empresa = "Hcode";

$empresa = str_replace("o", "0", $empresa);

echo $empresa;

echo "<br>";
$empresa = str_replace("e", "&", $empresa);
// Nesses casos é utilizada a correspondência exata.
// Para busca com expressões regulares é preciso utilizar uma função própria
echo $empresa;

?>