<?php
include('layout/header.php');
?>
<body>
    <!-- PLUGIN DO FADE IN -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    
    <!-- MENU -->
    <?php include('layout/menu.php') ?>
        <div id="Inicio"></div>
        <div id="main">
            <!-- NAV TOP -->
            <?php include('layout/nav.php') ?>
            <!-- CONTEUDO INICIO -->


                <div class="main-content container-fluid Texto">
                    <div class="row"> <!-- Begin row -->
                        <div class="col-md-1"></div>
                        <div class="col-md-10"> <!-- Begin col-md-10 -->
                                <div class="page-title">

                                <!-- Sub Título -->
                                <div class="title-fixed sub-fixed">
                                <p class="SubTitulo ">02.1 - Áreas de Estudo em IHC</p>
                                <hr>
                                </div>                                    
                                <br><p>IHC é uma disciplina interessada no projeto, implementação e avaliação de sistemas computacionais interativos (HEWETT <em>et al</em>., 1992). <strong>IHC, nesse sentido, fornece explicações e previsões para fenômenos de interação usuário-sistema e resultados práticos para design da interface de usuário</strong>. A <strong>Figura 3</strong> apresenta essa definição, estabelecendo a conexão entre previsão e design e entre explicação e avaliação. Design e avaliação são duas áreas de atuação em IHC e consequentemente em design UX. </p>

                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura03.png" data-bs-toggle="modal" data-bs-target="#Imagem03">
                                        <img class="img-fluid wow fadeInDown" data-wow-delay="0.5s" width="450"  src="imagens/Figura03.png" alt="Alt da imagem fica aqui">
                                        <p class="FonteFigura"><strong>Fonte:</strong> BARBOSA; SILVA, 2010</p>
                                    </a>
                                </div>

                                <!-- Imagem 03 - MODAL -->
                                <div class="modal fade text-center" id="Imagem03" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid"  src="imagens/Figura03.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 03:</strong> Principais conceitos de IHC</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 03 - End -->
                                
                                <br><p>De acordo com Hewett, em seu livro sobre currículo para IHC <em>ACM SIGCHI curricula for human-computer interaction</em> (HEWETT <em>et al</em>., 1992), é possível entender IHC dentro de um contexto de 5 aspectos inter-relacionados: </p>

                                <ol>
                                    <li class="wow fadeInRight" data-wow-delay="1.0s">Natureza da interação;</li>
                                    <li class="wow fadeInRight" data-wow-delay="1.3s">Contexto de uso;</li>
                                    <li class="wow fadeInRight" data-wow-delay="1.6s">Características humanas;</li>
                                    <li class="wow fadeInRight" data-wow-delay="1.9s">Sistemas computacionais;</li>
                                    <li class="wow fadeInRight" data-wow-delay="2.2s">Processo de desenvolvimento</li>
                                </ol>
                                
                                <br><p>Algumas das inter-relações entre esses tópicos estão representadas na <strong>Figura 4</strong> (HEWETT <em>et al</em>., 1992). </p>

                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura04.png" data-bs-toggle="modal" data-bs-target="#Imagem04">
                                        <img class="img-fluid wow fadeInUp" data-wow-delay="0.5s" width="300"  src="imagens/Figura04.png" alt="Alt da imagem fica aqui">
                                        <p class="FonteFigura"><strong>Fonte:</strong> BARBOSA; SILVA, 2010</p>
                                    </a>
                                </div>

                                <!-- Imagem 04 - MODAL -->
                                <div class="modal fade text-center" id="Imagem04" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid"  src="imagens/Figura04.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 04:</strong> Abordagens de desenvolvimento</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 04 - End -->

                                
                                
                                <br><p>Na imagem, vemos que os sistemas computacionais existem em um ambiente <strong>social, organizacional e de trabalho</strong> mais amplo. Dentro deste contexto existem <strong>aplicações</strong> para as quais desejamos empregar esses sistemas. Porém o processo de colocar os computadores para funcionar significa que os <strong>aspectos humanos</strong>, técnicos e de trabalho da situação do aplicativo devem ser ajustados uns aos outros por meio da aprendizagem humana, adaptabilidade do sistema ou outras estratégias. </p>
                                
                                <br><p>Além do uso e do contexto social dos computadores, do lado humano também devemos levar em consideração as características de <strong>processamento da informação</strong> humana, <strong>comunicação</strong> e características físicas dos usuários, que envolvem a <strong>ergonomia</strong>. </p>
                                           
                                <br><p>Do lado do computador, que hoje representa uma infinidade de dispositivos, como <em>smartphones</em>, relógios inteligentes <em>(smartwatches)</em>, dispositivos de assistentes inteligentes e outros, temos uma variedade de tecnologias desenvolvidas para dar suporte à interação com humanos. Essas tecnologias estabelecem <strong>dispositivos de entrada e saída</strong> que conectam o humano e a máquina. Estes dispositivos, também conhecidos por periféricos, que podem ser teclados, câmeras e até batimentos cardíacos, são usados a partir de várias <strong>técnicas</strong> para organizar um diálogo. Essas técnicas, por sua vez, são usadas para implementar elementos de design maiores, como a metáfora da interface. Aprofundando-se nos substratos da máquina que dão suporte ao diálogo, o diálogo pode fazer uso extensivo de técnicas de computação gráfica. </p>

                                <br><p>Nas seções seguintes vamos expandir cada uma das cinco áreas de estudo para compreender melhor essas conexões e a importância da presença de IHC na construção de sistemas.</p>

                                <br><!-- Sub Sub Título -->
                                <p class="SubSubTitulo">02.1.1 - Natureza da Interação</p>
                                <hr>

                                <br><p>A natureza da interação envolve investigar o que ocorre enquanto as pessoas utilizam sistemas interativos em suas atividades (HEWETT <em>et al</em>., 1992). Envolve também entender alguns paradigmas dessa comunicação, como avaliar os diversos pontos de vista, como do ponto de vista de trabalho, onde se vê o sistema como ferramenta, ou do ponto de vista de controle, quando é necessário supervisionar atividades de alguém.</p>

                                <br><p>É também parte da natureza da interação que se compreenda os objetivos de uso de um sistema, por exemplo, produtividade ou capacitação do usuário. É neste âmbito que deve se discutir qual a consequência da interação do uso de um sistema para as pessoas e para sociedade.</p>

                                <br><p><strong>Você em algum momento já ouviu seu telefone tocar ou vibrar sem ele estar tocando de fato?</strong> Se sim, este fenômeno pode ser considerado como a “Síndrome do Toque Fantasma”. Ele pode estar relacionado à nomofobia. </p>
    <!---caixa de curiosidade  inicio pra baixo @emerson-->
                                <br><!-- Curiosidade -->
 <div class="selva">
    <div class="animal animal2-1">
                <p class="CuriosidadeTitulo"> Curiosidade</p>
                <div class="textoG">
                <p class="CuriosidadeTexto">A <a href="https://pt.wikipedia.org/wiki/Nomofobia" target="_blank"><strong>nomofobia</strong></a> é a fobia causada pelo desconforto ou angústia resultante da incapacidade de acesso à comunicação por meio de aparelhos celulares ou computadores. Surge quando alguém se sente impossibilitado de se comunicar ou se vê incontactável estando em algum lugar sem um aparelho de celular ou dispositivo com internet. É um termo muito recente e tem origem nos diminutivos ingleses No-Mo, ou No-Mobile, que significa sem celular. 
                Daí a expressão "nomofobia" ou fobia de ficar sem um aparelho de comunicação móvel.</p>
                </div>
    </div>
</div>
  <!---caixa de curiosidade  final @emerson-->



                       <br><p class="wow fadeInRight" data-wow-delay="0.3s">Recentemente uma reportagem do jornal Diário do Nordeste apresentou uma matéria sobre o uso abusivo de celulares. No texto, a psicóloga Anna Lucia Spear King, doutora em saúde mental do Instituto Delete (UFRJ), explica que a dependência por celulares, também chamada de nomofobia, tem vários níveis: vai da falta de educação digital, que inclui a dificuldade de equilíbrio sobre o tempo e locais de uso, até o nível patológico.</p>

                                <p class="wow fadeInDown" data-wow-delay="0.6s">Pesquisadores do Instituto Delete identificaram transtornos relacionados ao uso abusivo de celulares, como “o medo de ficar sem o celular”. Entre os transtornos estudados, citam o “Efeito Google”, que é quando as pessoas começam a reter menos informações já que podem obter respostas rápidas no Google.</p>

                                <p class="wow fadeInLeft" data-wow-delay="0.9s">Outro transtorno relacionado que causa comportamentos não esperados do indivíduo em sociedade é a “Invisibilidade Social”. A invisibilidade social vem sendo bastante explorada em filmes e séries que trazem a tecnologia como tema principal. Dois filmes que trazem essa discussão de forma mais leve são: o filme “<a href="https://www.youtube.com/watch?v=aywJ39-0l9I" target="_blank"><strong>Modo avião</strong></a>”, que explora de forma divertida a falta do celular em uma jovem que é influenciadora digital e é obrigada a ir à casa do avô, onde não pega rede de celular, após pôr em risco sua própria vida em função da vida digital; e o filme “<a href="https://www.netflix.com/br/title/81004099" target="_blank"><strong>Nada a esconder</strong></a>”, que coloca em discussão o impacto das informações pessoais que recebemos pelos celulares em um jogo entre amigos. Apesar de a discussão nestes filmes ocorrer de forma mais leve, o problema é sério e pode desenvolver transtornos mais graves. </p>
                                
                                <br>
                                 <!---caixa de curiosidade inicio pra baixo @emerson-->
                                <!-- Curiosidade -->
                                <div class="selva">
                                <div class="animal">
                                    <p class="CuriosidadeTitulo"> Curiosidade</p>
                                    <div  class="textoG">
                                    <p class="CuriosidadeTexto">Você já se deu conta destes efeitos e de como o design tem responsabilidade sobre isto? Em outro exemplo recente, o documentário “<a href="https://www.youtube.com/watch?v=7X54fS0SQyw" target="_blank"><strong>O Dilema das Redes</strong></a>” <strong>expõe uma opinião</strong> sobre a manipulação sofrida pelos usuários das redes sociais com o objetivo de propiciar ganhos financeiros às empresas, analisando o papel das redes sociais e os danos que elas causam à sociedade.</p>
                                </div>
                                     </div>
                                </div>
                                 <!---caixa de curiosidade  final pra baixo @emerson-->

                                <br><br><p>Outro ponto importante sobre a natureza da interação é como a comunicação é estabelecida com os usuários. A UNESCO apresentou em 2019 um documento intitulado como <em>“I'd blush if I could"</em> (WEST <em>et al</em>., 2019). O título da publicação toma emprestado o nome da resposta dada por Siri, a assistente de voz feminina usada nos iPhones, quando um usuário dizia a 'ela' um insulto de gênero, e a resposta era “Eu ficaria envergonhada se pudesse”. De acordo com o manual, essa resposta apresenta submissão da assistente em face ao abuso. Apesar de já ter sido corrigida, essa situação fornece uma ilustração poderosa dos preconceitos de gênero codificados em produtos de tecnologia, difundidos no setor de tecnologia e aparentes na educação de habilidades digitais.</p>

                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura05.png" data-bs-toggle="modal" data-bs-target="#Imagem05">
                                        <img class="img-fluid wow fadeInDown" data-wow-delay="0.5s" width="300"  src="imagens/Figura05.png" alt="Alt da imagem fica aqui">
                                        <p class="FonteFigura"><strong>Fonte:</strong> UNESCO</p>
                                    </a>
                                </div>

                                <!-- Imagem 05 - MODAL -->
                                <div class="modal fade text-center" id="Imagem05" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid"  src="imagens/Figura05.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 05:</strong> Documento da UNESCO sobre gêneros em sistemas computacionais</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 05 - End -->
                                
                                <br><p>Na área da comunicação com sistemas, o “Manual para uso não sexista da linguagem”, do Governo do Rio Grande do Sul, levanta questões sobre o uso da linguagem e expõe soluções práticas e aplicadas a textos para uma comunicação mais apropriada. Esses conceitos surgem em áreas distintas e devem ser incorporados ao design de sistemas. O efeito dessa evolução pode ser visto como o que a plataforma GitHub realizou ao substituir termos considerados ,<a href="https://www.tecmundo.com.br/software/154174-github-substituir-termos-considerados-racistas-plataforma.htm" target="_blank">racistas</a>, como '<em>master</em>' (mestre) e '<em>slave</em>' (escravo) por alternativas como 'principal', 'padrão', 'primário' e 'secundário'. </p>

                                <br><p>Há muita responsabilidade no design de sistemas, mas também é fato que essa responsabilidade se altera com o tempo. Cada geração resolve novos problemas e se depara com outros. A exemplo disso, vejam na <strong>Figura 6</strong> a evolução da embalagem de um chocolate voltado para crianças que teve em sua primeira versão em 1959 uma imitação aos cigarros, que eram comuns na época e representavam status e elegância.</p>

                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura06.png" data-bs-toggle="modal" data-bs-target="#Imagem06">
                                        <img class="img-fluid wow fadeInUp" data-wow-delay="0.5s"   src="imagens/Figura06.png" alt="Alt da imagem fica aqui">
                                        <p class="FonteFigura"><strong>Fonte:</strong> <a href="https://vejasp.abril.com.br/blog/memoria/por-onde-anda-menino-cigarrinhos-pan/" target="_blank"> Veja SP, 2017</a></p>
                                    </a>
                                </div>

                                <!-- Imagem 06 - MODAL -->
                                <div class="modal fade text-center" id="Imagem06" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid"  src="imagens/Figura06.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 06:</strong>  Evolução das embalagens do produto Reprodução</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 06 - End -->

                                
                                <br><p>Olhando para o futuro, nos deparamos com a responsabilidade de planejar sistemas com tecnologias como inteligência artificial. De acordo com o artigo científico de Bostrom e Yudkowsky (2014) “<em>The Cambridge handbook of artificial intelligence</em>”, a possibilidade de criar máquinas pensantes levanta uma série de questões éticas. Essas questões se referem tanto a garantir que tais máquinas não prejudiquem os humanos e outros seres moralmente relevantes, quanto ao status moral das próprias máquinas. Para essas tecnologias mais avançadas e complexas, se espera critérios de aceitação como responsabilidade, transparência e auditabilidade.</p>

                                <br><!-- Fique Atento -->
                                <div class="FiqueAtentoCaixa">
                                    <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                    <p class="FiqueAtentoTexto">Todo produto é de responsabilidade de quem o planeja (designer), de quem o constrói e de quem o utiliza.</p>
                                </div>

                                <br><br><!-- Sub Sub Título -->
                                <p class="SubSubTitulo">02.1.2 - Contexto de Uso </p>
                                <hr>

                                <br><p>O contexto de uso envolve investigar a interação de pessoas com sistemas levando em conta a cultura, a sociedade, a organização e a linguagem. Assim como lidamos com os fenômenos da natureza, no contexto de uso entendemos as diferenças entre como as pessoas utilizam os sistemas computacionais e os dispositivos de acordo com seu contexto de uso.</p>

                                <br><p>Um problema comum no desenvolvimento de sistemas está ligado ao fato de que a equipe que desenvolve não está no contexto de uso do sistema e pode inferir de forma errada como alguém interagirá com o sistema. A <strong>Figura 7</strong> mostra como estes mundos podem ser distintos.</p>

                                <br><div class="container">
                                    <div class="row">
                                        <p class="TituloFigura text-center"><strong>Figura 7 e 7.1:</strong>   Contexto de uso  x Contexto de Desenvolvimento</p>
                                        <div class="col-sm">
                                            <!-- Titulo Figura -->
                                            <div class="text-center">
                                                <a href="imagens/Figura07.png" data-bs-toggle="modal" data-bs-target="#Imagem07">
                                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s"  src="imagens/Figura07.png" alt="Alt da imagem fica aqui">
                                                </a>
                                            </div>

                                            <!-- Imagem 07 - MODAL -->
                                            <div class="modal fade text-center" id="Imagem07" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <img class="img-fluid"  src="imagens/Figura07.png" alt="Alt da imagem fica aqui">
                                                        </div>
                                                        <div class="modal-footer text-center">
                                                        <p class="TituloFigura"><strong>Figura 07</strong> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Imagem 07 - End -->
                                            
                                        </div>
                                        <div class="col-sm">
                                            <!-- Titulo Figura -->
                                            <div class="text-center">
                                                <a href="imagens/Figura07.1.png" data-bs-toggle="modal" data-bs-target="#Imagem07_1">
                                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s"  src="imagens/Figura07.1.png" alt="Alt da imagem fica aqui">
                                                </a>
                                            </div>

                                            <!-- Imagem 07.1 - MODAL -->
                                            <div class="modal fade text-center" id="Imagem07_1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <img class="img-fluid"  src="imagens/Figura07.1.png" alt="Alt da imagem fica aqui">
                                                        </div>
                                                        <div class="modal-footer text-center">
                                                        <p class="TituloFigura"><strong>Figura 07.1</strong> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Imagem 07.1 - End -->
                                            
                                            
                                        </div>
                                        <p class="FonteFigura text-center">Fonte: (1) <a href="https://www.youtube.com/watch?v=uuzTSTmIaUc&feature=emb_title&ab_channel=InstitutoSocioambiental" target="_blank">Vídeo do Instituto Socioambiental</a> e (2) <a href="https://www.pexels.com/pt-br/foto/foto-de-pessoas-fazendo-apertos-de-mao-3183197/" target="_blank">Pexels</a>    </p>
                                    </div>
                                </div>

                                <br><p>De acordo com o contexto, um sistema pode utilizar uma linguagem mais formal ou menos formal. Esta também é uma decisão de design. Veja na <strong>Figura 8</strong> três exemplos de recursos de linguagem: (1) uma linguagem informal para um site de intercâmbio, (2) uma linguagem mais amigável para informar um erro no Google Chrome e (3) uma linguagem conversacional para a ferramenta <a href="https://www.dropbox.com/paper" target="_blank"><em>Paper</em> do Dropbox</a>. Veja que cada exemplo está dentro de um contexto de uso e possivelmente a escolha das palavras foi uma decisão tomada no momento do planejamento do sistema. Isto pode acontecer para se aproximar do público-alvo, como no primeiro exemplo da agência de intercâmbio ao apresentar uma linguagem mais jovem, ou para facilitar o uso, como no exemplo do <em>Paper</em>.</p>



                                
                                        <br><p class="TituloFigura text-center"><strong>Figura 8, 8.1 e 8.2:</strong> Linguagens e contextos de uso</p>
                                        <div class="col-sm">
                                            <!-- Titulo Figura -->
                                            <div class="text-center">
                                                <a href="imagens/Figura08.png" data-bs-toggle="modal" data-bs-target="#Imagem08">
                                                    <img class="img-fluid wow fadeInLeft" width="500" data-wow-delay="0.5s" src="imagens/Figura08.png" alt="Alt da imagem fica aqui">
                                                </a>
                                            </div>

                                            <!-- Imagem 08 - MODAL -->
                                            <div class="modal fade text-center" id="Imagem08" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <img class="img-fluid" src="imagens/Figura08.png" alt="Alt da imagem fica aqui">
                                                        </div>
                                                        <div class="modal-footer text-center">
                                                        <p class="TituloFigura"><strong>Figura 08</strong> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Imagem 08 - End -->
                                            <br>

                                            <!-- Titulo Figura -->
                                            <div class="text-center">
                                                <a href="imagens/Figura08.1.png" data-bs-toggle="modal" data-bs-target="#Imagem08_1">
                                                    <img class="img-fluid wow fadeInDown" data-wow-delay="0.5s" width="500" src="imagens/Figura08.1.png" alt="Alt da imagem fica aqui">
                                                </a>
                                            </div>

                                            <!-- Imagem 08.1 - MODAL -->
                                            <div class="modal fade text-center" id="Imagem08_1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <img class="img-fluid" src="imagens/Figura08.1.png" alt="Alt da imagem fica aqui">
                                                        </div>
                                                        <div class="modal-footer text-center">
                                                        <p class="TituloFigura"><strong>Figura 08.1</strong> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Imagem 08.1 - End -->
                                            <br>

                                            <!-- Titulo Figura -->
                                            <div class="text-center">
                                                <a href="imagens/Figura08.2.png" data-bs-toggle="modal" data-bs-target="#Imagem08_2">
                                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="500" src="imagens/Figura08.2.png" alt="Alt da imagem fica aqui">
                                                </a>
                                            </div>

                                            <!-- Imagem 08.2 - MODAL -->
                                            <div class="modal fade text-center" id="Imagem08_2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <img class="img-fluid"  src="imagens/Figura08.2.png" alt="Alt da imagem fica aqui">
                                                        </div>
                                                        <div class="modal-footer text-center">
                                                        <p class="TituloFigura"><strong>Figura 08.2</strong> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Imagem 08.2 - End -->
                                            
                                        </div>
                                        
                                        <p class="FonteFigura text-center">Fonte: (1) <a href="https://www.worldpackers.com/pt-BR" target="_blank">Worldpackers</a> e (2) Google Chrome e (3)<a href="https://www.dropbox.com/paper" target="_blank">Dropbox Paper</a></p>
                                    </div>

                                <br><p>O contexto de uso pode destacar uma cultura, como mostra o artigo científico <em>“Kawaii/ Interação fofa"</em>, do inglês <em>“Kawaii/Cute Interactive Media”</em>, (CHEOK, 2010). Se você já teve contato com cultura japonesa possivelmente já ouviu falar sobre o termo <em>Kawaii</em>. De acordo com o artigo, a aplicação de elementos considerados fofos em sistemas interativos têm raízes na estética de muitos elementos históricos e culturais, como a cultura japonesa Kawaii. Nesse estudo o autor percebeu que há uma correlação entre o que se percebe como atraente e bonito em interfaces com a presença de elementos fofos. Essa é uma forma de mostrar a ligação do design à cultura.</p>


                                 <!---caixa de curiosidade  inicio pra baixo @emerson-->
        <br><!-- Curiosidade -->
                             <div class="selva">
                                    <div class="animal animal2-2">
                                        <p class="CuriosidadeTitulo"> Curiosidade</p>
                                        <div  class="textoG">
                                        <p class="CuriosidadeTexto">A palavra <a href="https://www.dicionariopopular.com/kawaii/" target="_blank">Kawaii</a> surgiu em 1970 na cultura japonesa e pode ser considerada um neologismo. O kanji (可爱) utilizado para representar o termo é semelhante ao que usam na China. Kawaii é uma palavra japonesa com vários significados por não ter uma tradução exata. Ela pode ser usada para adjetivos como fofo, adorável, amável, doce, doçura e etc. A palavra é usada principalmente pelos otakus, os fãs de anime e cultura pop japonesa, como uma forma de elogio.</p>
                                    </div>
                                         </div>
                                </div>   
                                 <!---caixa de curiosidade  final  pra baixo @emerson-->
                            <br>

                            <br><!-- Sub Sub Título -->
                            <p class="SubSubTitulo">02.1.3 - Características Humanas</p>
                            <hr>

                            <br><p>As características humanas envolvem investigar a forma como as pessoas se comunicam e interagem entre si e com outros artefatos utilizando visão, audição, processos cognitivos e outros fenômenos humanos para compreensão. A interação com qualquer artefato novo, principalmente os sistemas computacionais interativos, que lidam com informações, requer capacidade cognitiva para processar informações e aprender a utilizá-los (BARBOSA; SILVA, 2010).</p>

                            <br><p>Voltando ao exemplo inicial deste curso, do rádio <em>bluetooth</em>, podemos relembrar que houve uma expectativa de funcionalidade para o elemento da interface que parecia um botão comum em outros dispositivos semelhantes. Isto é explicado pela nossa <strong>tendência a repetir interações cotidianas</strong>.</p>

                            <br><p>É possível aproveitar essas capacidades do usuário respeitando suas limitações. Por exemplo, algumas interfaces de sistemas que tocam músicas apresentam elementos semelhantes aos botões de volume de dispositivos físicos. Esse estilo de design é chamado de skeumorfismo.</p>

                            <div class="row">
                                <p class="TituloFigura text-center"><strong>Figura 9 e 9.1:</strong> Contexto de uso  x Contexto de Desenvolvimento</p>
                                <div class="col-sm">
                                    <!-- Titulo Figura -->
                                    <div class="text-center">
                                                <a href="imagens/Figura09.png" data-bs-toggle="modal" data-bs-target="#Imagem09">
                                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="220" src="imagens/Figura09.png" alt="Alt da imagem fica aqui">
                                                </a>
                                            </div>

                                            <!-- Imagem 09 - MODAL -->
                                            <div class="modal fade text-center" id="Imagem09" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <img class="img-fluid"  src="imagens/Figura09.png" alt="Alt da imagem fica aqui">
                                                        </div>
                                                        <div class="modal-footer text-center">
                                                        <p class="TituloFigura"><strong>Figura 09</strong> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Imagem 09 - End -->
                                    
                                </div>

                                <div class="col-sm">
                                    <!-- Titulo Figura -->
                                    <div class="text-center">
                                            <a href="imagens/Figura09.1.png" data-bs-toggle="modal" data-bs-target="#Imagem09_1">
                                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="300" src="imagens/Figura09.1.png" alt="Alt da imagem fica aqui">
                                            </a>
                                        </div>

                                        <!-- Imagem 09.1 - MODAL -->
                                        <div class="modal fade text-center" id="Imagem09_1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <img class="img-fluid"  src="imagens/Figura09.1.png" alt="Alt da imagem fica aqui">
                                                    </div>
                                                    <div class="modal-footer text-center">
                                                    <p class="TituloFigura"><strong>Figura 09.1</strong> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Imagem 09.1 - End -->
                                    
                                </div>
                                <p class="FonteFigura text-center">Fonte: Google</a></p>
                            </div>

                            <br><!-- Saiba Mais -->
                            <div class="SaibaMaisCaixa">
                                <p class="SaibaMaisTitulo"> Saiba Mais</p>
                                <p class="SaibaMaisTexto"><strong>Skeumorfismo</strong>, do grego, <em>skeuos</em>, recipiente ou ferramenta; e <em>morphe</em>, forma. O termo se refere a truques visuais ou ao uso de talhes e ornamentações para imitar outros materiais e formas físicas. A estratégia existe pelo menos desde a GUI (Interface Gráfica do Usuário) dos computadores da Apple, de 1984, que introduziu o conceito de área de trabalho com ícones semelhantes às pastas e pedaços de papel. O recurso se mostrou extremamente útil naquela época, pois tais interfaces gráficas constituíam conceitos estranhos para a maioria dos usuários, de modo que o uso desses itens familiares representava um auxílio significativo para a compreensão do seu funcionamento e operação (DE SOUSA; GRIMALDI, 2015).</p>
                            </div>

                            <br><br><p>Para compreender as características humanas envolvidas, é necessário separar os elementos principais da interação: o <strong>sistema</strong>, a <strong>interface</strong> e o <strong>usuário</strong> (<strong>Figura 10</strong>). A interface compreende toda a opção do sistema com a qual o usuário  mantém contato físico (motor ou perceptivo) ou conceitual durante a interação (MORAN, 1996). A interface é muitas vezes confundida com o próprio sistema, mas o sistema pode envolver outras partes de uma arquitetura que é invisível ou inacessível ao usuário. Entre o usuário e o sistema nós temos os processos de ação e de interpretação por meio da interface.</p>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura10.png" data-bs-toggle="modal" data-bs-target="#Imagem10">
                                    <img class="img-fluid wow fadeInDown" data-wow-delay="0.5s" width="400" src="imagens/Figura10.png" alt="Alt da imagem fica aqui">
                                    <p class="FonteFigura"><a href="https://thiagoesser.wordpress.com/2013/04/05/modelo-mental-vs-modelo-conceitual/" target="_blank">Blog Thiago Esser</a></p>
                                </a>
                            </div>

                            <!-- Imagem 10 - MODAL -->
                            <div class="modal fade text-center" id="Imagem10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid"  src="imagens/Figura10.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 10 </strong>- Sistema - Interface - Usuário </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 10 - End -->


                             <!---caixa de curiosidade  inicio pra  final baixo @emerson-->
                            <br><!-- Curiosidade -->
                            <div class="selva">
                                    <div class="animal animal2-2">
                                        <p class="CuriosidadeTitulo"> Curiosidade</p>
                                        <div  class="textoG">
                                        <p class="CuriosidadeTexto"> <img class="img-fluid" width="200" src="imagens/QRCode.png" alt="QRCode"><br><br> <a href="https://www.youtube.com/watch?v=dEAQkHj25hg&feature=youtu.be" target="_blank">Clique aqui</a> ou aponte a câmera do seu celular para o <em>QRCode</em> caso queira expandir um pouco mais os conceitos de usuário e interface, veja o vídeo de um comercial de um Pet-commerce. </p>
                                         <!-- Titulo Figura -->
                                <div class="text-center">
                                        
                                    </div>
                                    </div>
                                         </div>
                                </div>   
                                 <!---caixa de curiosidade   pra baixo @emerson-->

                            <br><br><p>Imagine agora que você nunca viu um iPad, mas acabei de lhe entregar um e dizer que você pode ler livros nele. Antes de ligar o iPad, antes de usá-lo, você tem um modelo em sua cabeça de como será a leitura de um livro no iPad. Você tem suposições sobre como o livro será apresentado na tela, como será possível interagir, como passar uma página. Você tem um <strong>“modelo mental”</strong> de leitura de um livro no iPad, mesmo que nunca o tenha feito antes (<strong>Figura 11</strong>).</p>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura11.png" data-bs-toggle="modal" data-bs-target="#Imagem11">
                                    <img class="img-fluid wow fadeInUp" data-wow-delay="0.5s" width="400" src="imagens/Figura11.png" alt="Alt da imagem fica aqui">
                                    <p class="FonteFigura"><a href="https://uxmag.com/articles/the-secret-to-designing-an-intuitive-user-experience" target="_blank">UX Mag</a></p>
                                </a>
                            </div>

                            <!-- Imagem 11 - MODAL -->
                            <div class="modal fade text-center" id="Imagem11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid"  src="imagens/Figura11.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 11:</strong> Modelo mental de leitura no iPad</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 11 - End -->

                            

                            <br><p>A aparência e o comportamento desse modelo mental na sua cabeça depende de muitas coisas: se você já usou um iPad antes, seu modelo mental de ler um livro em um iPad será diferente do de alguém que nunca usou um. Assim que você utilizar o iPad para ler algum livro, qualquer modelo mental que você tinha em sua cabeça antes começará a mudar e se ajustar para refletir sua experiência (WEINSCHENK, 2010). </p>

                            <br><!-- Saiba Mais -->
                            <div class="SaibaMaisCaixa">
                                <p class="SaibaMaisTitulo"> Saiba Mais</p>
                                <p class="SaibaMaisTexto"><strong>Modelo mental</strong> é a representação do processo de <strong>pensamento de alguém para saber como algo funciona</strong> (ou seja, a compreensão da pessoa sobre o mundo que a envolve). Os modelos mentais são <strong>baseados em informações incompletas, experiências passadas e até mesmo percepções intuitivas</strong>. Eles ajudam a moldar ações e comportamentos, influenciando naquilo que as pessoas devem prestar atenção em situações complicadas e como elas abordam e resolvem os problemas (CAREY, 1986).</p>
                            </div>

                            <br><br><p>Para entender por que os modelos mentais são tão importantes para projetar interfaces de usuário, você também precisa entender o que é um modelo conceitual. Um <strong>modelo conceitual</strong> é o modelo real que é fornecido ao usuário por meio da interface do produto (WEINSCHENK, 2010). No exemplo da leitura do livro no iPad, você tem um modelo mental sobre como será a leitura de um livro no dispositivo, como funcionará e o que você pode fazer com o dispositivo pela interface. Mas quando você senta com o iPad, o “sistema” (o iPad) exibe o que o modelo conceitual do aplicativo de livro realmente é.<strong> O modelo conceitual é formado por telas, botões e ações que acontecem independentemente do que você esperava</strong> (WEINSCHENK, 2010). A interface real representa o modelo conceitual. Alguém projetou uma interface de usuário e essa interface está comunicando a você o modelo conceitual do produto.</p>

                            <br><p>Encerramos esta sessão de características humanas com dois conceitos importantes para design UX: modelos conceituais e modelos mentais. O designer, ou quem tenha esse papel na equipe, é um elo entre os dois modelos. Com técnicas apropriadas e uma visão ampla dos projetos, ele é capaz de reduzir a distância entre o que se espera (modelo mental) do que se projeta e constrói (modelo conceitual).</p>

                            <br><!-- Curiosidade -->
                           

                             <!---caixa de curiosidade  inicio pra baixo @emerson-->
                        
                             <div class="selva">
                                    <div class="animal animal2-2">
                                        <p class="CuriosidadeTitulo"> Curiosidade</p>
                                        <div  class="textoG">
                                            
                                        <p class="CuriosidadeTexto"><a href="https://vimeo.com/128873380" target="_blank"> <img class="img-fluid" width="200" src="imagens/QRCode2.png" alt="QRCode"> <br><br> Clique aqui</a> ou aponte a câmera do seu celular para o <em>QRCode</em> e veja o vídeo “Uninvited Guests”, “Convidados não convidados” em português. </p>
                                    </div>
                                         </div>
                                </div> 
                                  
                                 <!---caixa de curiosidade final pra baixo @emerson-->
                           
                            <br><br>

                            <!-- Sub Sub Título -->
                            <p class="SubSubTitulo">02.1.4 - Sistemas Computacionais</p>
                            <hr>

                            <br><p>Sistemas de computadores envolvem utilizar arquiteturas, técnicas e interfaces buscando construir sistemas que favoreçam a experiência de uso. É possível aproveitar modelos conceituais para entregar sistemas mais adequados aos usuários. Diversas tecnologias e dispositivos têm sido desenvolvidos para permitir e facilitar a interação com pessoas (BARBOSA; SILVA, 2010).</p>
                            
                            <br><p>O uso de técnicas de Computação Gráfica e Inteligência Artificial podem beneficiar a interação com um sistema a partir do poder das tecnologias. Mas o que poderia de fato ser esse benefício? Em que áreas podemos melhorar com tecnologias mais avançadas?</p>

                            <br><p>O <a href="http://leadfortaleza.com.br/portal/atuacao" target="_blank">LEAD</a>, Centro de Pesquisa, Desenvolvimento e Inovação Dell, por exemplo, é um local que explora conhecimento avançado em tecnologia para resolver problemas de acessibilidade. Um dos projetos de pesquisa que desenvolvem é o ARTRADE (<strong>Figura 12</strong>). O ARTRADE é uma aplicação mobile, para smartphones, que auxilia na montagem de hardware, ensinando os funcionários da fábrica da Dell a como montar peças completas de dispositivos da marca. Este projeto utiliza óculos de realidade aumentada e é acessível para pessoas com deficiência auditiva.</p>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura12.png" data-bs-toggle="modal" data-bs-target="#Imagem12">
                                    <img class="img-fluid wow fadeInDown" data-wow-delay="0.5s" width="400" src="imagens/Figura12.png" alt="Alt da imagem fica aqui">
                                    <p class="FonteFigura"><a href="http://leadfortaleza.com.br/portal/atuacao" target="_blank">LEAD</a></p>
                                </a>
                            </div>

                            <!-- Imagem 12 - MODAL -->
                            <div class="modal fade text-center" id="Imagem12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid"  src="imagens/Figura12.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 12:</strong> ARTRADE</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 12 - End -->

                            

                            <!-- Sub Sub Título -->
                            <p class="SubSubTitulo">02.1.5 - Processo de Desenvolvimento</p>
                            <hr>

                            <br><p>O processo de desenvolvimento influencia na qualidade do produto final. É no processo de desenvolvimento que é possível aplicar abordagens de IHC, que podem ser métodos, técnicas e ferramentas de construção de interface e de avaliação. O processo de desenvolvimento pode incluir, por exemplo, uma análise de casos de sucesso e de insucesso de interfaces.</p>

                            <br><p>A prototipação é uma prática comum no processo de desenvolvimento. O <strong>protótipo</strong> é uma representação do sistema ou produto real de forma que seja possível imaginá-lo sem a necessidade de ser desenvolvido. É uma técnica utilizada para discutir, testar e documentar uma solução. É possível trabalhar com prototipação em vários níveis de fidelidade. A <strong>Figura 13</strong> apresenta protótipos que vão de um nível de fidelidade mais baixos, também conhecidos por <em>wireframes</em>, até níveis de fidelidade com a realidade mais altos, que podem ser feitos em softwares especializados, como Adobe XD, Figma, dentre outros.</p>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura13.png" data-bs-toggle="modal" data-bs-target="#Imagem13">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s"   src="imagens/Figura13.png" alt="Alt da imagem fica aqui">
                                    <p class="FonteFigura">Fonte: Ironhack ux design</p>
                                </a>
                            </div>

                            <!-- Imagem 13 - MODAL -->
                            <div class="modal fade text-center" id="Imagem13" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid"  src="imagens/Figura13.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 13:</strong> Prototipação</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 13 - End -->

                            

                            <br><p>No processo de desenvolvimento, devemos estabelecer qual nível de qualidade que se espera de um sistema ou produto. De acordo com Barbosa e Silva (2010), os critérios de qualidade de uso enfatizam certas características da interação e da interface que as tornam adequadas aos efeitos esperados do uso do sistema. Os critérios de qualidade de uso são:</p>

                            <ol>
                                <li class="wow fadeInRight" data-wow-delay="1.0s"><strong>Usabilidade:</strong> facilidade de aprendizado da interface e satisfação do usuário;</li>
                                <li class="wow fadeInRight" data-wow-delay="1.3s"><strong>Experiência do usuário:</strong> emoções e sentimentos do usuário;</li>
                                <li class="wow fadeInRight" data-wow-delay="1.6s"><strong>Acessibilidade:</strong> remoção das barreiras que impedem os usuários de interagir com a interface;</li>
                                <li class="wow fadeInRight" data-wow-delay="1.9s"><strong>Comunicabilidade:</strong> comunicar ao usuário as intenções de design e a lógica que rege o comportamento da interface.</li>
                            </ol>

                            <br><p>A parte do processo de desenvolvimento que engloba as práticas e conceitos de qualidade em IHC é chamada de “Processo de Design”. Existem diversas metodologias para processos de design, como Design de Interação (ROGER; PREECE, 2013), <a href="https://www.gv.com/sprint/" target="_blank">Design Sprint</a>, Lean UX (GOTHELF, 2013), dentre outros.</p>



                            




                                        



                                
                                    

                                


              
                                <!-- SCRIPT LIGHTBOX -->
                                <script>
                                    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                        event.preventDefault();
                                        $(this).ekkoLightbox();
                                    });                    
                                </script>

                            </div> <!-- CLASS PAGE TITLE FIM -->                            
                        </div> <!-- End col-md-10 -->
                        <div class="col-md-1"></div>
                    </div> <!-- End row -->

                    <!-- Botões de navegação -->
                    <div class="container-text-center">
                    <div class="text-center buttons">
                        <a href="Topico02.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                        <a href="Topico03.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                    </div>
                    </div>
                </div>
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
