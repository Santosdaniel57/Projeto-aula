<?php
$server = "localhost";
$server_user = "root";
$server_password = "";
$database = "exercicio_crud_joias"; // Nome do seu banco de dados

$conexao = mysqli_connect($server, $server_user, $server_password, $database);

if (!$conexao) {
    die("Erro de conexão: " . mysqli_connect_error());
}
?>
