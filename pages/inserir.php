<?php
$pdo = require 'conexao.php';
$sql = 'insert into usuarios(nome, turma, email, senha) values(?,?,?,?)';

$prepare = $pdo->prepare($sql);

$prepare->bindParam(1, $_POST['nome']);
$prepare->bindParam(2, $_POST['turma']);
$prepare->bindParam(3, $_POST['email']);
$prepare->bindParam(4, $_POST['senha']);

$prepare->execute();

// echo $prepare;
?>