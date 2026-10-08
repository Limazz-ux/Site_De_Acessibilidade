
<!-- PAINEL DE ACESSIBILIDADE -->

<div id="painel"
     role="dialog"
     aria-modal="true"
     aria-labelledby="tituloPainel">

    <!-- CABEÇALHO DO PAINEL -->
    <div class="painel-cabecalho">

        <h2 id="tituloPainel">
            Acessibilidade
        </h2>

        <button
            type="button"
            class="fechar"
            onclick="fecharPainel()"
            aria-label="Fechar painel">
            ✕
        </button>

    </div>

    <p class="painel-descricao">
        Personalize sua experiência de leitura.
    </p>

    <!-- TAMANHO DO TEXTO -->
    <div class="grupo-painel">

        <h3>Tamanho do texto</h3>

        <div class="botoes-linha">

            <button
                type="button"
                onclick="diminuirTexto()">
                A− Diminuir
            </button>

            <button
                type="button"
                onclick="aumentarTexto()">
                A+ Aumentar
            </button>

        </div>

    </div>

    <!-- ESPAÇAMENTO -->
    <div class="grupo-painel">

        <h3>Espaçamento</h3>

        <button
            type="button"
            onclick="espacamentoLetras()">
            ↔ Espaçamento entre letras
        </button>

        <button
            type="button"
            onclick="espacamentoLinhas()">
            ☰ Espaçamento entre linhas
        </button>

    </div>

    <!-- APARÊNCIA -->
    <div class="grupo-painel">

        <h3>Aparência</h3>

        <button
            type="button"
            onclick="mudarFonte()">
            Aa Alterar fonte
        </button>

        <button
            type="button"
            onclick="fundoConfortavel()">
            ☀ Fundo confortável
        </button>

        <button
            type="button"
            onclick="contraste()">
            ◐ Alto contraste
        </button>

    </div>

    <!-- FERRAMENTAS DE LEITURA -->
    <div class="grupo-painel">

        <h3>Ferramentas de leitura</h3>

        <button
            type="button"
            onclick="guiaLeitura()">
            ━ Guia de leitura
        </button>

        <button
            type="button"
            onclick="lerPagina()">
            🔊 Ler página em voz alta
        </button>

        <button
            type="button"
            class="parar"
            onclick="pararLeitura()">
            ■ Parar leitura
        </button>

    </div>

    <!-- RESTAURAR CONFIGURAÇÕES -->
    <button
        type="button"
        class="resetar"
        onclick="resetar()">
        Restaurar configurações
    </button>

</div>

