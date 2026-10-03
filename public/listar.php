<?php

include "../infra/conexao.php";
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
        <div>
            <h2>Brinquedos Cadastrados</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Categoria</th>
                        <th>Idade mínima</th>
                        <th>Preço</th>
                        <th>Quantidade no Estoque</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($brinquedo = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?php echo htmlspecialchars($brinquedo["id"]); ?></td>
                            <td><?php echo htmlspecialchars($brinquedo["nome"]); ?></td>
                            <td><?php echo htmlspecialchars($brinquedo["categoria"]); ?></td>
                            <td><?php echo htmlspecialchars($brinquedo["idade_minima"]); ?> anos</td>
                            <td>R$ <?php echo number_format($brinquedo["preco"], 2, ',', '.'); ?></td>
                            <td><?php echo htmlspecialchars($brinquedo["quantidade_estoque"]); ?></td>
                            <td>
                                <a href="public/editar.php?id=<?php echo $brinquedo["id"]; ?>">Editar</a>
                                <a href="public/excluir.php?id=<?php echo $brinquedo["id"]; ?>">Excluir</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

            <a href="../index.php"><button>Voltar</button></a>

        </div>
    </main>
    <footer></footer>
</body>

</html>