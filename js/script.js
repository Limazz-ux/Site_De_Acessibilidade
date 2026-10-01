function abrirPainel() {
    const painel = document.getElementById("painelAcessibilidade");
    const botao = document.getElementById("btnAcessibilidade");

    painel.classList.add("aberto");
    botao.style.display = "none";
}


function fecharPainel() {
    const painel = document.getElementById("painelAcessibilidade");
    const botao = document.getElementById("btnAcessibilidade");

    painel.classList.remove("aberto");
    botao.style.display = "block";
}

     function aumentarTexto() 
     { document.body.classList.add("texto-grande"); 

     }  function diminuirTexto() { document.body.classList.remove("texto-grande");
     }
      function altoContraste() { document.body.classList.toggle("contraste"); 
      } 

function lerPagina() {
    speechSynthesis.cancel();

    const texto = document.getElementById("conteudo").innerText;

    const leitura = new SpeechSynthesisUtterance(texto);

    leitura.lang = "jpn";
    leitura.rate = 0.8;

    speechSynthesis.speak(leitura);
}

function pararLeitura() {
    speechSynthesis.cancel();
}