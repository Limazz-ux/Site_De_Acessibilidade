<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dislexia+ | Acessibilidade e Inclusão</title>

    <meta
        name="description"
        content="Informações e recursos de acessibilidade para pessoas com dislexia."
    >

    <link rel="stylesheet" href="./style/style.css">
</head>

<body>

    <!-- ================= HEADER ================= -->

    <header class="header">

        <nav class="navbar">

            <a href="index.html" class="logo">
                <span class="logo-icon">D</span>
                <span>Dislexia<span class="logo-plus">+</span></span>
            </a>

            <div class="nav-links">
                <a href="#sobre">Sobre</a>
                <a href="#recursos">Recursos</a>
                <a href="#curiosidades">Curiosidades</a>

                <a href="login.php" class="btn-conta">
                    
                    Minha conta
                </a>
            </div>

            <button
                class="menu-mobile"
                aria-label="Abrir menu"
                onclick="alternarMenu()">
                ☰
            </button>

        </nav>


        <!-- HERO -->

        <div class="hero">

            <div class="hero-text">

                <span class="tag">
                    ♡ Acessibilidade para todos
                </span>

                <h1>
                    Um jeito mais
                    <span>acessível</span>
                    de aprender.
                </h1>

                <p>
                    Conheça a dislexia, descubra recursos de acessibilidade
                    e encontre ferramentas que podem tornar a leitura mais
                    confortável e inclusiva.
                </p>

                <div class="hero-buttons">

                    <a href="#sobre" class="btn-primary">
                        Conhecer a dislexia
                    </a>

                    <button
                        class="btn-secondary"
                        onclick="abrirPainel()">
                        ⚙ Acessibilidade
                    </button>

                </div>

            </div>


            <div class="hero-card">

                <div class="hero-card-icon">
                    Aa
                </div>

                <h3>
                    A leitura pode ser diferente.
                </h3>

                <p>
                    Isso não significa que a capacidade de aprender seja
                    diferente.
                </p>

                <div class="hero-card-footer">
                    <span>♧</span>
                    Inclusão • Educação • Acessibilidade
                </div>

            </div>

        </div>

    </header>


    <!-- ================= PAINEL ================= -->

    <aside
        id="painelAcessibilidade"
        class="painel-acessibilidade"
        aria-label="Painel de acessibilidade">

        <div class="painel-cabecalho">

            <div>
                <span class="painel-tag">ACESSIBILIDADE</span>
                <h2>Personalize sua leitura</h2>
            </div>

            <button
                id="fecharPainel"
                onclick="fecharPainel()"
                aria-label="Fechar painel">
                ×
            </button>

        </div>


        <p class="painel-descricao">
            Escolha as opções que deixam a leitura mais confortável para você.
        </p>


        <div class="acessibilidade-grupo">

            <h3>Texto</h3>

            <button onclick="aumentarTexto()">
                <span>🔎</span>
                Aumentar texto
            </button>

            <button onclick="diminuirTexto()">
                <span>🔍</span>
                Diminuir texto
            </button>

            <button onclick="alternarEspacamento()">
                <span>↔</span>
                Espaçamento entre letras
            </button>

            <button onclick="alternarLinhas()">
                <span>☷</span>
                Aumentar espaço entre linhas
            </button>

        </div>


        <div class="acessibilidade-grupo">

            <h3>Visual</h3>

            <button onclick="altoContraste()">
                <span>◐</span>
                Alto contraste
            </button>

            <button onclick="modoCreme()">
                <span>◯</span>
                Fundo confortável
            </button>

            <button onclick="alternarFonte()">
                <span>Aa</span>
                Fonte para dislexia
            </button>

            <button onclick="alternarGuia()">
                <span>━</span>
                Guia de leitura
            </button>

        </div>


        <div class="acessibilidade-grupo">

            <h3>Leitura</h3>

            <button onclick="lerPagina()">
                <span>🔊</span>
                Ler página
            </button>

            <button onclick="pararLeitura()">
                <span>■</span>
                Parar leitura
            </button>

        </div>


        <button
            class="btn-reset"
            onclick="resetarAcessibilidade()">
            ↻ Restaurar configurações
        </button>

    </aside>


    <!-- BOTÃO FLUTUANTE -->

    <button
        id="btnAcessibilidade"
        onclick="abrirPainel()"
        aria-label="Abrir painel de acessibilidade">

        ⚙
        <span>Acessibilidade</span>

    </button>


    <!-- ================= MAIN ================= -->

    <main id="conteudo">


        <!-- SOBRE -->

        <section id="sobre" class="section">

            <div class="section-heading">

                <span class="section-tag">
                    ENTENDA
                </span>

                <h2>
                    O que é <span>dislexia?</span>
                </h2>

                <p>
                    A dislexia é uma condição relacionada à forma como o
                    cérebro processa a linguagem escrita. Ela não está
                    relacionada à inteligência ou à falta de escolarização.
                </p>

            </div>


            <div class="info-grid">

                <article class="info-card">

                    <div class="card-icon blue">
                        Aa
                    </div>

                    <h3>Processamento da linguagem</h3>

                    <p>
                        Pode haver dificuldade na associação entre letras,
                        sons e palavras durante a leitura.
                    </p>

                </article>


                <article class="info-card">

                    <div class="card-icon purple">
                        ✓
                    </div>

                    <h3>Aprendizagem diferente</h3>

                    <p>
                        Pessoas com dislexia podem desenvolver estratégias
                        próprias para aprender e compreender conteúdos.
                    </p>

                </article>


                <article class="info-card">

                    <div class="card-icon green">
                        ♡
                    </div>

                    <h3>Não define a inteligência</h3>

                    <p>
                        A dislexia não determina a capacidade intelectual
                        de uma pessoa.
                    </p>

                </article>

            </div>


            <div class="destaque">

                <div class="destaque-icon">
                    !
                </div>

                <div>
                    <h3>Importante lembrar</h3>

                    <p>
                        Cada pessoa pode experimentar a dislexia de uma
                        maneira diferente. Recursos de acessibilidade podem
                        ajudar a tornar a leitura mais confortável.
                    </p>
                </div>

            </div>

        </section>


        <!-- RECURSOS -->

        <section id="recursos" class="section section-recursos">

            <div class="section-heading">

                <span class="section-tag">
                    ACESSIBILIDADE
                </span>

                <h2>
                    Recursos que podem
                    <span>ajudar na leitura</span>
                </h2>

                <p>
                    Existem diversas ferramentas que podem tornar conteúdos
                    digitais mais acessíveis.
                </p>

            </div>


            <div class="recursos-grid">


                <article class="recurso-card">

                    <div class="recurso-number">
                        01
                    </div>

                    <div class="recurso-icon">
                        Aa
                    </div>

                    <h3>Fontes adaptadas</h3>

                    <p>
                        Fontes sem serifa e fontes desenvolvidas para
                        acessibilidade podem facilitar a leitura para algumas
                        pessoas.
                    </p>

                </article>


                <article class="recurso-card">

                    <div class="recurso-number">
                        02
                    </div>

                    <div class="recurso-icon">
                        🔊
                    </div>

                    <h3>Texto para voz</h3>

                    <p>
                        Permite ouvir o conteúdo em vez de depender somente
                        da leitura visual.
                    </p>

                </article>


                <article class="recurso-card">

                    <div class="recurso-number">
                        03
                    </div>

                    <div class="recurso-icon">
                        ↔
                    </div>

                    <h3>Espaçamento</h3>

                    <p>
                        Ajustar o espaçamento entre letras, palavras e linhas
                        pode deixar o texto visualmente mais organizado.
                    </p>

                </article>


                <article class="recurso-card">

                    <div class="recurso-number">
                        04
                    </div>

                    <div class="recurso-icon">
                        ◐
                    </div>

                    <h3>Cores confortáveis</h3>

                    <p>
                        Diferentes combinações de cores e contraste podem
                        proporcionar uma experiência visual mais confortável.
                    </p>

                </article>


                <article class="recurso-card">

                    <div class="recurso-number">
                        05
                    </div>

                    <div class="recurso-icon">
                        ━
                    </div>

                    <h3>Guia de leitura</h3>

                    <p>
                        Uma linha de acompanhamento pode ajudar a manter
                        o foco durante a leitura.
                    </p>

                </article>


                <article class="recurso-card">

                    <div class="recurso-number">
                        06
                    </div>

                    <div class="recurso-icon">
                        ✓
                    </div>

                    <h3>Modo de leitura</h3>

                    <p>
                        Interfaces mais limpas, com menos distrações,
                        podem facilitar a concentração.
                    </p>

                </article>


                <article class="recurso-card">

                    <div class="recurso-number">
                        07
                    </div>

                    <div class="recurso-icon">
                        📖
                    </div>

                    <h3>Glossário visual</h3>

                    <p>
                        Explicações simples, exemplos e elementos visuais
                        podem auxiliar na compreensão de palavras.
                    </p>

                </article>


                <article class="recurso-card">

                    <div class="recurso-number">
                        08
                    </div>

                    <div class="recurso-icon">
                        ✎
                    </div>

                    <h3>Corretor inteligente</h3>

                    <p>
                        Ferramentas de escrita podem ajudar a identificar
                        erros ortográficos e sugerir correções.
                    </p>

                </article>


                <article class="recurso-card">

                    <div class="recurso-number">
                        09
                    </div>

                    <div class="recurso-icon">
                        🧠
                    </div>

                    <h3>Personalização</h3>

                    <p>
                        Cada usuário pode precisar de uma combinação
                        diferente de recursos de acessibilidade.
                    </p>

                </article>

            </div>

        </section>


        <!-- CURIOSIDADES -->

        <section id="curiosidades" class="section">

            <div class="section-heading">

                <span class="section-tag">
                    VOCÊ SABIA?
                </span>

                <h2>
                    Curiosidades sobre
                    <span>dislexia</span>
                </h2>

            </div>


            <div class="curiosidades-grid">

                <article class="curiosidade-card">

                    <div class="curiosidade-imagem imagem-1">
                        <span>01</span>
                    </div>

                    <div class="curiosidade-conteudo">

                        <h3>Formas diferentes de aprender</h3>

                        <p>
                            Pessoas podem apresentar diferentes formas
                            de perceber e processar informações escritas.
                        </p>

                    </div>

                </article>


                <article class="curiosidade-card">

                    <div class="curiosidade-imagem imagem-2">
                        <span>02</span>
                    </div>

                    <div class="curiosidade-conteudo">

                        <h3>Acessibilidade digital</h3>

                        <p>
                            Recursos digitais podem oferecer alternativas
                            para tornar o acesso à informação mais inclusivo.
                        </p>

                    </div>

                </article>


                <article class="curiosidade-card">

                    <div class="curiosidade-imagem imagem-3">
                        <span>03</span>
                    </div>

                    <div class="curiosidade-conteudo">

                        <h3>Personalização importa</h3>

                        <p>
                            Nem todo recurso funciona da mesma maneira
                            para todas as pessoas.
                        </p>

                    </div>

                </article>

            </div>

        </section>


        <!-- CTA -->

        <section class="cta">

            <div>

                <span class="section-tag">
                    DISLEXIA+
                </span>

                <h2>
                    Acessibilidade começa
                    com compreensão.
                </h2>

                <p>
                    Explore os recursos disponíveis e personalize sua
                    experiência de leitura.
                </p>

            </div>

            <button
                onclick="abrirPainel()"
                class="btn-primary btn-cta">
                Personalizar leitura →
            </button>

        </section>

    </main>


    <!-- ================= FOOTER ================= -->

    <footer>

        <div class="footer-content">

            <div>

                <a href="index.html" class="logo footer-logo">
                    <span class="logo-icon">D</span>
                    <span>Dislexia<span class="logo-plus">+</span></span>
                </a>

                <p>
                    Informação, inclusão e acessibilidade.
                </p>

            </div>

            <div class="footer-links">

                <a href="#sobre">Sobre</a>
                <a href="#recursos">Recursos</a>
                <a href="#curiosidades">Curiosidades</a>
                <a href="login.php">Minha conta</a>

            </div>

        </div>

        <div class="footer-bottom">
            © 2026 Dislexia+ • Projeto de acessibilidade
        </div>

    </footer>


    <!-- GUIA DE LEITURA -->

    <div id="guiaLeitura"></div>


    <script src="./js/script.js"></script>

</body>

</html>
