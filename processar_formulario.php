<?php
session_start();

require __DIR__ . '/conexao/conexao.php';

header('Content-Type: text/plain; charset=UTF-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo 'Método não permitido.';
    exit;
}

$nome = trim($_POST['nome'] ?? '');
$email = trim($_POST['email'] ?? '');
$experiencia = $_POST['experiencia'] ?? '';
$util = $_POST['util'] ?? '';
$sugestoes = trim($_POST['sugestoes'] ?? '');

if (
    $nome === '' ||
    !filter_var($email, FILTER_VALIDATE_EMAIL) ||
    $experiencia === '' ||
    $util === '' ||
    mb_strlen($nome) > 50 ||
    mb_strlen($email) > 50 ||
    mb_strlen($sugestoes) > 200
) {
    echo 'Verifique os dados preenchidos.';
    mysqli_close($conn);
    exit;
}

$sql = 'INSERT INTO formulario (nome, email, experiencia, util, sugestoes) VALUES (?, ?, ?, ?, ?)';

$stmt = mysqli_prepare($conn, $sql);

if ($stmt === false) {
    echo 'Erro ao salvar o formulário.';
    mysqli_close($conn);
    exit;
}

mysqli_stmt_bind_param($stmt, 'sssss', $nome, $email, $experiencia, $util, $sugestoes);

if (mysqli_stmt_execute($stmt)) {
    echo 'Formulário enviado com sucesso!';
} else {
    echo 'Erro ao salvar o formulário.';
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
