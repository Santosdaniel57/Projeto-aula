<?php
include 'database.php';

$sql_listar = "SELECT * FROM cadastro_joias"; 
$resultado = mysqli_query($conexao, $sql_listar);

if (!$resultado) {
    die("Erro ao consultar o banco de dados: " . mysqli_error($conexao));
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Joias Masculinas</title>
    <link rel="stylesheet" href="css/listar.css">
</head>
<body>
    <h3>Lista de Joias Cadastradas</h3>
    <table>
        <thead>
            <tr>
                <th>Nome da Joia</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($dados = mysqli_fetch_assoc($resultado)): ?>
                <tr>
                    <td><?php echo htmlspecialchars($dados['nome_joia']); ?></td>
                    <td><?php echo htmlspecialchars($dados['descricao_joia']); ?></td>
                    <td>R$ <?php echo number_format($dados['preco_joia'], 2, ',', '.'); ?></td>
                    <td>
                        <a href="form_atualizar_cadastro.php?id=<?php echo $dados['id']; ?>">Atualizar</a> |
                        <a href="excluir_cadastro.php?id=<?php echo $dados['id']; ?>" onclick="return confirm('Tem certeza que deseja excluir esta joia?');">Excluir</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <br>
    <h3><a href="index.php">Voltar</a></h3>
</body>
</html>
