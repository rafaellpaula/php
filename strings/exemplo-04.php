<?php

$frase = "A repetição é a mãe da retenção.";
$frase2 = "A repeticao e a mãe da retenção.";

$palavra = "mãe";

$q = mb_strpos($frase, $palavra);
var_dump($q);

echo "<br>";

$q2 = strpos($frase2, $palavra);// UTF-8 - Caracteres especiais contam como 2
var_dump($q2);

echo "<br>";

$q3 = strpos($frase, $palavra);
var_dump($q3);

echo "<br>";

$texto = substr($frase, 0, $q);

var_dump( $texto);

echo "<br>";

$texto2 = substr($frase, $q3 + strlen($palavra), strlen($frase));

var_dump($texto2);

echo "<br>" . $texto . " " . $palavra . " " . $texto2;

?>