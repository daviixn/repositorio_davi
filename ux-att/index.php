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
            
                <div class="main-content container-fluid" id="#Apresentacao"> <!-- Begin main-content -->
                    <div class="row"> <!-- Begin row -->
                        <div class="col-md-1"></div>
                        
                        <div class="col-md-10"> <!-- Begin col-md-10 -->
                            <div class="page-title Texto">
                            
                            
                            <h2 class="Titulo">Objetivos</h2>
                            <hr>

                            
                        <!-- colocamos h4 em cada item das listas  -->
                            <ol>
                                <h4><li>Apresentar o termo UX (“experiência do usuário”)</li></h4>
                               <h4><li>Discutir as áreas de estudo relacionadas ao tema</li></h4> 
                               <h4> <li>Apresentar uma breve história de UX</li></h4>
                                <h4><li>Questionar quem é o usuário</li></h4>
                                <h4><li>Entender os benefícios da aplicação de design UX</li></h4>
                            </ol>
                                                                       
                                          
                            
                            <!-- SCRIPT LIGHTBOX -->
                            <script>
                                $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                    event.preventDefault();
                                    $(this).ekkoLightbox();
                                });  
                                
                               

                            </script>

                            </div> <!-- End page-title -->                            
                        </div> <!-- End page-title -->

                        <div class="col-md-1"></div>
                    </div> <!-- End row -->
                    
                    <!-- Botões de navegação -->
                    
                    <div class="container-text-center">
                    <div class="text-center">
                        <a href="Topico01.php" class="btn btn-primary" role="button" aria-pressed="true"> Próximo <i class="fa fa-chevron-right"></i></a>
                    </div>
                    </div>
                </div> <!-- End main-content -->                 

            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
