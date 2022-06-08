<?php
$pdo = require 'conexao.php';
$sql = 'select * from usuarios';

// echo '<h3>Produtos<h3>';
$resultado = $pdo->query($sql);

return $resultado;
// echo 'Id'.$valor['id'].'<br>Nome'.$valor['nome'].'<br>Turma'.$valor['turma'].'<br>Email'.$valor['email'].'<br>Senha'.$valor['senha'].'<hr>';

?>