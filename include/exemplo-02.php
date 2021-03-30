<?php
// include e require
//include "exemplo-01.php";
//Atenção ao caminho e onde o php acusa erro
//require "inc/exemplo-01.php";

/* A difereça do include e do require é que o require exige que o arquivo esteja funcionando sem erros, 
caso exista um erro ele retorna um erro fatal. O include tende a funcionar mesmo se o arquivo não exista
ou se possui algum tipo de problema

O include possui mais recursos, como o include path
O include é mais interessante para intranet (projetos internos)
O include remote é um recurso perigoso pois executa arquivos
presentes em outros domínios como se estivesse no site
Também é aceitavel include dinâmico.

*/

//Existe uma variação de include e require que são mais interessantes que os originais.
require_once "inc/exemplo-01.php";
require_once "inc/exemplo-01.php";

//A patir do php 7 os erros fatais não interrompem a execução da página, os erros precisam ser tratados com try/catch

$resultado = somar(10,20);

echo $resultado;

?>