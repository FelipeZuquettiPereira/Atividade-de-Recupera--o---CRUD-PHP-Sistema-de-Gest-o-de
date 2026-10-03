<?php

include "../infra/conexao.php";

$id = isset($_GET["id"]) ? (int)$_GET["id"] : 0;

$stmt = mysqli_prepare($conexao, "SELECT * FROM brinquedo WHERE id = ?");
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);

$resultado = mysqli_stmt_get_result($stmt);
$result = mysqli_fetch_assoc($resultado);

mysqli_stmt_close($stmt);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestão de Brinquedos</title>
    <link rel="stylesheet" href="style/styles.css">
</head>

<body>
    <header>
        <h1>CRUD - Brinquedaria</h1>
    </header>
    <main>
        <h2>Editando o Brinquedo <?php echo htmlspecialchars($result["nome"] ?? ""); ?>!</h2>
        <form action="atualizar.php" method="POST">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($result["id"] ?? ""); ?>" required>

            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="<?php echo htmlspecialchars($result["nome"] ?? ""); ?>">
            <br>
            <label for="categoria">Categoria:</label>
            <select name="categoria" id="categoria" required>
                <option value="<?php echo htmlspecialchars($result["categoria"] ?? ""); ?>"><?php echo htmlspecialchars($result["categoria"] ?? ""); ?></option>
                <option value="imaginario">Imaginário</option>
                <option value="educativo">Educativo</option>
                <option value="explosivo">Explosivo</option>
            </select>
            <br>
            <label for="idade_minima">Idade mínima:</label>
            <select name="idade_minima" id="idade_minima" required>
                <option value="<?php echo htmlspecialchars($result["idade_minima"] ?? ""); ?>">+<?php echo htmlspecialchars($result["idade_minima"] ?? ""); ?> anos</option>
                <option value="2">+2 anos</option>
                <option value="3">+3 anos</option>
                <option value="4">+4 anos</option>
                <option value="5">+5 anos</option>
                <option value="6">+6 anos</option>
                <option value="7">+7 anos</option>
            </select>
            <br>
            <label for="preco">Preço:</label>
            <input type="number" id="preco" name="preco" step="0.01" value="<?php echo htmlspecialchars($result["preco"] ?? ""); ?>" required>
            <br>

            <label for="quantidade_estoque">Quantidade no Estoque:</label>
            <input type="number" id="quantidade_estoque" name="quantidade_estoque" value="<?php echo htmlspecialchars($result["quantidade_estoque"] ?? ""); ?>" required>
            <br>
            <button type="submit">Atualizar</button>
        </form>

    </main>
    <footer>

    </footer>

</body>

</html>