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

                            <div class="title-fixed">
                            <h2 class="Titulo">01 - Apresentação</h2>
                            <hr>
                            </div>
                            
                            <br>
                         
                            <p> Antes de entender o que é de fato <em>design UX</em>, ou design de experiência do usuário, precisamos entender conceitos fundamentais da área. O que vamos aprender neste curso são os conceitos básicos, a história e quem é o usuário. Ao longo deste material vamos utilizar o termo design UX, como é comumente chamado no mundo da tecnologia da informação. UX é um acrônimo do termo inglês <em>User eXperience</em>, que em português é <strong>experiência do usuário</strong>.</p>

                            <br><!-- Importante -->
                            <div class="ImportanteCaixa ">
                                <p class="ImportanteTitulo"> Dica</p>
                                <p class="ImportanteTexto">Este é um curso introdutório. Então vamos conhecer o que é fundamental para você entender <em>design UX</em> na área de tecnologia ou em outros âmbitos da vida.</p>
                            </div>

                            <br><br><p>Quando você compra algum dispositivo, objeto ou mesmo um aplicativo de celular, alguém pensou e planejou como esse objeto ou aplicativo iria se comunicar com você, isto é, de que forma você interagiria com ele. Vamos a um exemplo prático!</p>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura01.png"  data-bs-toggle="modal" data-bs-target="#Imagem01">
                                    <img class="img-fluid wow fadeInUp" data-wow-delay="0.5s" src="imagens/Figura01.png" alt="Radio Bluetooth N80">
                                </a>
                                <p class="FonteFigura"><strong>Fonte:</strong> autor.</p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura01.png" alt="Radio Bluetooth N80">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 01:</strong> Radio Bluetooth N80</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 01 - End -->

                            <br><p>Na <strong>Figura 1</strong> você está vendo um rádio <em>bluetooth</em> que foi comprado em uma loja de eletrônicos no Beco da Poeira, no Centro de Fortaleza. Com uma marca desconhecida que o identifica como N80, o dispositivo tinha um “ar” vintage, que trazia características belas e antigas, como o acabamento externo que lembrava madeira, e funcionalidades modernas, como tocar áudio se conectado ao celular. Com um valor bem mais acessível que as marcas famosas, o objeto ganhou apreço e um espaço na minha sala de estar. Apesar de não conhecer a marca ou o dispositivo, o vendedor falou de funcionalidades e características que eu já conhecia:</p>

                            <ol>
                                <li class="wow fadeInRight" data-wow-delay="1.0s">Tem caixas de som;</li>
                                <li class="wow fadeInRight" data-wow-delay="1.3s">Toca som via <em>bluetooth</em> ou <em>pen drive</em> (dispositivo de armazenamento USB);</li>
                                <li class="wow fadeInRight" data-wow-delay="1.6s">Toca rádio AM e FM.</li>
                            </ol>

                            <br><p>Em casa, após retirá-lo da caixa, analisei o objeto que acabei de comprar e olhei tudo aquilo que parecia ser clicável ou que se movimentava: botões, antena etc. É comum analisarmos objetos novos. Algo que chamou bastante atenção foi um item brilhoso logo na parte da frente dele...</p>

                            <br><p>Para você fazer parte dessa experiência de primeiro uso, analise o N80, <strong>Figura 1</strong>. O que este item metálico faz? Qual a sua principal funcionalidade? Escolha uma das opções abaixo: </p>

                            <ol type="a">
                                <li class="wow fadeInRight" data-wow-delay="1.0s">Sintoniza as rádios;</li>
                                <li class="wow fadeInRight" data-wow-delay="1.3s">Passa e retorna as músicas;</li>
                                <li class="wow fadeInRight" data-wow-delay="1.6s">Aumenta e reduz o volume;</li>
                                <li class="wow fadeInRight" data-wow-delay="1.9s">É um item de enfeite.</li>
                            </ol>

                            <p>A resposta correta é o item d, mas provavelmente você escolheu um dos itens a, b ou c. Por que isso acontece?</p>

                            <br><p>Isso acontece porque guardamos lembranças dos dispositivos que já utilizamos. Este componente visual e físico lembra botões que aumentam volume ou têm outras ações conhecidas de outros rádios que já utilizamos. Tornar um item que se assemelha a um botão como item decorativo é algo que pode confundir quem o utiliza. O design de um produto ou de um processo deve ser algo bem estruturado e pautado em quem o utiliza, que chamaremos de <strong>usuário</strong>.</p>

                            <br><p>Neste exemplo podemos fazer perguntas importantes que devem ser respondidas pelo processo de design e que são a base do conceito de design UX:</p>

                            <div style="font-weight:bold;">
                                <ol>
                                    <li class="wow fadeInRight" data-wow-delay="1.0s">É fácil de aprender?</li>
                                    <li class="wow fadeInRight" data-wow-delay="1.3s">É fácil de recordar?</li>
                                    <li class="wow fadeInRight" data-wow-delay="1.6s">Você se sente satisfeito?</li>
                                </ol>
                            </div>

                            <br><!-- Fique Atento -->
                            <div class="FiqueAtentoCaixa">
                                <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                <p class="FiqueAtentoTexto">Estas perguntas podem ser direcionadas somente ao “botão”, um item da interface, mas também podem ser aplicadas de forma global ao produto. Em alguns aspectos do <em>design UX</em>, é possível mensurar até a experiência completa que se inicia na compra ou no ato de desembalar o produto da caixa após comprar. Vamos à teoria?</p>
                                </div><br><br>


                                                             
                            
                            
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

                    <!-- deixamos os botoes um ao lado do outro -->
                    <div class="container-text-center">
                    <div class="text-center buttons">
                        <a href="index.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                        <a href="Topico02.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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
