<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dislexia+</title>

    <link rel="stylesheet" href="style/style.css">
</head>

<body>

    <!-- MENU -->

    <header>

        <h2 class="logo">Dislexia+</h2>

        <nav>
            <a href="#sobre">Sobre</a>
            <a href="#recursos">Recursos</a>
            <a href="painel.php">Painel</a>
        </nav>

    </header>


    <!-- CONTEÚDO PRINCIPAL -->

    <main id="conteudo">

        <!-- INÍCIO -->

        <section class="inicio">

            <div>

                <span class="tag">
                    Acessibilidade para todos
                </span>

                <h1>
                    Um jeito mais
                    <strong>acessível</strong>
                    de aprender.
                </h1>

                <p>
                    Conheça a dislexia e descubra recursos
                    que podem tornar a leitura mais
                    confortável e acessível.
                </p>

                <button onclick="abrirPainel()">
                    ⚙ Acessibilidade
                </button>

            </div>

        </section>


        <!-- SOBRE -->

        <section id="sobre">

            <h2>O que é dislexia?</h2>

            <p>
                A dislexia está relacionada à forma como
                uma pessoa processa a linguagem escrita.
                Ela não determina sua inteligência ou
                capacidade de aprender.
            </p>

        </section>


        <!-- RECURSOS -->

        <section id="recursos">

            <h2>Recursos para auxiliar a leitura</h2>

            <p>
                Algumas adaptações podem tornar a leitura
                digital mais confortável.
            </p>


            <div class="cards">

                <div class="card">

                    <h3>🔎 Texto ajustável</h3>

                    <p>
                        Permite aumentar ou diminuir
                        o tamanho das letras.
                    </p>

                </div>


                <div class="card">

                    <h3>↔ Espaçamento</h3>

                    <p>
                        Permite aumentar o espaço entre
                        letras e linhas.
                    </p>

                </div>


                <div class="card">

                    <h3>Aa Fonte</h3>

                    <p>
                        Permite utilizar uma fonte
                        mais simples para leitura.
                    </p>

                </div>


                <div class="card">

                    <h3>☀ Fundo confortável</h3>

                    <p>
                        Altera o fundo da página para
                        uma cor mais confortável.
                    </p>

                </div>


                <div class="card">

                    <h3>━ Guia de leitura</h3>

                    <p>
                        Uma linha acompanha o usuário
                        durante a leitura.
                    </p>

                </div>


                <div class="card">

                    <h3>🔊 Texto para voz</h3>

                    <p>
                        O navegador pode ler o conteúdo
                        da página em voz alta.
                    </p>

                </div>

            </div>

        </section>


        <!-- FINAL -->

        <section class="informacao">

            <h2>
                Cada pessoa lê de uma maneira.
            </h2>

            <p>
                Utilize os recursos de acessibilidade
                para personalizar sua experiência.
            </p>

            <button onclick="abrirPainel()">
                ⚙ Personalizar leitura
            </button>

        </section>

    </main>


    <!--
        O painel.php será colocado
        dentro desta DIV.
    -->

    <div id="areaPainel"></div>


    <!-- GUIA DE LEITURA -->

    <div id="guia"></div>


    <!-- RODAPÉ -->

    <footer>

        <h3>Dislexia+</h3>

        <p>
            Informação, inclusão e acessibilidade.
        </p>

    </footer>


    <!-- JAVASCRIPT -->

    <script src="js/script.js"></script>

</body>

</html>