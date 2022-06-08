<?php

$conexao = null;

try{
    $conexao = new PDO('mysql:host=localhost;dbname=cadastropbl', 'root', '');
    echo "Conectado com sucesso";
}catch(Exception $e) {
    echo $e->getMessage();
    die();
}
return $conexao;
?>

