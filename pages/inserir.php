<?php
$pdo = require 'conexao.php';
$pesquisa = require 'pesquisar.php';

$email = $_POST['email'];
$senha = $_POST['senha'];
$login = false;

foreach($pesquisa as $key => $valor){
    if($valor['email' == $email] && $valor['senha'] == $senha)
    $login = true;
}

if ($login = true) {
    header('location:../index.php');
}else{
    $sql = 'insert into usuarios(nome, turma, email, senha) values(?,?,?,?)';

$prepare = $pdo->prepare($sql);

$prepare->bindParam(1, $_POST['nome']);
$prepare->bindParam(2, $_POST['turma']);
$prepare->bindParam(3, $_POST['email']);
$prepare->bindParam(4, $_POST['senha']);

$prepare->execute();
}



// echo $prepare;
?>