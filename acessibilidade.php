<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acessibilidade</title>
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <header id=conteudo>
        <h1>Dislexia</h1>
        <p>Olá a Todos!! Nesse site explicaremos um pouco sobre a dislexia.</p>
    </header>

    <main>
        <section class="controles" aria-label="Controles de Acessibilidade">
        <a href="#">Conta</a>
           <button id="btnAcessibilidade" onclick="abrirPainel()"> Painel de acessibilidade </button> 
           <!-- Painel lateral --> 
            <aside id="painelAcessibilidade" aria-label="Painel de acessibilidade"> 


     <div class="painel-cabecalho">

    <h2>Acessibilidade</h2>

    <button 
        id="fecharPainel"
        onclick="fecharPainel()"
        aria-label="Fechar painel">
        ×
    </button>

</div>

        <p>Escolha uma opção:</p><div class="controles"> 
            <button onclick="aumentarTexto()"> Aumentar texto </button> 

            <button onclick="diminuirTexto()"> Diminuir texto </button> 
            
            <button onclick="altoContraste()"> Alto contraste </button> 
            <button onclick="lerPagina()"> Ler Página</button>
            <button onclick="pararLeitura()">  Parar Leitura</button>
        </div>
        </aside>
        <br><br>
</section>
        <section id="conteudo">

            <h2>O Que é Dislexia?</h2>
            <p>Ela não é uma doença, nem está ligada ao nível de inteligência ou à falta de escolarização.Trata-se de uma condição que afeta a forma como o cérebro processa a linguagem verbal escrita. As principais manifestações incluem:
                <ul>
                    <li>Dificuldade no reconhecimento preciso e fluente das palavras.</li>
                    <li>Desafios na decodificação leitora e na associação entre letras (grafemas) e sons (fonemas).</li>
                    <li>Impacto na ortografia, na escrita e na compreensão de textos mais longos</li>
                </ul>
            </p>
            <h2>Recursos de Acessibilidade Web Para Pessoas com Dislexia</h2>
            <p>Para apoiar usuários disléxicos, os sites e aplicativos utilizam diversas ferramentas de tecnologia assistiva na web. Abaixo estão 9 recursos essenciais:
                <ol>
                    <li>Fontes Tipográficas Adaptadas (ex: OpenDyslexic)</li>

                    <p>Ajuste na tipografia da página para fontes projetadas especificamente para dislexia ou sem serifa (como Arial e Helvetica). A base das letras em fontes como a OpenDyslexic é mais pesada para evitar a sensação visual de troca ou rotação de letras</p>

                    <li> Leitor de Texto por Voz (Text-to-Speech / TTS)</li>

                    <p>Sistemas que sintetizam a leitura do texto em áudio em tempo real. Esse recurso permite que o usuário acompanhe o conteúdo ou ouça o texto sem precisar fazer o esforço visual de decodificação.</p>

                    <li>Destaque Dinâmico de Texto (Highlighter)</li>

                    <p>Enquanto o áudio lê o texto, a interface ilumina/destaca a palavra ou linha que está sendo reproduzida. Isso ajuda o leitor a manter o foco e acompanhar visualmente o ritmo da leitura.</p>

                    <li> Destaque Dinâmico de Texto (Highlighter)</li>

                    <p>Enquanto o áudio lê o texto, a interface ilumina/destaca a palavra ou linha que está sendo reproduzida. Isso ajuda o leitor a manter o foco e acompanhar visualmente o ritmo da leitura.</p>

                    <li>Controle de Espaçamento e Altura de Linhas</li>

                    <p>Permite ao usuário aumentar o espaço entre as letras (espaçamento entre caracteres), entre palavras e entre as linhas do texto. Isso impede que as frases pareçam "amontoadas".</p>

                    <li>Ajuste de Cores e Contraste Personalizado</li>

                    <P>Muitas pessoas com dislexia sofrem com o estresse visual causado pelo contraste extremo (como fundo branco com texto preto puro). O recurso permite trocar o fundo por tons suaves (bege, creme, azul-claro ou tom sobre tom) para reduzir a fadiga visual.</P>

                    <li>Marcador ou Guia de Leitura (Reading Ruler)</li>
                    <p>Uma linha escura ou regua virtual sobre o site que segue o cursor do mouse. O marcador esconde as linhas superiores e inferiores, isolando apenas a frase que está sendo lida no momento para evitar distrações.</p>
                    <li>Dicionário Visual e Sinônimos em Hover</li>
                    Recurso de apoio léxico onde, ao passar o cursor ou clicar sobre palavras complexas, o site exibe um significado simplificado, uma ilustração ou a separação silábica da palavra.
                    <li>Otimização de Layout para Leitura (Modo Leitura)</li>
                    <p>Função que remove barras laterais, pop-ups, anúncios e elementos visuais poluídos. Ela reestrutura a página para exibir apenas o texto centralizado e imagens essenciais.</p>
                    <li>9 Corretor Ortográfico Inteligente com Dica Contextual</li>
                    <p>Para sites que possuem áreas de escrita (como fóruns ou formulários), corretores focados em dislexia sugerem substituições com base na fonética da palavra escrita incorretamente (em vez de apenas na semelhança tipográfica).</p>
                </ol>
            </p>
        </section>
           <br><br><br>
        <section id="conteudo">
           <h2>Curiosidades</h2>
            <div class="box">

                <div class="box_1">
                    <img src="https://tse3.mm.bing.net/th/id/OIP.6shy1qCBZ2MS0BaPAXW0fgHaE_?r=0&rs=1&pid=ImgDetMain&o=7&rm=3" alt="img1" width="300px">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt assumenda suscipit et modi atque facilis at vero expedita omnis. Facilis quo consectetur excepturi consequuntur fugit vel amet officiis laudantium cupiditate.</p>
                </div>

                <div class="box_2">
                    <img src="https://media.istockphoto.com/id/1414304684/photo/elementary-school.jpg?s=612x612&w=0&k=20&c=Q_2lHs2S1Fvg901FALgtf_YZTkBpCKWl0BhiDBW9MKY=" alt="img2" width="300px">
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt assumenda suscipit et modi atque facilis at vero expedita omnis. Facilis quo consectetur excepturi consequuntur fugit vel amet officiis laudantium cupiditate.</p>
                </div>
                
                <div class="box_3">
                    <img src="https://i.pinimg.com/736x/75/c0/88/75c088a7411439d7464711c265300f63.jpg" alt="img3" width="300px">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt assumenda suscipit et modi atque facilis at vero expedita omnis. Facilis quo consectetur excepturi consequuntur fugit vel amet officiis laudantium cupiditate.</p>
                </div>

            </div>
        </section>
    </main>
    <script src="./js/script.js"></script>
</body>
</html>
