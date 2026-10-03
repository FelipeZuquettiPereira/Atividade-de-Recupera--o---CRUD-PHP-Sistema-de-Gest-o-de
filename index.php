<?php

include "infra/conexao.php";
$brinquedo = mysqli_query($conexao, "SELECT * FROM brinquedo");

?>

<!DOCTYPE html>
<html lang="en">

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
            <input type="text" name="nome">
            <br>
            <label for="categoria">Categoria:</label>
            <select name="categoria" id="categoria">
                <option value="" >Selecione uma categoria</option>
                <option value="imaginario">Imaginario</option>
                <option value="educativo">Educativo</option>
                <option value="explosivo">explosivo</option>
            </select>
            <br>
            <label for="idade_minima">Idade mínima:</label>
            <select name="idade_minima" id="idade_minima">
                <option value="" >Selecione uma idade mínima</option>
                <option value="2">+2 anos</option>
                <option value="3">+3 anos</option>
                <option value="4">+4 anos</option>
                <option value="5">+5 anos</option>
                <option value="6">+6 anos</option>
                <option value="7">+7 anos</option>
            </select>
            <br>
            <label for="preco">Preço: </label>
            <input type="text" name="preco">
            <br>
            <label for="quantidade_estoque">Quantidade no Estoque: </label>
            <input type="number" name="quantidade_estoque">
            <button type="submit">Cadastrar</button>
        </form>
        <div>
            <h2>brinquedo Cadastrados</h2>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th>Idade mínima</th>
                    <th>Preço</th>
                    <th>Quantidade no Estoque</th>
                </tr>
                <?php while ($brinquedo = mysqli_fetch_assoc($brinquedo)) { ?>
                    <tr>
                        <td><?php echo $brinquedo["id"] ?></td>
                        <td><?php echo $brinquedo["nome"] ?></td>
                        <td><?php echo $brinquedo["categoria"] ?></td>
                        <td><?php echo $brinquedo["idade_minima"] ?></td>
                        <td><?php echo $brinquedo["preco"]?></td>
                        <td><?php echo $brinquedo["quantidade_estoque"]?></td>
                        <td>
                            <a href="public/editar.php?id=<?php echo $brinquedo["id"] ?>">Editar</a>
                            <a href="public/excluir.php?id=<?php echo $brinquedo["id"] ?>">Excluir</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>

    </main>
    <footer>

    </footer>


</body>

</html>