/* =========================================
   PAINEL DE ACESSIBILIDADE
========================================= */

function abrirPainel() {

    const painel =
        document.getElementById("painelAcessibilidade");

    const botao =
        document.getElementById("btnAcessibilidade");

    painel.classList.add("aberto");

    botao.style.display = "none";
}


function fecharPainel() {

    const painel =
        document.getElementById("painelAcessibilidade");

    const botao =
        document.getElementById("btnAcessibilidade");

    painel.classList.remove("aberto");

    botao.style.display = "block";
}


/* =========================================
   TAMANHO DO TEXTO
========================================= */

function aumentarTexto() {

    document.body.classList.add("texto-grande");
}


function diminuirTexto() {

    document.body.classList.remove("texto-grande");
}


/* =========================================
   ESPAÇAMENTO
========================================= */

function alternarEspacamento() {

    document.body.classList.toggle("espacamento");
}


function alternarLinhas() {

    document.body.classList.toggle("linhas");
}


/* =========================================
   CONTRASTE
========================================= */

function altoContraste() {

    document.body.classList.toggle("contraste");
}


/* =========================================
   FUNDO CONFORTÁVEL
========================================= */

function modoCreme() {

    document.body.classList.toggle("fundo-creme");
}


/* =========================================
   FONTE
========================================= */

function alternarFonte() {

    document.body.classList.toggle("fonte-dislexia");
}


/* =========================================
   GUIA DE LEITURA
========================================= */

function alternarGuia() {

    const guia =
        document.getElementById("guiaLeitura");

    guia.classList.toggle("ativo");
}


document.addEventListener("mousemove", function(event) {

    const guia =
        document.getElementById("guiaLeitura");

    if (
        guia &&
        guia.classList.contains("ativo")
    ) {
        guia.style.top =
            `${event.clientY - 4}px`;
    }

});


/* =========================================
   LEITURA EM VOZ ALTA
========================================= */

function lerPagina() {

    if (!("speechSynthesis" in window)) {

        alert(
            "Seu navegador não oferece suporte à leitura de texto."
        );

        return;
    }


    speechSynthesis.cancel();


    const conteudo =
        document.getElementById("conteudo");


    const texto =
        conteudo.innerText;


    const leitura =
        new SpeechSynthesisUtterance(texto);


    leitura.lang = "pt-BR";

    leitura.rate = 0.85;

    leitura.pitch = 1;

    leitura.volume = 1;


    speechSynthesis.speak(leitura);
}


function pararLeitura() {

    if ("speechSynthesis" in window) {

        speechSynthesis.cancel();

    }
}


/* =========================================
   RESET
========================================= */

function resetarAcessibilidade() {

    document.body.classList.remove(
        "texto-grande",
        "espacamento",
        "linhas",
        "contraste",
        "fundo-creme",
        "fonte-dislexia"
    );


    const guia =
        document.getElementById("guiaLeitura");


    guia.classList.remove("ativo");


    pararLeitura();
}


/* =========================================
   MENU MOBILE
========================================= */

function alternarMenu() {

    const nav =
        document.querySelector(".nav-links");

    nav.classList.toggle("menu-aberto");
}