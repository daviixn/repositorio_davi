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
                            <h2 class="Titulo title-fixed2-1">02 - Interação Humano-Computador</h2>
                            <hr>
                        </div>
                            <br><p>O exemplo que foi apresentado na seção de “Apresentação” explora conceitos de Interação Humano-Computador aplicados a produtos físicos. IHC, entretanto, tem foco em sistemas computacionais. Desta forma seguiremos a partir daqui com exemplos de sistemas que podem ser aplicativos de celulares, como Whatsapp, softwares que você utiliza no computador, como Microsoft Word, sistemas embarcados em outros dispositivos, como sistemas que estão presentes nos caixas eletrônicos do seu banco, dentre outros. Isto não impede, porém, que os conceitos sejam utilizados de forma ampla em outros aspectos da vida. </p>

                            <br><p><strong>Interação Humano-Computador (IHC)</strong> é uma subárea da computação que está interessada na qualidade de uso de sistemas e no impacto destes sistemas na vida de seus usuários (BARBOSA; SILVA, 2010). IHC tem um foco diferente de Engenharia de Software, que busca proporcionar sistemas interativos mais eficientes, robustos, livres de erros e de fácil manutenção. Essas características de Engenharia de Software não garantem qualidade de uso, logo é possível ter um sistema robusto e livre de erros, que seja difícil de ser compreendido pelo usuário e pouco útil para ele.</p>
                            
                            <br><p>Diante desse cenário, há duas possibilidades para construção de um software:  </p>

                            <div class="row text-center">
                                <div class="col-sm">
                                    <p><em>(a)</em> De dentro para fora</p>
                                    <!-- Titulo Figura -->
                                    <div class="text-center">
                                        <a href="imagens/Figura02.png" data-bs-toggle="modal" data-bs-target="#Imagem02">
                                            <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s"   src="imagens/Figura02.png" alt="Alt da imagem fica aqui">
                                            
                                        </a>
                                    </div>

                                    <!-- Imagem 02 - MODAL -->
                                    <div class="modal fade text-center" id="Imagem02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img class="img-fluid"   src="imagens/Figura02.png" alt="Alt da imagem fica aqui">
                                                </div>
                                                <div class="modal-footer text-center">
                                                    <p class="TituloFigura"><strong>Figura 02</strong> - Abordagens de desenvolvimento </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Imagem 02 - End -->

                                </div>
                                <div class="col-sm">
                                    <p><em>(b)</em> De fora para dentro.</p>
                                    <!-- Titulo Figura -->
                                    <div class="text-center">
                                        <a href="imagens/Figura02.1.png" data-bs-toggle="modal" data-bs-target="#Imagem021">
                                            <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s"   src="imagens/Figura02.1.png" alt="Alt da imagem fica aqui">
                                            
                                        </a>
                                    </div>

                                    <!-- Imagem 02.1 - MODAL -->
                                    <div class="modal fade text-center" id="Imagem021" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img class="img-fluid"  src="imagens/Figura02.1.png" alt="Alt da imagem fica aqui">
                                                </div>
                                                <div class="modal-footer text-center">
                                                    <p class="TituloFigura"><strong>Figura 02.1</strong> - Abordagens de desenvolvimento </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Imagem 02.1 - End -->
                                </div>
                                <p class="FonteFigura"><strong>Fonte:</strong> BARBOSA; SILVA, 2010</p>
                            </div>

                            <br><p>Qual destas abordagens você considera a mais correta? A resposta é que não há uma abordagem correta e sim especificidades de construção do software que necessitam de uma ou outra abordagem.</p>

                            <br><!-- Fique Atento -->
                            <div class="FiqueAtentoCaixa">
                                <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                <p class="FiqueAtentoTexto">Cada projeto possui uma realidade própria que inclui tecnologias escolhidas, limitações de recursos, processo de desenvolvimento etc, assim como há um propósito para o qual o projeto existe. É necessário analisar esta realidade para definir características de projeto, como, por exemplo, a abordagem de desenvolvimento. Este é um dos papéis dos analistas de sistemas.</p>
                            </div>

                            <br><br><p>A concepção de <strong>dentro para fora</strong> tem ênfase na representação de dados e algoritmos que processam estes dados, assim como na arquitetura do sistema. Não é dada atenção a como esse software será utilizado e normalmente se pressupõe que haverá um esforço de quem o utiliza para que compreendê-lo bem. Por exemplo, sistemas que interagem somente com outros sistemas podem utilizar-se bem dessa abordagem para ter qualidade de construção como prioritária e se ajustar corretamente às limitações dos projetos</p>
                        <!---caixa de curiosidade  inicio pra baixo @emerson-->
                            <br><!-- Curiosidade -->
                            <div class="selva">
                                    <div class="animal animal2-1">
                                <p class="CuriosidadeTitulo"> Curiosidade</p>
                                <p class="CuriosidadeTexto">Esta abordagem é concebida em grande parte da Computação (BARBOSA; SILVA, 2010) e como resultado é comum que sistemas que possuem uma grande abrangência de usuários tenham interfaces não apropriadas.</p>
                            </div>
</div>
<!---final---->

                            <br><br><p>Para uma interface mais alinhada com o uso real do sistema, podemos utilizar a abordagem de <strong>fora para dentro</strong>, que começa investigando os atores envolvidos, seus interesses, objetivos, atividades, responsabilidades, motivações, os artefatos utilizados, o domínio, o contexto de uso, dentre outros (BARBOSA; SILVA, 2010), para somente depois identificar oportunidades de intervenção na interação atual e como essa estrutura será viabilizada pelas tecnologias utilizadas.</p><br><br>

                        
                           
                            

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
                    <a href="Topico01.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico02.1.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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
