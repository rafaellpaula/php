<?php
//Tipos de Dados 

//Básicos

$nome = "Gabriela";
$site = 'www.varinhacondao.com.br';

$ano = 1992;
$salario = 5500.99;
$bloqueado = false;
///////////////////////////////////////////
//Compostos

$frutas = array("abacaxi", "laranja", "manga");

//echo $frutas[2];

$nascimento = new DateTime();

//var_dump($nascimento);
////////////////////////////////////////////
//Tipos Especiais - Resource e Null

$arquivo = fopen("exemplo-03.php", "r");
//var_dump($arquivo);

$nulo = NULL; // Nulo é diferente de vazio

?>