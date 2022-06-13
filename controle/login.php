<?php
$pdo = require 'conexao.php';
$sql = 'select * from usuarios';

$pesquisa = $pdo->query($sql);
$email = $_POST['email'];
$senha = $_POST['senha'];

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
