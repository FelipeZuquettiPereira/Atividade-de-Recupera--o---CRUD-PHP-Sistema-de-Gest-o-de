<?php

include "infra/conexao.php";
$result = mysqli_query($conexao, "SELECT * FROM brinquedo");

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gerenciamento de Brinquedos</title>
    <link rel="stylesheet" href="style/styles.css">
</head>

<body>
    <header>
        <h1>CRUD - Brinquedaria</h1>
    </header>
    <main>
        <h2>Adicione um novo Brinquedo!</h2>
        <form action="public/cadastrar.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            <br>

            <label for="categoria">Categoria:</label>
            <select name="categoria" id="categoria" required>
                <option value="">Selecione uma categoria</option>
                <option value="imaginario">Imaginário</option>
                <option value="educativo">Educativo</option>
                <option value="explosivo">Explosivo</option>
            </select>
            <br>

            <label for="idade_minima">Idade mínima:</label>
            <select name="idade_minima" id="idade_minima" required>
                <option value="">Selecione uma idade mínima</option>
                <option value="2">+2 anos</option>
                <option value="3">+3 anos</option>
                <option value="4">+4 anos</option>
                <option value="5">+5 anos</option>
                <option value="6">+6 anos</option>
                <option value="7">+7 anos</option>
            </select>
            <br>

            <label for="preco">Preço:</label>
            <input type="number" id="preco" name="preco" required>
            <br>

            <label for="quantidade_estoque">Quantidade no Estoque:</label>
            <input type="number" id="quantidade_estoque" name="quantidade_estoque" required>
            <br>

            <button type="submit">Cadastrar</button>
            
        </form>
            <a href="public/listar.php"><Button>Listar Brinquedos</Button></a>
    </main>
    <footer></footer>
</body>

</html>