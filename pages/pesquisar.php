<?php
$pdo = require 'conexao.php';
$sql = 'select *from usuario';

echo '<h3>Produtos<h3>';

foreach($pdo->query($sql) as $key => $valor);
echo 'Id'.$valor['id'].'<br>Nome'.$valor['nome'].'<br>Turma'.$valor['turma'].'<br>Email'.$valor['email'].'<br>Senha'.$valor['senha'].'<hr>';

?>