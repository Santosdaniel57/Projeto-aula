<?php
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome_joia = $_POST['nome_joia'];
    $descricao_joia = $_POST['descricao_joia'];
    $preco_joia = $_POST['preco_joia'];

    $sql_inserir = "INSERT INTO cadastro_joias (nome_joia, descricao_joia, preco_joia) 
                    VALUES ('$nome_joia', '$descricao_joia', '$preco_joia')";

    if (mysqli_query($conexao, $sql_inserir)) {
        header("Location: listar_cadastro_joia.php");
        exit;
    } else {
        echo "Erro ao cadastrar joia: " . mysqli_error($conexao);
    }
}
?>
