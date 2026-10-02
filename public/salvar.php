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