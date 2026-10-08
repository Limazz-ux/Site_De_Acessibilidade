
<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Dislexia+ | Acessibilidade</title>

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

            <a href="#sobre">
                Sobre
            </a>

            <a href="#recursos">
                Recursos
            </a>

            <a href="formulario.php">
                Formulário
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
         CONTEÚDO PRINCIPAL
    ========================== -->

    <main id="conteudo">

        <!-- INÍCIO -->
        <section class="inicio">

            <div class="inicio-conteudo">

                <span class="tag">
                    Acessibilidade para todos
                </span>

                <h1>
                    Um jeito mais
                    <strong>acessível</strong>
                    de aprender.
                </h1>

                <p>
                    Conheça a dislexia e descubra
                    recursos que podem tornar a leitura
                    mais confortável, inclusiva
                    e acessível.
                </p>

                <button
                    type="button"
                    class="botao-principal"
                    onclick="abrirPainel()">
                    ⚙ Personalizar leitura
                </button>

            </div>

        </section>

        <!-- ==========================
             SOBRE
        ========================== -->

        <section id="sobre" class="secao">

            <h2>O que é dislexia?</h2>

            <p>
                A dislexia é uma condição específica
                de aprendizagem que afeta principalmente
                habilidades relacionadas à leitura
                e à escrita.
            </p>

            <p>
                Ela não determina a inteligência
                ou a capacidade de aprender.
                Com estratégias e recursos adequados,
                é possível tornar a aprendizagem
                mais acessível.
            </p>

        </section>

        <!-- ==========================
             RECURSOS
        ========================== -->

        <section id="recursos" class="secao recursos">

            <h2>
                Recursos para auxiliar a leitura
            </h2>

            <p>
                Conheça ferramentas que permitem
                personalizar a apresentação dos textos
                conforme suas preferências.
            </p>

            <div class="cards">

                <!-- CARD 1 -->
                <article class="card">

                    <h3>🔎 Texto ajustável</h3>

                    <p>
                        Aumente ou diminua o tamanho
                        das letras gradualmente.
                    </p>

                </article>

                <!-- CARD 2 -->
                <article class="card">

                    <h3>↔ Espaçamento</h3>

                    <p>
                        Ajuste o espaço entre letras
                        e linhas para tornar a leitura
                        mais confortável.
                    </p>

                </article>

                <!-- CARD 3 -->
                <article class="card">

                    <h3>Aa Fonte</h3>

                    <p>
                        Utilize uma fonte alternativa
                        para personalizar a leitura.
                    </p>

                </article>

                <!-- CARD 4 -->
                <article class="card">

                    <h3>☀ Fundo confortável</h3>

                    <p>
                        Altere a tonalidade do fundo
                        para uma cor mais agradável.
                    </p>

                </article>

                <!-- CARD 5 -->
                <article class="card">

                    <h3>━ Guia de leitura</h3>

                    <p>
                        Utilize uma linha horizontal
                        que acompanha o movimento
                        do mouse.
                    </p>

                </article>

                <!-- CARD 6 -->
                <article class="card">

                    <h3>🔊 Leitura em voz alta</h3>

                    <p>
                        Ouça o conteúdo da página
                        utilizando os recursos
                        de voz do navegador.
                    </p>

                </article>

            </div>

        </section>

        <!-- ==========================
             FORMULÁRIO
        ========================== -->

        <section class="secao chamada-formulario">

            <h2>
                Quer compartilhar sua experiência?
            </h2>

            <p>
                Acesse nosso formulário e compartilhe
                suas percepções sobre acessibilidade
                e leitura digital.
            </p>

            <a href="formulario.php"
               class="botao-link">
                Acessar formulário
            </a>

        </section>

        <!-- ==========================
             INFORMAÇÃO FINAL
        ========================== -->

        <section class="informacao">

            <h2>
                Cada pessoa lê de uma maneira.
            </h2>

            <p>
                Utilize os recursos de acessibilidade
                para personalizar sua experiência.
            </p>

            <button
                type="button"
                class="botao-principal"
                onclick="abrirPainel()">
                ⚙ Personalizar leitura
            </button>

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
