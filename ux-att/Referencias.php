<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>
<?php
$page = 'Referencias';
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
            <div class="main-content container-fluid">
                <div class="row"> <!-- Begin row -->
                    <div class="col-md-1"></div>
                    <div class="col-md-10"> <!-- Begin col-md-10 -->
                        <div class="page-title">
                    
                            <h2 class="Titulo">REFERÊNCIAS</h2>

                            <p></p>

                            <p class="Texto">BARBOSA, Simone; SILVA, Bruno. <strong>Interação humano-computador</strong>. Elsevier Brasil, 2010.</p>

                            <p class="Texto">ROGERS, Yvonne; SHARP, Helen; PREECE, Jennifer. <strong>Design de Interação</strong>. Bookman Editora, 2013.</p>

                            <p class="Texto">HEWETT, Thomas T. et al. <strong>ACM SIGCHI curricula for human-computer interaction</strong>. ACM, 1992.</p>

                            <p class="Texto">Nomofobia: uso abusivo de celular gera novas doenças. Diário do Nordeste. Fortaleza, Ceará, 2019.</p>

                            <p class="Texto"> WEST, Mark; KRAUT, Rebecca; EI CHEW, Han. I'd blush if I could: closing gender divides in digital skills through education. 2019.</p>

                            <p class="Texto">BOSTROM, Nick; YUDKOWSKY, Eliezer. The ethics of artificial intelligence. <strong>The Cambridge handbook of artificial intelligence</strong>, v. 1, p. 316-334, 2014.</p>

                            <p class="Texto">GOVERNO DO RIO GRANDE DO SUL, Manual para uso não sexista da linguagem. Porto Alegre, 2014.</p>

                            <p class="Texto">CHEOK, Adrian David. Kawaii/cute interactive media. In: <strong>Art and technology of entertainment computing and communication</strong>. Springer, London, 2010. p. 223-254.</p>

                            <p class="Texto">DE SOUZA, André Antônio; GRIMALDI, Madalena Ribeiro. AS MARCAS CONTEMPORÂNEAS E SUAS PECULIARIDADES GRÁFICAS. 2015.</p>

                            <p class="Texto">MORAN, Thomas P.; CARROLL, John M. Design <strong>rationale: Concepts, techniques, and use</strong>. L. Erlbaum Associates Inc., 1996.</p>

                            <p class="Texto">WEINSCHENK, S. The secret to designing an intuitive UX: Match the mental model to the conceptual model. <strong>Retrieved</strong>, v. 12, n. 11, p. 2010, 2010.</p>

                            <p class="Texto">GOTHELF, Jeff. <strong>Lean UX: Applying lean principles to improve user experience</strong>. " O'Reilly Media, Inc.", 2013.</p>

                            <p class="Texto">MACEDO, Paula. Origens de User Experience. UX Collective. 2014. Disponível em <a href="https://brasil.uxdesign.cc/origens-de-user-experience-9d23f67f7c77" target="_blank"> https://brasil.uxdesign.cc/origens-de-user-experience-9d23f67f7c77 </a>.</p>

                            <p class="Texto">REBELO, Irla B. <strong>Interação e avaliação</strong>. Apostila. Brasília, DF. Última atualização em novembro de 2009. Disponível em <a href="https://irlabr.wordpress.com/apostila-de-ihc/" target="_blank">irlabr.wordpresss.com</a>.</p>

                            <p class="Texto">WURMAN, Richard Saul. <strong>Ansiedade de Informação</strong> Como Transformar Informação em Compreensão. São Paulo: Cultura Editora Associados, 1991.</p>

                            <p class="Texto">FERNANDEZ, Amyriz. Usabilidade & Governo Eletrônico. <strong>Usabilidade & Design de Interação</strong>. <a href="https://www.usabilityexpert.com.br/" target="_balnk">www.UsabilityExpert.com.br</a> Material de curso de usabilidade, 2007.</p>

                            <p class="Texto">SAFFER, Dan. <strong>Designing for interaction: creating innovative applications and devices</strong>. New Riders, 2010</p>

                            <p class="Texto">NIELSEN, Jakob. <strong>Are users stupid</strong>? The Psychology of Everyday Things, Basic Books, New York, 2001. Disponível em: <a href="https://www.nngroup.com/articles/are-users-stupid/" target="_blank">https://www.nngroup.com/articles /are-users-stupid/</a></p>

                          
          
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
                </div> <!-- End row-->

                <!-- Botões de navegação -->
                <div class="text-center">
                    <a href="Topico06.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="http://cursos.egp.ce.gov.br/mod/quiz/view.php?id=744" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-tasks"></i> Realizar Avaliação 01 </a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
