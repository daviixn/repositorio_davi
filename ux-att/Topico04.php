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
                        <div class="title-fixed">
                            <h2 class="Titulo">04 - Disciplinas de UX</h2>
                            <hr>
                        </div>
                            <br>

                            <p>Com um mercado multidisciplinar, vários profissionais, como sociólogos, antropólogos, dramaturgos, combinam habilidades para encontrar as melhores soluções de interação (REBELO, 2009). O campo de UX é situado junto com outras disciplinas e construído pelas intersecções e metodologias de avaliação (MACEDO, 2014). As principais áreas envolvidas por UX são: psicologia; sociologia; antropologia; sistemas de informação; ciências da computação; design gráfico; e ergonomia.</p>

                            <br><!-- Curiosidade -->
                            <div class="selva">
                                <div class="animal animal2-1">
                                <p class="CuriosidadeTitulo"> Curiosidade</p>
                                <p class="CuriosidadeTexto">Você consegue imaginar o quão diferente é uma interface que é desenvolvida a partir de processos de UX com outra que não é?  IHC é resultado da soma de esforços entre dois mundos: cientistas da computação, que desenvolvem sistemas, linguagens e arquiteturas, e psicólogos, envolvidos no projeto de interface, informam o cientista a respeito das capacidades humanas (REBELO, 2009).</p>
                            </div>
                        </div>

                            <br><br><p>Dan Saffer, em seu livro <em>“Designing for Interaction”</em>, explica que o foco no tecido conectivo entre as disciplinas torna os produtos holísticos. Cada disciplina só pode ir até certo ponto com as restrições sob as quais trabalham. Desta forma, todas as disciplinas precisam trabalhar juntas para descobrir soluções para as falhas do produto. Ainda nesse livro, cita as disciplinas que estão relacionadas com UX. Baseado nesse conjunto, a Figura 17 apresenta um infográfico que é a tradução do infográfico desenvolvido pela <a href="http://www.envis-precisely.com/" target="_blank"><em>Envis Pricisely</em></a>. <a href="https://beatrizmm.medium.com/disciplinas-de-ux-6df6dc51e00" target="_blank">Clique aqui</a> para ver o infográfico em detalhes.  </p>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura19.png" data-bs-toggle="modal" data-bs-target="#Imagem19">
                                    <img class="img-fluid wow fadeInUp" data-wow-delay="0.5s" width="400" src="imagens/Figura19.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura">Fonte: <a href="https://visual.ly/community/Infographics/computers/disciplines-user-experience-design" target="_blank">Envis Pricisely</a></p>
                            </div>

                            <!-- Imagem 19 - MODAL -->
                            <div class="modal fade text-center" id="Imagem19" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura19.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 19:</strong> Disciplinas de UX</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 01 - End -->

                        
                       
                        


                            
          
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
                    <a href="Topico05.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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
