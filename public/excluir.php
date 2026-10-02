<?php

include "config/conexao.php";

$id = $_GET["id"];

$sql = "DELETE FROM brinquedos WHERE id = ?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    header("Location: index.php");
    exit;
} else {
    echo "Erro ao excluir: " . $stmt->error;
}

?>