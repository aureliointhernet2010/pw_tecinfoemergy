<?php
//Início
//Importação dos arquivos de conexao e pesquisa
$pdo = require 'conexao.php';
$pesquisa = require 'pesquisar.php';

//Coletando informações inseridas pelos usáurios na tela de cadastro
$nome = $_POST['nome'];
$turma = $_POST['turma'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$login = false;


foreach ($pesquisa as $key => $valor) {
    if ($valor['email' == $email] && $valor['senha'] == $senha)
        $login = true;
}
//Se o usuário for cadastrado, poderá acessar o site
if ($login == true) {
    header('location:../pages/areaAluno.php');
} else {
    $sql = 'insert into usuarios(nome, turma, email, senha) values(?,?,?,?)';

    $prepare = $pdo->prepare($sql);

    $prepare->bindParam(1, $_POST['nome']);
    $prepare->bindParam(2, $_POST['turma']);
    $prepare->bindParam(3, $_POST['email']);
    $prepare->bindParam(4, $_POST['senha']);

    $prepare->execute();

    header('location:../pages/areaAluno.php');
}
//Fim

?>
