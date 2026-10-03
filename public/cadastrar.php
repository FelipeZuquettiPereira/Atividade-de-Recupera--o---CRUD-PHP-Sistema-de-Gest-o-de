<?php

include "../infra/conexao.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

$nome = $_POST["nome"];
$categoria = $_POST["categoria"];
$idade_minima = $_POST["idade_minima"];
$preco = $_POST["preco"];
$quantidade_estoque = $_POST["quantidade_estoque"];

$sql = "INSERT INTO brinquedo (nome, categoria, idade_minima, preco, quantidade_estoque) VALUES (?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($conexao, $sql);

if ($stmt) {
    mysqli_stmt_bind_param($stmt, "ssidi", $nome, $categoria, $idade_minima, $preco, $quantidade_estoque);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

}

header("Location: ../index.php");
exit();
?>