<?php

 //conexao dos formulários com banco de dados

$conexao = null;

//fazendo a conexao com o banco
try{
    $conexao = new PDO('mysql:host=localhost;dbname=cadastropbl', 'root', '');
    // echo "Conectado com sucesso";
    //caso aconteça algum erro de conexao
}catch(Exception $e) {
    echo $e->getMessage();
    die();
}

return $conexao;

//fim
?>

