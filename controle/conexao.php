<?php

 //conexao dos formulários com banco de dados

//aqui há uma variavel sem valor
$conexao = null;

//fazendo a conexao com o banco
try{
 //tratando execeções caso tenha erros ao conectar 
    $conexao = new PDO('mysql:host=localhost;dbname=cadastropbl', 'root', '');
    
    //caso aconteça algum erro de conexao
}catch(Exception $e) {
    echo $e->getMessage();
    die();
}

return $conexao;

//fim
?>

