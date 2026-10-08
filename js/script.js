
// =====================================
// CONFIGURAÇÕES DE ACESSIBILIDADE
// =====================================

const configuracaoPadrao = {
    tamanho: 100,
    letras: false,
    linhas: false,
    fonte: false,
    creme: false,
    contraste: false,
    guia: false
};

let configuracoes = { ...configuracaoPadrao };
let ultimoFoco = null;

try {
    const salvas = JSON.parse(
        localStorage.getItem("dislexiaConfiguracoes")
    );

    if (salvas && typeof salvas === "object") {
        configuracoes = {
            ...configuracaoPadrao,
            ...salvas
        };
    }
} catch (erro) {
    console.warn("Não foi possível recuperar as configurações.");
}


// =====================================
// SALVAR CONFIGURAÇÕES
// =====================================

function salvarConfiguracoes() {

    try {
        localStorage.setItem(
            "dislexiaConfiguracoes",
            JSON.stringify(configuracoes)
        );
    } catch (erro) {
        console.warn("Não foi possível salvar as configurações.");
    }
}


// =====================================
// APLICAR CONFIGURAÇÕES
// =====================================

function aplicarConfiguracoes() {

    const conteudo = document.getElementById("conteudo");
    const guia = document.getElementById("guia");

    if (!conteudo) return;

    configuracoes.tamanho = Math.min(
        150,
        Math.max(80, Number(configuracoes.tamanho) || 100)
    );

    conteudo.style.setProperty(
        "--escala-texto",
        configuracoes.tamanho / 100
    );

    document.body.classList.toggle(
        "letras",
        Boolean(configuracoes.letras)
    );

    document.body.classList.toggle(
        "linhas",
        Boolean(configuracoes.linhas)
    );

    document.body.classList.toggle(
        "fonte",
        Boolean(configuracoes.fonte)
    );

    document.body.classList.toggle(
        "creme",
        Boolean(configuracoes.creme)
    );

    document.body.classList.toggle(
        "contraste",
        Boolean(configuracoes.contraste)
    );

    if (guia) {
        guia.classList.toggle(
            "ativo",
            Boolean(configuracoes.guia)
        );
    }
}


// =====================================
// ABRIR PAINEL
// =====================================

async function abrirPainel() {

    const area = document.getElementById("areaPainel");

    if (!area || document.getElementById("painel")) {
        return;
    }

    ultimoFoco = document.activeElement;

    try {

        const resposta = await fetch("painel.php");

        if (!resposta.ok) {
            throw new Error("Erro ao carregar painel");
        }

        const html = await resposta.text();

        area.innerHTML = html;

        const botaoFechar = area.querySelector(".fechar");

        if (botaoFechar) {
            botaoFechar.focus();
        }

    } catch (erro) {

        console.error(erro);

        alert("Não foi possível carregar o painel.");

    }
}


// =====================================
// FECHAR PAINEL
// =====================================

function fecharPainel() {

    const area = document.getElementById("areaPainel");

    if (area) {
        area.innerHTML = "";
    }

    if (ultimoFoco && ultimoFoco.isConnected) {
        ultimoFoco.focus();
    }
}


// =====================================
// AUMENTAR TEXTO
// =====================================

function aumentarTexto() {

    configuracoes.tamanho = Math.min(
        150,
        configuracoes.tamanho + 10
    );

    atualizar();
}


// =====================================
// DIMINUIR TEXTO
// =====================================

function diminuirTexto() {

    configuracoes.tamanho = Math.max(
        80,
        configuracoes.tamanho - 10
    );

    atualizar();
}


// =====================================
// ESPAÇAMENTO DAS LETRAS
// =====================================

function espacamentoLetras() {

    configuracoes.letras = !configuracoes.letras;

    atualizar();
}


// =====================================
// ESPAÇAMENTO DAS LINHAS
// =====================================

function espacamentoLinhas() {

    configuracoes.linhas = !configuracoes.linhas;

    atualizar();
}


// =====================================
// ALTERAR FONTE
// =====================================

function mudarFonte() {

    configuracoes.fonte = !configuracoes.fonte;

    atualizar();
}


// =====================================
// FUNDO CONFORTÁVEL
// =====================================

function fundoConfortavel() {

    configuracoes.creme = !configuracoes.creme;

    if (configuracoes.creme) {
        configuracoes.contraste = false;
    }

    atualizar();
}


// =====================================
// ALTO CONTRASTE
// =====================================

function contraste() {

    configuracoes.contraste = !configuracoes.contraste;

    if (configuracoes.contraste) {
        configuracoes.creme = false;
    }

    atualizar();
}


// =====================================
// GUIA DE LEITURA
// =====================================

function guiaLeitura() {

    configuracoes.guia = !configuracoes.guia;

    atualizar();
}


// =====================================
// ACOMPANHAR MOVIMENTO DO MOUSE
// =====================================

document.addEventListener("mousemove", function(evento) {

    const guia = document.getElementById("guia");

    if (guia && configuracoes.guia) {

        guia.style.top = evento.clientY + "px";

    }

});


// =====================================
// LEITURA EM VOZ ALTA
// =====================================

function lerPagina() {

    if (!("speechSynthesis" in window)) {

        alert("Seu navegador não suporta leitura em voz alta.");
        return;

    }

    speechSynthesis.cancel();

    const conteudo = document.getElementById("conteudo");

    if (!conteudo) return;

    const texto = conteudo.innerText;

    const leitura = new SpeechSynthesisUtterance(texto);

    leitura.lang = "pt-BR";


    speechSynthesis.speak(leitura);
}


// =====================================
// PARAR LEITURA
// =====================================

function pararLeitura() {

    if ("speechSynthesis" in window) {
        speechSynthesis.cancel();
    }
}


// =====================================
// RESTAURAR CONFIGURAÇÕES
// =====================================

function resetar() {

    configuracoes = { ...configuracaoPadrao };

    pararLeitura();

    atualizar();
}


// =====================================
// ATUALIZAR E SALVAR
// =====================================

function atualizar() {

    aplicarConfiguracoes();

    salvarConfiguracoes();
}


// =====================================
// FECHAR PAINEL COM ESC
// =====================================

document.addEventListener("keydown", function(evento) {

    const painel = document.getElementById("painel");

    if (!painel) return;

    if (evento.key === "Escape") {
        fecharPainel();
        return;
    }

    if (evento.key === "Tab") {

        const elementos = Array.from(
            painel.querySelectorAll(
                "button:not([disabled]), a[href], input:not([disabled]), select:not([disabled]), textarea:not([disabled])"
            )
        );

        if (elementos.length === 0) return;

        const primeiro = elementos[0];
        const ultimo = elementos[elementos.length - 1];

        if (evento.shiftKey && document.activeElement === primeiro) {
            evento.preventDefault();
            ultimo.focus();
        } else if (!evento.shiftKey && document.activeElement === ultimo) {
            evento.preventDefault();
            primeiro.focus();
        }
    }

});


// =====================================
// FORMULÁRIO DEMONSTRATIVO
// =====================================

function configurarFormulario() {

    const formulario = document.getElementById(
        "formularioPesquisa"
    );

    if (!formulario) return;

    formulario.addEventListener("submit", function(evento) {

        evento.preventDefault();

        const mensagem = document.getElementById(
            "mensagemFormulario"
        );

        if (mensagem) {
            mensagem.textContent =
                "Formulário validado. O envio ainda não está conectado ao banco de dados.";
        }

    });

}


// =====================================
// INICIALIZAÇÃO
// =====================================

document.addEventListener("DOMContentLoaded", function() {

    aplicarConfiguracoes();

    configurarFormulario();

});


const formulario = document.getElementById("formularioPesquisa");
const mensagem = document.getElementById("mensagemFormulario");

formulario.addEventListener("submit", async function (event) {

    // Impede o navegador de recarregar a página
    event.preventDefault();

    const dados = new FormData(formulario);

    try {

        const resposta = await fetch("processar_formulario.php", {
            method: "POST",
            body: dados
        });

        const resultado = await resposta.text();

        mensagem.textContent = resultado;

        // Limpa o formulário após sucesso
        formulario.reset();

    } catch (erro) {

        mensagem.textContent =
            "Erro ao enviar o formulário.";

        console.error(erro);
    }

});