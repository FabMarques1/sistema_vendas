<?php

$host = 'localhost';
$user = 'root';
$password = '&tec77@info!';
$database = 'db_sistema_vendas';

$conexao = mysqli_connect($host, $user, $password, $database);

if (!$conexao) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}

mysqli_set_charset($conexao, "utf8mb4");
?>
