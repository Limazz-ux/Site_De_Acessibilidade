
<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "site_dislexia";

$conn = mysqli_connect(
    $host,
    $usuario,
    $senha,
    $banco
);

if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8mb4");

?>
