<?php
// include e require
//include "exemplo-01.php";
//Atenção ao caminho e onde o php acusa erro
require "exemplo-01.php";

/* A difereça do include e do require é que o require exige que o arquivo esteja funcionando sem erros, 
caso exista um erro ele retorna um erro fatal. O include tende a funcionar mesmo se o arquivo não exista
ou se possui algum tipo de problema

O include possui mais recursos, como o include path*/


$resultado = somar(10,20);

echo $resultado;

?>