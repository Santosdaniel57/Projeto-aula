<?php
include 'database.php';

$id = $_GET['id'] ?? null;

if ($id === null) {
    die("ID não fornecido.");
}

$id = intval($id); 

$sql_por_id = "SELECT * FROM cadastro_joias WHERE id = '$id'";
$resultado_consulta_por_id = mysqli_query($conexao, $sql_por_id);

if (!$resultado_consulta_por_id || mysqli_num_rows($resultado_consulta_por_id) === 0) {
    die("Joia não encontrada.");
}

$dados_id = mysqli_fetch_assoc($resultado_consulta_por_id);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Joia</title>
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
    <header>
        <h3 class="title_form">Atualização de Joia</h3>
    </header>

    <form action="processar_atualizacao.php" method="post">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($dados_id['id']); ?>">

        <label for="nome_joia">Nome: </label>
        <input type="text" name="nome_joia" id="nome_joia" value="<?php echo htmlspecialchars($dados_id['nome_joia']); ?>"><br>

        <label for="descricao_joia">Descrição: </label>
        <input type="text" name="descricao_joia" id="descricao_joia" value="<?php echo htmlspecialchars($dados_id['descricao_joia']); ?>"><br>

        <label for="preco_joia">Preço: </label>
        <input type="text" name="preco_joia" id="preco_joia" value="<?php echo htmlspecialchars($dados_id['preco_joia']); ?>"><br>

        <input type="submit" value="Atualizar">
    </form>
    <br>
    <a href="listar_cadastro_joia.php">Voltar</a>
</body>
</html>
