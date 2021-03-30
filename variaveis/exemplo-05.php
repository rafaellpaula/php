<?php 
//Escopo Global
$nome = "Rafael";

function teste() {
//Escopo local da função teste()
    //echo $nome; //apenas dessa forma o $nome global não é visto no local
    global $nome; // invoca escopo global
    echo $nome;

   
}

function teste2() {
    //Escopo da função teste2()
    $nome = "Zé";
    echo "<br>" . $nome . " agora no teste 2";
}
teste();
teste2();

?>