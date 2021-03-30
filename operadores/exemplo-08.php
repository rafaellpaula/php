<?php
//Precedência
$resultado = ( 10 + 3 ) /2 > 5 && 10 + 5 < 3;
// && igual o "e" lógico

var_dump( $resultado);

$resultado = ( 10 + 3 ) /2 > 5 || 10 + 5 < 3;
// || igual o "ou" lógico

var_dump( $resultado);

?>