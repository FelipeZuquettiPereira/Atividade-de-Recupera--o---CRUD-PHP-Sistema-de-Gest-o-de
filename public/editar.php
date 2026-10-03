<?php

include "../infra/conexao.php";

$id = $_GET["id"];
$sql = "SELECT * FROM brinquedo WHERE id = $id";
$resultado = mysqli_query($conexao, $sql );

$result = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="en">

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
        <h2>Editando o Brinquedo <?php echo $result["nome"]?>!</h2>
        <form action="atualizar.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $result["id"]?>" required>

            <label for="nome">Nome:</label>
            <input type="text" name="nome" value="<?php echo $result["nome"]?>">
            <br>
            <label for="categoria">Categoria:</label>
            <select name="categoria" id="categoria" required>
                <option value="<?php echo $result["categoria"]?>"><?php echo $result["categoria"]?></option>
                <option value="imaginario">Imaginário</option>
                <option value="educativo">Educativo</option>
                <option value="explosivo">Explosivo</option>
            </select>
            <br>
            <label for="idade_minima">Idade mínima:</label>
            <select name="idade_minima" id="idade_minima" required>
                <option value="<?php echo $result["idade_minima"]?>">+<?php echo $result["idade_minima"]?> anos</option>
                <option value="2">+2 anos</option>
                <option value="3">+3 anos</option>
                <option value="4">+4 anos</option>
                <option value="5">+5 anos</option>
                <option value="6">+6 anos</option>
                <option value="7">+7 anos</option>
            </select>
            <br>
            <label for="preco">Preço:</label>
            <input type="number" id="preco" name="preco" value="<?php echo $result["preco"]?>" required>
            <br>

            <label for="quantidade_estoque">Quantidade no Estoque:</label>
            <input type="number" id="quantidade_estoque" name="quantidade_estoque" value="<?php echo $result["quantidade_estoque"]?>" required>
            <br>
            <button type="submit">Atualizar</button>
        </form>

    </main>
    <footer>

    </footer>


</body>

</html>