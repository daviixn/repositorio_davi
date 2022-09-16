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
                            <h2 class="Titulo">05 - Quem é Usuário?</h2>
                            <hr>
                        </div>
                            <br>

                            <p>Agora vamos entender <strong>quem é o usuário</strong> que citamos durante todo o curso. Afinal, se vamos trazê-lo ao centro do design, precisamos saber de que forma devemos encontrá-lo.</p>

                            <br><p>Uma premissa bastante utilizada durante reuniões em equipes de desenvolvimento de software é: <strong>“Eu, como usuário, faria …”</strong>. A partir deste momento algum desenvolvedor ou outro perfil da equipe se coloca no papel de usuário e estabelece alguma opinião sobre a interface ou interação que ele próprio está construindo. Vemos dois grandes problemas nessa forma de dar opinião:</p>

                            <ol class="none">
                                <li class="wow fadeInRight" data-wow-delay="1.0s"><i class="fa fa-check-circle CorVerdeClaroEstado"></i> Os usuários reais em sua maioria não desenvolvem os sistemas que utilizam.</li>
                                <li class="wow fadeInRight" data-wow-delay="1.3s"><i class="fa fa-check-circle CorVerdeClaroEstado"></i> Perfis dentro de uma equipe de desenvolvimento de sistemas tendem a ter um conhecimento avançado em tecnologias, isto também é algo muito diferente da realidade da maioria dos usuários.</li>
                            </ol>

                            <br><p>Apesar de o termo ser simples, há muitas interpretações para o termo “usuário” e envolvê-los de forma correta é fundamental para um design centrado no usuário bem-sucedido. De acordo com Rogers e Preece (2013), a definição mais óbvia diz respeito às <strong>“pessoas que interagem diretamente com o produto para realizar uma tarefa”</strong>. Porém, outros autores apresentam mais definições relacionadas. </p>
                            
                            <br><p>Rogers e Preece (2013) citam outro autor que elenca usuário primários, secundários e terciários, que são definidos como:</p>

                            <ol class="none">
                                <li class="wow fadeInRight" data-wow-delay="1.0s"><i class="fa fa-check-circle CorVerdeClaroEstado"></i> <strong>Usuário primários:</strong> são aqueles propensos a serem usuários frequentes do sistema;</li>
                                <li class="wow fadeInRight" data-wow-delay="1.3s"><i class="fa fa-check-circle CorVerdeClaroEstado"></i> <strong>Usuários secundários:</strong> são usuários ocasionais ou aqueles que usam através de um intermediário;</li>
                                <li class="wow fadeInRight" data-wow-delay="1.6s"><i class="fa fa-check-circle CorVerdeClaroEstado"></i> <strong>Usuários terciários:</strong> são aqueles afetados pela introdução do sistema ou que influenciarão sua compra.</li>
                            </ol>

                            
                            <br><p>Os projetos, em geral, possuem um conjunto grande de pessoas que estão relacionadas a ele, que são chamadas de <em>stakeholders</em>, ou partes interessadas em português. As partes interessadas têm influência direta ou indireta sobre os requisitos do sistema. Sobre todos esses perfis, é importante ressaltar que <strong>o cliente nem sempre é o usuário final</strong>. Então, para manter o foco no usuário, é interessante se questionar se os requisitos que são recebidos pelo cliente estão resolvendo as necessidades do usuário. Esse questionamento não é fácil de ser colocado dentro do contexto empresarial, mas é importante para o resultado final. </p>

                            <br><p>Outra premissa que surge dentro do contexto de desenvolvimento do software é que <strong>“os usuários são burros”</strong> quando não conseguem se adequar à uma interação proposta. Alguns opositores do movimento de usabilidade também utilizam-se dessa premissa, afirmando que usabilidade se foca em usuários burros e que a maioria dos “outros” usuários podem facilmente superar a complexidade proposta por um sistema (NIELSEN, 2001).   </p>

                            <!-- CITAÇÃO -->
                <div class="bd-callout bd-callout-success">
                    <p class="Texto">
                    Como vimos anteriormente, nem sempre o modelo conceitual apresentado numa interface irá representar o modelo mental de seus usuários.  Porém a resposta a este questionamento não está de fato nessa questão. De acordo com Nielsen (2001), <strong>até usuários inteligentes preferem atingir seus próprios objetivos ao navegar em sistemas de forma pessoal</strong>. Não é uma questão de saber se os usuários são capazes de superar a complexidade e aprender uma interface de usuário avançada. É uma questão de saber se eles estão dispostos a fazê-lo.</p>
                    </p>
                </div>

                            <br><p></p>

                            



                            
          
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
                    <a href="Topico04.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico06.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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
