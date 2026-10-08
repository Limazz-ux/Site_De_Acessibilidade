// =============================
// ABRIR PAINEL
// =============================

function abrirPainel() {

    fetch("painel.php?modo=painel")

        .then(function(resposta) {

            return resposta.text();

        })

        .then(function(painel) {

            document.getElementById("areaPainel").innerHTML = painel;

        });

}


// =============================
// FECHAR PAINEL
// =============================

function fecharPainel() {

    document.getElementById("areaPainel").innerHTML = "";

}


// =============================
// 1. AUMENTAR TEXTO
// =============================

function aumentarTexto() {

    document.getElementById("conteudo")
        .style.fontSize = "20px";

}


// =============================
// 2. DIMINUIR TEXTO
// =============================

function diminuirTexto() {

    document.getElementById("conteudo")
        .style.fontSize = "16px";

}


// =============================
// 3. ESPAÇAMENTO DAS LETRAS
// =============================

function espacamentoLetras() {

    document.body.classList.toggle("letras");

}


// =============================
// 4. ESPAÇAMENTO DAS LINHAS
// =============================

function espacamentoLinhas() {

    document.body.classList.toggle("linhas");

}


// =============================
// 5. FONTE
// =============================

function mudarFonte() {

    document.body.classList.toggle("fonte");

}


// =============================
// 6. FUNDO CONFORTÁVEL
// =============================

function fundoConfortavel() {

    document.body.classList.toggle("creme");

}


// =============================
// 7. CONTRASTE
// =============================

function contraste() {

    document.body.classList.toggle("contraste");

}


// =============================
// 8. GUIA DE LEITURA
// =============================

function guiaLeitura() {

    document.getElementById("guia")
        .classList.toggle("ativo");

}


// Faz a linha acompanhar o mouse

document.addEventListener(
    "mousemove",

    function(event) {

        let guia =
            document.getElementById("guia");

        if (guia) {

            guia.style.top =
                event.clientY + "px";

        }

    }
);


// =============================
// 9. LEITURA EM VOZ ALTA
// =============================

function lerPagina() {

    let texto =
        document.getElementById("conteudo")
            .innerText;


    let leitura =
        new SpeechSynthesisUtterance(texto);


    leitura.lang = "jpn";


    speechSynthesis.speak(leitura);

}


// =============================
// PARAR LEITURA
// =============================

function pararLeitura() {

    speechSynthesis.cancel();

}


// =============================
// RESTAURAR
// =============================

function resetar() {

    document.body.classList.remove(
        "letras",
        "linhas",
        "fonte",
        "creme",
        "contraste"
    );


    document.getElementById("conteudo")
        .style.fontSize = "16px";


    let guia =
        document.getElementById("guia");


    if (guia) {

        guia.classList.remove("ativo");

    }


    speechSynthesis.cancel();

}