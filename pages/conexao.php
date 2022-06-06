<?php

$conexao = null;

try {
  $conexao = new PDO('mysql:host=localhost;dbname=cadastropbl', 'root', '');
    echo "Conectado com sucesso";
} catch(Exception $e) {
    echo $e->getMessage();
    die();
}
return $conexao;
?>

<?php
if(isset($_POST['btn-cadastrar'])){
  $usuario = $_POST['usuario'];
  $senha = $_POST['senha'];

  $sql = Mysql::conectar()->prepare
}
?>