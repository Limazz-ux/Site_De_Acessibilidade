
<?php
session_start();

// CONEXÃO COM O BANCO DE DADOS
include (conexao/conexao.php);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = trim($_POST["nome"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $experiencia = $_POST["experiencia"] ?? "";
    $util = $_POST["util"] ?? "";
    $sugestoes = trim($_POST["sugestoes"] ?? "");

    if (
        $nome === "" ||
        !filter_var($email, FILTER_VALIDATE_EMAIL) ||
        $experiencia === "" ||
        $util === "" ||
        mb_strlen($nome) > 50 ||
        mb_strlen($email) > 50 ||
        mb_strlen($sugestoes) > 200
    ) {

        $mensagem = "Verifique os dados preenchidos.";
        $tipoMensagem = "erro";

    } else {

        $sql = "INSERT INTO formulario
                (nome, email, experiencia, util, sugestoes)
                VALUES (?, ?, ?, ?, ?)";

        try {

            $stmt = mysqli_prepare($conn, $sql);

            mysqli_stmt_bind_param(
                $stmt,
                "sssss",
                $nome,
                $email,
                $experiencia,
                $util,
                $sugestoes
            );

            if (mysqli_stmt_execute($stmt)) {

                $mensagem = "Formulário enviado com sucesso!";
                $tipoMensagem = "sucesso";

            } else {

                $mensagem = "Erro ao salvar o formulário.";
                $tipoMensagem = "erro";
            }

            mysqli_stmt_close($stmt);

        } catch (mysqli_sql_exception $e) {

            error_log($e->getMessage());

            $mensagem = "Erro ao salvar o formulário.";
            $tipoMensagem = "erro";
        }
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Formulário | Dislexia+</title>

    <!-- CSS -->
    <link rel="stylesheet" href="style/style.css?v=3">

    <!-- JAVASCRIPT -->
    <script src="js/script.js?v=3" defer></script>

</head>

<body>

    <!-- ==========================
         CABEÇALHO
    ========================== -->

    <header class="cabecalho">

        <a href="acessibilidade.php" class="logo">
            Dislexia+
        </a>

        <nav aria-label="Menu principal">

            <a href="acessibilidade.php">
                Início
            </a>

            <a href="acessibilidade.php#recursos">
                Recursos
            </a>

            <button
                type="button"
                class="botao-menu"
                onclick="abrirPainel()">
                ⚙ Acessibilidade
            </button>

        </nav>

    </header>

    <!-- ==========================
         CONTEÚDO
    ========================== -->

    <main id="conteudo">

        <section class="secao formulario-secao">

            <div class="formulario-container">

                <span class="tag">
                    Sua opinião é importante
                </span>

                <h1>
                    Formulário de acessibilidade
                </h1>

                <p>
                    Compartilhe sua experiência com
                    leitura digital e recursos
                    de acessibilidade.
                </p>

                <!-- ==========================
                     FORMULÁRIO
                ========================== -->

                <form
                    id="formularioPesquisa"
                    method="POST"
                    action="formulario.php">

                    <!-- NOME -->
                    <div class="campo">

                        <label for="nome">
                            Nome
                        </label>

                        <input
                            type="text"
                            id="nome"
                            name="nome"
                            maxlength="50"
                            placeholder="Digite seu nome"
                            autocomplete="name"
                            required>

                    </div>

                    <!-- EMAIL -->
                    <div class="campo">

                        <label for="email">
                            E-mail
                        </label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            maxlength="50"
                            placeholder="exemplo@email.com"
                            autocomplete="email"
                            required>

                    </div>

                    <!-- EXPERIÊNCIA -->
                    <div class="campo">

                        <label for="experiencia">
                            Como você avalia sua experiência
                            com leitura digital?
                        </label>

                        <select
                            id="experiencia"
                            name="experiencia"
                            required>

                            <option value="">
                                Selecione uma opção
                            </option>

                            <option value="muito-boa">
                                Muito boa
                            </option>

                            <option value="boa">
                                Boa
                            </option>

                            <option value="regular">
                                Regular
                            </option>

                            <option value="dificil">
                                Tenho dificuldades
                            </option>

                        </select>

                    </div>

                    <!-- RECURSO PREFERIDO -->
                    <div class="campo">

                        <label for="util">
                            Qual recurso você considera
                            mais útil?
                        </label>

                        <select
                            id="util"
                            name="util"
                            required>

                            <option value="">
                                Selecione um recurso
                            </option>

                            <option value="texto">
                                Ajuste do texto
                            </option>

                            <option value="espacamento">
                                Espaçamento
                            </option>

                            <option value="fonte">
                                Alteração de fonte
                            </option>

                            <option value="fundo">
                                Fundo confortável
                            </option>

                            <option value="contraste">
                                Alto contraste
                            </option>

                            <option value="guia">
                                Guia de leitura
                            </option>

                            <option value="voz">
                                Leitura em voz alta
                            </option>

                        </select>

                    </div>

                    <!-- SUGESTÕES -->
                    <div class="campo">

                        <label for="sugestoes">
                            Sugestões ou comentários
                        </label>

                        <textarea
                            id="sugestoes"
                            name="sugestoes"
                            rows="5"
                            maxlength="200"
                            placeholder="Escreva sua opinião..."></textarea>

                    </div>

                    <!-- BOTÃO ENVIAR -->
                    <button
                        type="submit"
                        class="botao-principal">
                        Enviar formulário
                    </button>

                    <!-- MENSAGEM -->

                    <?php if ($mensagem !== ""): ?>

                        <p
                            class="mensagem <?php echo $tipoMensagem; ?>"
                            role="status">

                            <?php
                                echo htmlspecialchars(
                                    $mensagem,
                                    ENT_QUOTES,
                                    "UTF-8"
                                );
                            ?>

                        </p>

                    <?php endif; ?>

                </form>

            </div>

        </section>

    </main>

    <!-- ==========================
         PAINEL DINÂMICO
    ========================== -->

    <div id="areaPainel"></div>

    <!-- GUIA DE LEITURA -->
    <div id="guia" aria-hidden="true"></div>

    <!-- ==========================
         RODAPÉ
    ========================== -->

    <footer>

        <h3>Dislexia+</h3>

        <p>
            Informação, inclusão e acessibilidade.
        </p>

    </footer>

</body>
</html>

