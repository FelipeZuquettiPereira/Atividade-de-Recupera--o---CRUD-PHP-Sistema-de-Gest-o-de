<?php

include "../infra/conexao.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $id = (int)($_POST["id"] ?? 0);
    $nome = $_POST["nome"] ?? "";
    $categoria = $_POST["categoria"] ?? "";
    $idade_minima = (int)($_POST["idade_minima"] ?? 0);
    $preco = (float)($_POST["preco"] ?? 0);
    $quantidade_estoque = (int)($_POST["quantidade_estoque"] ?? 0);

    if ($id > 0) {
        $sql = "UPDATE brinquedo SET nome = ?, categoria = ?, idade_minima = ?, preco = ?, quantidade_estoque = ? WHERE id = ?";
        $stmt = mysqli_prepare($conexao, $sql);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ssidii", $nome, $categoria, $idade_minima, $preco, $quantidade_estoque, $id);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }
    }
}

header("Location: ../index.php");
exit();
?>