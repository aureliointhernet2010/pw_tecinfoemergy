<?php

//Sistema de identificação dos usuários cadastrados ao efetuar o login


$pdo = require 'conexao.php';
$sql = 'select * from usuarios';

//Pesquisa
$pesquisa = $pdo->query($sql);
$email = $_POST['email'];
$senha = $_POST['senha'];

//Caso o usuário não seja cadastrado
$login = false;

foreach ($pesquisa as $key => $valor) {
    if ($valor['email'] == $email && $valor['senha'] == $senha)
        $login = true;
}

if ($login == true) {
    header('location:../pages/areaAluno.php');
} else {
    header('location:../pages/login.php');
}
//fim
?>

