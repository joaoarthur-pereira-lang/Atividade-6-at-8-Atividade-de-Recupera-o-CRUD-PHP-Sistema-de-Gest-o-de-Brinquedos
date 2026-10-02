<?php

$conn = mysqli_connect("localhost", "root", "", "brinquedos");

if (!$conn) {
    die("Erro na conexão com o banco de dados.");
}

mysqli_set_charset($conn, "utf8");

?>