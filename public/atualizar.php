<?php

include "../infra/conexao.php";

$id = $_POST["id"];
$nome = $_POST["nome"];
$categoria = $_POST["categoria"];
$idade_minima = $_POST["idade_minima"];
$preco = $_POST["preco"];
$quantidade_estoque - $_POST["quantidade_estoque"];

$sql = "UPDATE brinquedo SET nome='$nome', categoria='$categoria', idade_minima='$idade_minima', preco='$preco' , quantidade_estoque='$quantidade_estoque' WHERE id = '$id'";

mysqli_query($conexao, $sql);
header("Location: ../index.php");