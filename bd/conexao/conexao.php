<?php
$host = "localhost";
$usuario = "root";
$senha = "root";
$banco = "site_dislexia";

$conn = mysqli_connect($host, $usuario, $senha, $banco);

if(!$conn) {
    die("Erro ao conectar com o banco de dados");
}  else {
    echo "Conexão Realizada com Sucesso!";
}
?>