<?php
include "config/conexao.php";

$sql = "SELECT * FROM brinquedos";
$resultado = $conn->query($sql);
?>