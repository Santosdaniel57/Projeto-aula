<?php
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nome_joia = $_POST['nome_joia'];
    $descricao_joia = $_POST['descricao_joia'];
    $preco_joia = $_POST['preco_joia'];

    $sql_atualizar = "UPDATE cadastro_joias SET 
        nome_joia = '$nome_joia',
        descricao_joia = '$descricao_joia',
        preco_joia = '$preco_joia'
        WHERE id = '$id'";

    if (mysqli_query($conexao, $sql_atualizar)) {
        header("Location: listar_cadastro_joia.php");
        exit;
    } else {
        echo "Erro ao atualizar joia: " . mysqli_error($conexao);
    }
}
?>
