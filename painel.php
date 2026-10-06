<?php

$paginaCompleta = !isset($_GET["modo"]);

?>


<?php if ($paginaCompleta) { ?>

<!DOCTYPE html>

<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Painel de Acessibilidade</title>

    <link
        rel="stylesheet"
        href="style/style.css">

</head>

<body>

    <a
        href="acessibilidade.php"
        class="voltar">

        ← Voltar

    </a>

<?php } ?>


<!-- PAINEL -->

<div id="painel">


    <!-- X aparece quando estiver na página principal -->

    <?php if (!$paginaCompleta) { ?>

        <button
            class="fechar"
            onclick="fecharPainel()">

            X

        </button>

    <?php } ?>


    <h2>Acessibilidade</h2>

    <p>
        Personalize a página para deixar
        sua leitura mais confortável.
    </p>


    <!-- 1 -->

    <button onclick="aumentarTexto()">
        🔎 Aumentar texto
    </button>


    <!-- 2 -->

    <button onclick="diminuirTexto()">
        🔍 Diminuir texto
    </button>


    <!-- 3 -->

    <button onclick="espacamentoLetras()">
        ↔ Espaçamento entre letras
    </button>


    <!-- 4 -->

    <button onclick="espacamentoLinhas()">
        ☰ Espaçamento entre linhas
    </button>


    <!-- 5 -->

    <button onclick="mudarFonte()">
        Aa Fonte de leitura
    </button>


    <!-- 6 -->

    <button onclick="fundoConfortavel()">
        ☀ Fundo confortável
    </button>


    <!-- 7 -->

    <button onclick="contraste()">
        ◐ Alto contraste
    </button>


    <!-- 8 -->

    <button onclick="guiaLeitura()">
        ━ Guia de leitura
    </button>


    <!-- 9 -->

    <button onclick="lerPagina()">
        🔊 Ler página
    </button>


    <!-- PARAR -->

    <button
        class="parar"
        onclick="pararLeitura()">

        ■ Parar leitura

    </button>


    <!-- RESTAURAR -->

    <button
        class="resetar"
        onclick="resetar()">

        ↻ Restaurar

    </button>

</div>


<?php if ($paginaCompleta) { ?>


    <script src="js/script.js"></script>

</body>

</html>

<?php } ?>