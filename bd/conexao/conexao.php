<?php

    $host = "localhost";
    $usuario = "root";
    $senha = "root";
    $banco = "site_dislexia";

    $conn = new mysqli(
        $host,
        $usuario,
        $senha,
        $banco
    );


    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados.");
    } else {
        echo "Conexão Realizada com Sucesso!";
    }

    $conn->set_charset("utf8mb4");
?>