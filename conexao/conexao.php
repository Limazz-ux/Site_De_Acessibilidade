
<?php
// Endereço do servidor do banco
$host = "localhost";
// Usuário do banco de dados
$usuario = "root";
// Senha do banco (vazia no XAMPP)
$senha = "";
// Nome do banco criado
$banco = "site_dislexia";
// Criando a conexão com o MySQL
$conn = mysqli_connect($host, $usuario, $senha, $banco);
// Verificando se a conexão funcionou
if (!$conn) {
die("Erro ao conectar com o banco de dados");
}

?>
