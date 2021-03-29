<?php

$anoNascimento = 1992;

$nomeCompleto = "Rafael Leal de Paula";
// Comentário de linha simples

/*
	Comentário de bloco
*/
$nome1 = "João";
$nome2 = "Maria";

echo $nome1;

echo "<br>";

unset($nome1, $nome2);

if(isset($nome1)){

	echo $nome1;
}

// exit(); para a execução do php

?>