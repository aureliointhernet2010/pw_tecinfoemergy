<?php

 //Conexão dos formulários com banco de dados

//aqui há uma variavel sem valor
$conexao = null;

//Fazendo a conexão com o banco
try{
 //Tratando execeções caso tenha erros ao conectar 
    $conexao = new PDO('mysql:host=localhost;dbname=cadastropbl', 'root', '');
    
    //Caso aconteça algum erro de conexão
}catch(Exception $e) {
    echo $e->getMessage();
    die();
}

return $conexao;

//Fim
?>

