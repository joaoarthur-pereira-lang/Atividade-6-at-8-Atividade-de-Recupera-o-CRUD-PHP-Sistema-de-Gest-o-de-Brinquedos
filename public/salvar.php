<?php

include "config/conexao.php";

$nome = $_POST["nome"];
$categoria = $_POST["categoria"];
$faixa_etaria = $_POST["faixa_etaria"];
$preco = $_POST["preco"];
$quantidade = $_POST["quantidade"];

if ($nome == "" || $categoria == "" || $faixa_etaria == "") {
    die("Preencha todos os campos.");
}

if ($preco < 0 || $quantidade < 0) {
    die("Preço e quantidade não podem ser negativos.");
}

$sql = "INSERT INTO brinquedos 
        (nome, categoria, faixa_etaria, preco, quantidade)
        VALUES (?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param(
    "sssdi",
    $nome,
    $categoria,
    $faixa_etaria,
    $preco,
    $quantidade
);

if ($stmt->execute()) {
    header("Location: index.php");
    exit();
} else {
    die("Erro ao cadastrar brinquedo.");
}

?>