<?php
include "../infra/conexao.php";
$id = $_GET["id"];
$sql = "DELETE FROM brinquedo WHERE id=$id";
mysqli_query($conexao,$sql);
header("Location: listar.php");
?>