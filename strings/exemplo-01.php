<?php
// Diferença entre string com aspas simples ou duplas
$nome = "Rafael";

$nome2 = 'Gabriela';

//var_dump($nome, $nome2);

echo "ABC $nome <br>"; // Ao usar aspas duplas é possível utilizar as variáveis com seus repectivos valores.
// Esse recurso chama-se INTERPOLAÇÃO DE VARIÁVEIS

echo 'ABC $nome'; // Aqui o PHP interpreta tudo como texto

?>