<?php

include "../infra/conexao.php";

$id = $_GET["id"];

$sql = "SELECT * FROM brinquedos WHERE id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

$resultado = $stmt->get_result();
$brinquedo = $resultado->fetch_assoc();
if (!$brinquedo) {
    die("Brinquedo não encontrado.");
}

?>
