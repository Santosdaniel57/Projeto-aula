<?php
include 'database.php';

$id = $_GET['id'] ?? null;

if ($id === null) {
    die("ID não fornecido.");
}

$id = intval($id); 

$sql_excluir = "DELETE FROM cadastro_joias WHERE id = '$id'";

if (mysqli_query($conexao, $sql_excluir)) {
    header("Location: listar_cadastro_joia.php");
    exit;
} else {
    echo "Erro ao excluir joia: " . mysqli_error($conexao);
}
?>
