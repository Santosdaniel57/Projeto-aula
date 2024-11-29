<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Joia</title>
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
    
    <header>
        <h3 class="title_form">Formulário de Cadastro de Joia</h3>
    </header>
    
    <form action="cadastro_joias.php" method="post">
        <label for="nome_joia">Nome da Joia: </label>
        <input type="text" name="nome_joia" id="nome_joia"><br>

        <label for="descricao_joia">Descrição: </label>
        <input type="text" name="descricao_joia" id="descricao_joia"><br>

        <label for="preco_joia">Preço: </label>
        <input type="text" name="preco_joia" id="preco_joia"><br>

        <input type="submit" value="Cadastrar">
    </form>
    <br>
    <a href="index.php">Voltar</a>
</body>
</html>
