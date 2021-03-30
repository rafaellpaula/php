<?php 
// Uso de variáveis Super Global ou ARRAYS pré definidas
// Toda informação vindo por GET ou POST é String
//$nome = (int)$_GET["a"];

// Na URL o ? faz a divisão entre url e parâmertros
// Já o & faz a divisão dos inúmeros parâmetros passado via URL.
// URI Uniform Resouce Identier

//var_dump($nome);

// Para pegar o IP da hospedagem
$ip = $_SERVER["REMOTE_ADDR"];

// Para pegar o IP da hospedagem
$diretorio = $_SERVER["SCRIPT_NAME"];
echo $ip . "<br>" . $diretorio;

?>