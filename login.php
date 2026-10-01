<?php

session_start();

/*
|--------------------------------------------------------------------------
| CONFIGURAÇÃO DO BANCO
|--------------------------------------------------------------------------
|
| Depois você pode mover estas informações para um arquivo separado,
| por exemplo: config/database.php
|
*/

$host = "localhost";
$dbname = "dislexia";
$user = "root";
$password = "";

$erro = "";
$sucesso = "";


/*
|--------------------------------------------------------------------------
| CONEXÃO COM O BANCO
|--------------------------------------------------------------------------
*/

try {

    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $user,
        $password,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ]
    );

} catch (PDOException $e) {

    /*
     * Em produção, não mostre $e->getMessage()
     * diretamente para o usuário.
     */

    $erro = "Não foi possível conectar ao sistema. Tente novamente mais tarde.";
}


/*
|--------------------------------------------------------------------------
| LOGIN
|--------------------------------------------------------------------------
*/

if ($_SERVER["REQUEST_METHOD"] === "POST" && empty($erro)) {

    $email = trim($_POST["email"] ?? "");
    $senha = $_POST["senha"] ?? "";
    $lembrar = isset($_POST["lembrar"]);


    /*
     * Validação básica
     */

    if (empty($email) || empty($senha)) {

        $erro = "Preencha seu e-mail e sua senha.";

    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $erro = "Digite um endereço de e-mail válido.";

    } else {

        try {

            /*
             * Busca o usuário pelo e-mail.
             *
             * O "?" impede SQL Injection porque
             * o valor é enviado separadamente.
             */

            $sql = "
                SELECT
                    id,
                    nome,
                    email,
                    senha
                FROM usuarios
                WHERE email = ?
                LIMIT 1
            ";

            $stmt = $pdo->prepare($sql);

            $stmt->execute([$email]);

            $usuario = $stmt->fetch();


            /*
             * Verifica se o usuário existe
             * e se a senha corresponde ao hash
             * armazenado no banco.
             */

            if ($usuario && password_verify($senha, $usuario["senha"])) {

                /*
                 * Regenera o ID da sessão para
                 * evitar session fixation.
                 */

                session_regenerate_id(true);


                /*
                 * Guarda somente informações necessárias
                 * na sessão.
                 */

                $_SESSION["usuario_id"] = $usuario["id"];
                $_SESSION["usuario_nome"] = $usuario["nome"];
                $_SESSION["usuario_email"] = $usuario["email"];
                $_SESSION["logado"] = true;


                /*
                 * Se futuramente você implementar
                 * "lembrar de mim", coloque aqui um
                 * sistema de token seguro.
                 *
                 * Não recomendamos guardar a senha
                 * em cookie.
                 */

                if ($lembrar) {

                    /*
                     * Implementar futuramente com:
                     * - token aleatório
                     * - tabela de tokens
                     * - cookie HttpOnly/Secure
                     */

                }


                /*
                 * Login realizado.
                 */

                header("Location: perfil.php");
                exit;


            } else {

                /*
                 * Mensagem propositalmente genérica.
                 *
                 * Assim não informamos se o e-mail
                 * existe ou não no banco.
                 */

                $erro = "E-mail ou senha incorretos.";

            }

        } catch (PDOException $e) {

            $erro = "Ocorreu um erro ao realizar o login.";

        }

    }
}

?>


<!DOCTYPE html>

<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Entrar | Dislexia+</title>


    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        body {

            min-height: 100vh;

            font-family:
                Arial,
                Helvetica,
                sans-serif;

            background:
                radial-gradient(
                    circle at 10% 10%,
                    rgba(74,160,230,.18),
                    transparent 30%
                ),
                linear-gradient(
                    135deg,
                    #0757b8,
                    #1976d2
                );

            display: flex;

            align-items: center;

            justify-content: center;

            padding: 20px;

        }


        .login-wrapper {

            width: 100%;

            max-width: 1050px;

            min-height: 650px;

            display: grid;

            grid-template-columns: 1fr 1fr;

            background: white;

            border-radius: 30px;

            overflow: hidden;

            box-shadow:
                0 30px 80px rgba(0,0,0,.2);

        }


        /* ==============================
           LADO ESQUERDO
        ============================== */

        .login-info {

            position: relative;

            padding: 55px;

            background:
                linear-gradient(
                    145deg,
                    #0757b8,
                    #1988dc
                );

            color: white;

            display: flex;

            flex-direction: column;

            justify-content: space-between;

            overflow: hidden;

        }


        .login-info::before {

            content: "";

            position: absolute;

            width: 300px;

            height: 300px;

            border-radius: 50%;

            background:
                rgba(255,255,255,.08);

            right: -100px;

            top: -80px;

        }


        .login-info::after {

            content: "";

            position: absolute;

            width: 220px;

            height: 220px;

            border-radius: 50%;

            background:
                rgba(255,255,255,.06);

            left: -100px;

            bottom: -70px;

        }


        .logo {

            position: relative;

            z-index: 1;

            display: flex;

            align-items: center;

            gap: 10px;

            font-size: 23px;

            font-weight: 800;

            color: white;

            text-decoration: none;

        }


        .logo-icon {

            width: 42px;

            height: 42px;

            display: grid;

            place-items: center;

            background: white;

            color: #0757b8;

            border-radius: 12px;

        }


        .logo-plus {
            color: #9be7ff;
        }


        .login-info-content {

            position: relative;

            z-index: 1;

        }


        .login-info h1 {

            font-size: 48px;

            line-height: 1.1;

            margin-bottom: 20px;

        }


        .login-info h1 span {

            color: #9be7ff;

        }


        .login-info p {

            max-width: 430px;

            color: rgba(255,255,255,.85);

            font-size: 17px;

            line-height: 1.8;

        }


        .beneficios {

            position: relative;

            z-index: 1;

            display: grid;

            gap: 13px;

        }


        .beneficio {

            display: flex;

            align-items: center;

            gap: 12px;

            color: rgba(255,255,255,.9);

            font-size: 14px;

        }


        .beneficio span {

            width: 30px;

            height: 30px;

            display: grid;

            place-items: center;

            background:
                rgba(255,255,255,.14);

            border-radius: 8px;

        }


        /* ==============================
           FORMULÁRIO
        ============================== */

        .login-form {

            padding: 55px;

            display: flex;

            flex-direction: column;

            justify-content: center;

        }


        .voltar {

            display: inline-flex;

            align-items: center;

            gap: 6px;

            color: #667085;

            font-size: 14px;

            text-decoration: none;

            margin-bottom: 40px;

        }


        .voltar:hover {
            color: #0757b8;
        }


        .login-form h2 {

            font-size: 35px;

            color: #202b3c;

            margin-bottom: 10px;

        }


        .login-form > p {

            color: #667085;

            margin-bottom: 35px;

        }


        /* ==============================
           ERRO
        ============================== */

        .mensagem-erro {

            padding: 13px 15px;

            margin-bottom: 20px;

            border-radius: 10px;

            background: #fff0f0;

            border: 1px solid #ffcaca;

            color: #bd2525;

            font-size: 14px;

        }


        /* ==============================
           CAMPOS
        ============================== */

        .campo {

            margin-bottom: 20px;

        }


        .campo label {

            display: block;

            margin-bottom: 8px;

            color: #344054;

            font-size: 14px;

            font-weight: 700;

        }


        .input-wrapper {

            position: relative;

        }


        .input-wrapper span {

            position: absolute;

            left: 15px;

            top: 50%;

            transform:
                translateY(-50%);

            color: #98a2b3;

        }


        .campo input {

            width: 100%;

            height: 52px;

            border: 1px solid #d9e0e8;

            border-radius: 10px;

            padding:
                0 15px 0 45px;

            font-size: 15px;

            outline: none;

            transition: .2s;

        }


        .campo input:focus {

            border-color: #0876d1;

            box-shadow:
                0 0 0 4px rgba(8,118,209,.1);

        }


        /* ==============================
           OPÇÕES
        ============================== */

        .form-options {

            display: flex;

            justify-content: space-between;

            align-items: center;

            gap: 10px;

            margin-bottom: 25px;

            font-size: 13px;

        }


        .lembrar {

            display: flex;

            align-items: center;

            gap: 7px;

            color: #667085;

        }


        .esqueci {

            color: #0757b8;

            font-weight: 700;

            text-decoration: none;

        }


        /* ==============================
           BOTÃO
        ============================== */

        .btn-login {

            width: 100%;

            height: 54px;

            border: 0;

            border-radius: 11px;

            background:
                linear-gradient(
                    135deg,
                    #0757b8,
                    #1976d2
                );

            color: white;

            font-size: 16px;

            font-weight: 800;

            cursor: pointer;

            transition: .25s;

        }


        .btn-login:hover {

            transform:
                translateY(-2px);

            box-shadow:
                0 10px 25px
                rgba(7,87,184,.25);

        }


        /* ==============================
           CADASTRO
        ============================== */

        .cadastro {

            margin-top: 25px;

            text-align: center;

            color: #667085;

            font-size: 14px;

        }


        .cadastro a {

            color: #0757b8;

            font-weight: 800;

            text-decoration: none;

        }


        /* ==============================
           RESPONSIVO
        ============================== */

        @media (max-width: 800px) {

            .login-wrapper {

                grid-template-columns: 1fr;

                max-width: 520px;

            }

            .login-info {

                display: none;

            }

            .login-form {

                padding: 40px 30px;

            }

        }

    </style>

</head>


<body>


<div class="login-wrapper">


    <!-- ==============================
         LADO INFORMATIVO
    ============================== -->

    <section class="login-info">


        <a
            href="index.html"
            class="logo">

            <span class="logo-icon">
                D
            </span>

            <span>
                Dislexia<span class="logo-plus">+</span>
            </span>

        </a>


        <div class="login-info-content">

            <h1>
                Bem-vindo<br>
                de <span>volta.</span>
            </h1>

            <p>
                Acesse sua conta para continuar utilizando
                os recursos de acessibilidade e personalizar
                sua experiência de leitura.
            </p>

        </div>


        <div class="beneficios">

            <div class="beneficio">

                <span>✓</span>

                Recursos de acessibilidade

            </div>


            <div class="beneficio">

                <span>✓</span>

                Preferências personalizadas

            </div>


            <div class="beneficio">

                <span>✓</span>

                Experiência de leitura inclusiva

            </div>

        </div>


    </section>


    <!-- ==============================
         FORMULÁRIO
    ============================== -->

    <section class="login-form">


        <a
            href="acessibilidade.php" 
            class="voltar">

            ← Voltar para o site

        </a>


        <h2>
            Entrar
        </h2>


        <p>
            Entre com seus dados para acessar sua conta.
        </p>


        <?php if (!empty($erro)): ?>

            <div
                class="mensagem-erro"
                role="alert">

                <?= htmlspecialchars($erro) ?>

            </div>

        <?php endif; ?>


        <form
            action="login.php"
            method="POST"
            autocomplete="on">


            <!-- E-MAIL -->

            <div class="campo">

                <label for="email">
                    E-mail
                </label>

                <div class="input-wrapper">

                    <span>
                        ✉
                    </span>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="seu@email.com"
                        autocomplete="email"
                        maxlength="255"
                        required>

                </div>

            </div>


            <!-- SENHA -->

            <div class="campo">

                <label for="senha">
                    Senha
                </label>

                <div class="input-wrapper">

                    <span>
                        🔒
                    </span>

                    <input
                        type="password"
                        id="senha"
                        name="senha"
                        placeholder="Digite sua senha"
                        autocomplete="current-password"
                        required>

                </div>

            </div>


            <!-- OPÇÕES -->

            <div class="form-options">

                <label class="lembrar">

                    <input
                        type="checkbox"
                        name="lembrar"
                        value="1">

                    Lembrar de mim

                </label>


                <a
                    href="recuperar-senha.php"
                    class="esqueci">

                    Esqueci minha senha

                </a>

            </div>


            <!-- ENTRAR -->

            <button
                type="submit"
                class="btn-login">

                Entrar na minha conta

            </button>


        </form>


        <div class="cadastro">

            Ainda não possui uma conta?

            <a href="cadastro.php">
                Criar conta
            </a>

        </div>


    </section>


</div>


</body>

</html>