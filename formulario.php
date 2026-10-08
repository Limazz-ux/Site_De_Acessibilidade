
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

                <form id="formularioPesquisa" method="post" action="processar_formulario.php">

                    <!-- NOME -->
                    <div class="campo">

                        <label for="nome">
                            Nome
                        </label>

                        <input
                            type="text"
                            id="nome"
                            name="nome"
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

                        <label for="recursoPreferido">
                            Qual recurso você considera
                            mais útil?
                        </label>

                        <select
                            id="recursoPreferido"
                            name="recursoPreferido"
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
                            placeholder="Escreva sua opinião..."></textarea>

                    </div>

                    <!-- BOTÃO ENVIAR -->
                    <button
                        type="submit"
                        class="botao-principal">
                        Enviar formulário
                    </button>

                    <!-- MENSAGEM -->
                    <p id="mensagemFormulario"
                       role="status"
                       aria-live="polite"></p>

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

