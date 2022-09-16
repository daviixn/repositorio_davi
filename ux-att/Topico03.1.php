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
                            <p class="SubTitulo">03.1 - História de UX</p>
                            <hr>
                            </div>
                            <br>

                            <p>Experiência de usuário é uma área multidisciplinar de estudo, que, ao longo do tempo, evoluiu a partir de disciplinas diferentes. Experiência de usuário é o estudo do uso que as pessoas fazem de artefatos por meio de atividades guiadas e essa base vem das ciências de comportamento, especificamente ergonomia, psicologia e <em>‘human factors’</em> (MACEDO, 2014).</p>

                            <br><p>A evolução do termo ao que conhecemos hoje é resultado de mais de 30 anos em pesquisas científicas aplicadas no mercado. Contar essa história será sempre de uma forma breve, já que não é possível contar a história de todas as disciplinas que esse tema abrange. Vamos agora voltar no tempo para conhecer onde essas disciplinas se encontram para resolver problemas no uso de sistemas.</p>

                            <br><h4 style="color: #465564"><strong>1857 - Ergonomia </strong></h4>
                            <hr>

                            <br><p>A revolução industrial proveu meios para a estruturação dos estudos sobre como criar ferramentas com as quais os trabalhadores das fábricas pudessem realizar suas atividades de forma mais eficiente. O desenvolvimento dessas metodologias resultou na Ergonomia, termo cunhado por Wojciech Jastrzębowski em 1857 (MACEDO, 2014). </p>

                            <br><!-- Saiba Mais -->
                            <div class="SaibaMaisCaixa">
                                <p class="SaibaMaisTitulo"> Saiba Mais</p>
                                <p class="SaibaMaisTexto">O termo <strong>ergonomia</strong> deriva das palavras gregas <em>ergon</em> ("trabalho") e <em>nomos</em> ("lei natural"). </p>
                            </div>

                            <br><br><h4 style="color: #465564"><strong>1885 - Pós-Revolução Industrial </strong></h4> 
                            <hr>

                            <br><p>Após o período da Revolução Industrial, o legado dos novos ambientes de trabalho manteve a necessidade de compreender como funcionários poderiam interagir com máquinas ou processos para entregar resultados de forma mais eficiente. A produtividade era o centro da produção Fordista e Taylorista, comumente aplicados na época.</p>

                            <br><!-- Saiba Mais -->
                            <div class="SaibaMaisCaixa">
                                <p class="SaibaMaisTitulo"> Saiba Mais</p>
                                <p class="SaibaMaisTexto"><a href="https://www.diferenca.com/taylorismo-fordismo-e-toyotismo/#:~:text=O%20Taylorismo%20e%20o%20Fordismo,grande%20produtividade%20com%20menor%20custo." target="_blank">O <strong>Taylorismo</strong> e o <strong>Fordismo</strong></a> enfatizaram os princípios de fabricação. O Taylorismo iniciou a partir do estudo da mão de obra na produção industrial, organizando o trabalho de modo a obter grande produtividade com menor custo. O Fordismo manteve o mecanismo de produção e organização semelhante ao taylorismo, porém adicionou a esteira rolante, ditando um novo ritmo de trabalho. O filme “Tempos Modernos”, de Charlie Chaplin representa bem esse estilo, como pode ser visto na <strong>Figura 14</strong>.</p>
                            </div><br>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura14.gif" data-bs-toggle="modal" data-bs-target="#Imagem14">
                                    <img class="img-fluid wow fadeInUp" data-wow-delay="0.5s" width="300" src="imagens/Figura14.gif" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura">Fonte: Google</p>
                            </div>

                            <!-- Imagem 14 - MODAL -->
                            <div class="modal fade text-center" id="Imagem14" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura14.gif" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 14:</strong> Uma esteira rolante industrial no filme “Tempos Modernos”</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 14 - End -->

                            

                            <br><p>Dentro desse contexto um casal de estudiosos se destacou: <strong>Lillian Gilbreth  e Frank Gilbreth</strong> (<strong>Figura 15</strong>). Ambos engenheiros e ela doutora em psicologia, uniram as duas áreas de atuação para entender sobre otimização de tempo e produtividade, aplicando resultados de um profundo estudo psicológico nos hábitos e produções industriais. Lillian Gilbreth ainda avançou em áreas como ergonomia de materiais, ferramentas e equipamentos voltados para atividades diárias. </p>

                            <br><p>O casal Gilbreth é mais conhecido no âmbito da Administração, mas, como mencionado anteriormente, a experiência de usuário é multidisciplinar e a bem conhecida <strong>análise de tempos e movimentos</strong> do casal influenciou no que aplicamos e entendemos hoje como UX. Afinal, nós continuamos em busca da otimização do tempo e de processos para simplificar tarefas e em busca de melhor produtividade. </p>

                            <br><div class="row">
                                <p class="TituloFigura text-center"><strong>Figuras 15 e 15.1:</strong> Casal Gilbreth e o livro sobre análise de tempos e movimentos</p>
                                <div class="col-sm">
                                    <!-- Titulo Figura -->
                                    <div class="text-center">
                                        <a href="imagens/Figura15.png" data-bs-toggle="modal" data-bs-target="#Imagem15">
                                            <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="250" src="imagens/Figura15.png" alt="Alt da imagem fica aqui">
                                        </a>
                                    </div>

                                    <!-- Imagem 15 - MODAL -->
                                    <div class="modal fade text-center" id="Imagem15" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img class="img-fluid" src="imagens/Figura15.png" alt="Alt da imagem fica aqui">
                                                </div>
                                                <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 15</strong> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Imagem 15 - End -->
                                    
                                </div>
                                <div class="col-sm">
                                    <!-- Titulo Figura -->
                                    <div class="text-center">
                                        <a href="imagens/Figura15.1.png" data-bs-toggle="modal" data-bs-target="#Imagem15_1">
                                            <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="190"  src="imagens/Figura15.1.png" alt="Alt da imagem fica aqui">
                                        </a>
                                    </div>

                                    <!-- Imagem 15.1 - MODAL -->
                                    <div class="modal fade text-center" id="Imagem15_1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img class="img-fluid" src="imagens/Figura15.1.png" alt="Alt da imagem fica aqui">
                                                </div>
                                                <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 15.1</strong> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Imagem 15.1 - End -->
                                          
                                </div>
                                <p class="FonteFigura text-center">Fonte: <a href="https://professorluizroberto.com/seguidores-de-taylor-o-casal-gilbreth/" target="_blank"> Casal Gilbreth</a> e <a href="https://www.marilia.unesp.br/Home/Eventos/2016/rodrigo-moreira-vieira.pdf" target="_blank">Blog Marília UNESP</p>
                            </div>

                            <br><!-- Saiba Mais -->
                            <div class="SaibaMaisCaixa">
                                <p class="SaibaMaisTitulo"> Saiba Mais</p>
                                <p class="SaibaMaisTexto"><a href="https://pt.wikipedia.org/wiki/Lillian_Moller_Gilbreth" target="_blank">Lillian Gilbreth</a> foi fundamental no desenvolvimento da cozinha moderna. A ela é creditada a invenção de latas de lixo com pedal e as prateleiras internas dos refrigeradores. Quando trabalhava na General Electric, ela entrevistou mais de quatro mil mulheres para desenvolver fogões, pias e outros equipamentos de cozinha com a altura e peso adequados.</p>
                            </div>

                            <br><br><h4 style="color: #465564"><strong>1879 - Psicologia aplicada</strong></h4>
                            <hr>

                            <br><p>Em outros lugares do mundo, cientistas estudavam os modelos de pensamento, sobre como realizamos as tarefas de maneira cognitiva, e o que nos motiva. Em 1879, Wilhelm Wundt fundou o primeiro laboratório de psicologia aplicada, como sensações táteis, percepções espaciais, processos atencionais, sentimentos e afetos, processos de associação e memória, etc (ARAUJO, 2009). A criação desse laboratório teve impacto em como as pesquisas eram realizadas e conduzidas. O protocolo de avaliação de UX hoje evoluiu a partir desse formato.</p>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura16.png" data-bs-toggle="modal" data-bs-target="#Imagem16">
                                    <img class="img-fluid wow fadeInDown" data-wow-delay="0.5s" width="300" src="imagens/Figura16.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura">Fonte: <a href="https://psicoativo.com/2016/08/quem-criou-o-primeiro-laboratorio-de-psicologia-experimental.html#:~:text=Wilhelm%20Wundt,para%20uma%20disciplina%20cient%C3%ADfica%20%C3%BAnica." target="_blank">Psicoativo</a></p>
                            </div>

                            <!-- Imagem 16 - MODAL -->
                            <div class="modal fade text-center" id="Imagem16" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura16.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 16:</strong>Wilhelm Wundt e sua equipe no laboratório de psicologia aplicada na Universidade de Leipzig, Alemanha</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 16 - End -->

                            

                            <br><h4 style="color: #465564"><strong>1918 - Primeira Guerra Mundial</strong></h4>
                            <hr>

                            <br><p>Com a Primeira Guerra Mundial, houve um aumento da importância de carros e aviões, e a emergência em estabelecer a nova ciência “<em>human factors</em>”, ou “fatores humanos” em português. As metodologias e <em>insights</em> da ergonomia e da psicologia foram usados para entender como as pessoas se comportavam enquanto utilizavam ferramentas complexas e submetidas a diferentes ambientes (MACEDO, 2014).</p>

                            

                            
          
                            <br><br><!-- SCRIPT LIGHTBOX -->
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
                    <a href="Topico03.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico03.2.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>
                    </div>
            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
