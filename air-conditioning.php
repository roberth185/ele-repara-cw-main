<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Ele Repara - Ar condicionado</title>

<!-- Fav Icon -->
<link rel="icon" href="http://elerepara.pt/assets/images/favicoon.png" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="assets/css/font-awesome-all.css" rel="stylesheet">
<link href="assets/css/flaticon.css" rel="stylesheet">
<link href="assets/css/owl.css" rel="stylesheet">
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
<link href="assets/css/animate.css" rel="stylesheet">
<link href="assets/css/color.css" rel="stylesheet">
<link href="assets/css/elpath.css" rel="stylesheet">
<link href="assets/css/jquery-ui.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">

</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">


        <!-- preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">x</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="e" class="letters-loading">
                                E
                            </span>
                            <span data-text-preloader="a" class="letters-loading">
                                l
                            </span>
                            <span data-text-preloader="s" class="letters-loading">
                                e
                            </span>
                            <br>
                            <br>
                            <span data-text-preloader="t" class="letters-loading">
                                 
                            </span>
                            <span data-text-preloader="o" class="letters-loading">
                                r
                            </span>
                            <span data-text-preloader="n" class="letters-loading">
                                e
                            </span>
                            <span data-text-preloader="n" class="letters-loading">
                                p
                            </span>
                            <span data-text-preloader="n" class="letters-loading">
                               a
                            </span>
                            <span data-text-preloader="n" class="letters-loading">
                                r
                            </span>
                            <span data-text-preloader="n" class="letters-loading">
                                a
                            </span>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        <!-- preloader end -->


        <!--Search Popup-->
        <div id="search-popup" class="search-popup">
            <div class="popup-inner">
                <div class="upper-box clearfix">
                    <figure class="logo-box pull-left"><a href="index.php"><img src="http://elerepara.pt/assets/images/logo-4.png" alt=""></a></figure>
                    <div class="close-search pull-right"><span class="far fa-times"></span></div>
                </div>
                <div class="overlay-layer"></div>
                <div class="auto-container">
                    <div class="search-form">
                        <form method="post" action="index.php">
                            <div class="form-group">
                                <fieldset>
                                    <input type="search" class="form-control" name="search-input" value="" placeholder="Type your keyword and hit" required >
                                    <button type="submit"><i class="far fa-search"></i></button>
                                </fieldset>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- main header -->
        <?php include "common/header.php"; ?>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <?php include "common/mobile-menu.php"; ?>
        <!-- End Mobile Menu -->


        <!-- Page Title -->
        <section class="page-title centred">
            <div class="bg-layer parallax-bg" data-parallax='{"y": 100}' style="background-image: url(http://elerepara.pt/assets/images/background/page-title-3.jpg);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h2>Instalação e Manutenção de Ar Condicionado!</h2>
                    <ul class="bread-crumb clearfix">
                        <!-- <li><a href="index.php">Home</a></li>
                        <li>Services</li>
                        <li>Air Conditioning</li> -->
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- service-details -->
        <section class="service-details p_relative">
            <div class="auto-container">
                <div class="row clearfix">
                    <!-- <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="service-sidebar mr_50">
                            <ul class="accordion-box">
                                <li class="accordion block active-block">
                                    <div class="acc-btn active">
                                        <div class="icon-outer"></div>
                                        <h5>Domestic Services</h5>
                                    </div>
                                    <div class="acc-content current">
                                        <ul class="service-list clearfix">
                                            <li><a >Ar condicionado</a></li>
                                            <li><a >Serviços de aquecimento</a></li>
                                            <li><a >Instalação e manunteção elétrica</a></li>
                                            <li><a >Painéis Elétricos</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer"></div>
                                        <h5>Industrial Services</h5>
                                    </div>
                                    <div class="acc-content">
                                        <ul class="service-list clearfix">
                                            <li><a >Ar condicionado</a></li>
                                            <li><a >Serviços de aquecimento</a></li>
                                            <li><a >Instalação e manunteção elétrica</a></li>
                                            <li><a >Painéis Elétricos</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer"></div>
                                        <h5>Commercial Services</h5>
                                    </div>
                                    <div class="acc-content">
                                        <ul class="service-list clearfix">
                                            <li><a >Ar condicionado</a></li>
                                            <li><a >Serviços de aquecimento</a></li>
                                            <li><a >Instalação e manunteção elétrica</a></li>
                                            <li><a >Painéis Elétricos</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div> -->
                    <div class="col-lg-12 col-md-12 col-sm-12 content-side">
                        <div class="service-details-content">
                            <div class="content-two p_relative d_block">
                                
                                <div class="row clearfix">
                                <div class="content-one p_relative d_block">
                                <!-- <figure class="image-box"><img src="http://elerepara.pt/assets/images/service/service-15.jpg" alt=""></figure> -->
                                
                            </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 ">
                                    <h3>Ar condicionado </h3>
                                    <p>A manutenção de sistemas de ar condicionado é uma tarefa importante para assegurar o correcto funcionamento e eficiência dos equipamentos. Com o passar do tempo, os sistemas de ar condicionado acumulam sujidade e pó, o que pode afetar o seu desempenho e aumentar o consumo de energia. Além disso, a falta de uma manutenção adequada pode resultar em falhas e problemas mais graves, como vazamentos de refrigerante e danos no equipamento. <br> <br>

A empresa Ele Repara tem a solução para este tipo de trabalho. Com uma equipa altamente qualificada e experiente, a Ele Repara oferece serviços de manutenção eficientes e fiáveis para sistemas de ar condicionado. Desde a verificação e limpeza de filtros até à revisão de componentes críticos, como compressores e evaporadores, a Ele Repara assegura que o seu sistema de ar condicionado esteja sempre a funcionar correctamente. <br> <br>

A Ele Repara também oferece soluções personalizadas para responder às necessidades específicas de cada cliente. Seja para uma única unidade ou para um sistema de ar condicionado em grande escala, a Ele Repara trabalha de perto com cada cliente para garantir que as suas necessidades sejam satisfeitas de forma eficiente e efectiva.

Não deixe que a falta de manutenção comprometa o desempenho do seu sistema de ar condicionado. A empresa Ele Repara tem a solução para garantir que o seu sistema esteja sempre a funcionar a todo o vapor. Entre em contacto hoje mesmo e solicite um orçamento!</p><br> 
                                  <br>
                                 
                                </div>
                                
                             
                                   
                                <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                        
                                        
                                        <figure class="image-box"><img src="http://elerepara.pt/assets/images/service/service-16.jpg" alt=""></figure>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                        <figure class="image-box"><img src="http://elerepara.pt/assets/images/service/service-17.jpg" alt=""></figure>
                                    </div>
                                </div>
                            </div>
                            <div class="content-one p_relative d_block">
                                <!-- <figure class="image-box"><img src="http://elerepara.pt/assets/images/service/service-15.jpg" alt=""></figure> -->
                                <div class="text">
                                    <h3>Serviços</h3>
                                    <p>Cada componente tem uma função importante no funcionamento de um sistema de ar condicionado e é fundamental mantê-los em boas condições para garantir um desempenho eficiente e seguro.</p>
                                    
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 list-column">
                                        <ul class="list-style-one clearfix">
                                            <li>Instalação e manutenção de Condutas.</li>
                                            <li>Instalação e manutenção de split.</li>
                                            <li>Instalação e manutenção de multisplit.</li> 
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 list-column">
                                        <ul class="list-style-one clearfix">
                                            <li> Instalação e manutenção de sistemas AVAC.</li>
                                            <li>Instalação Elétrica.</li>
                                            <li>Limpeza regulares de filtros.</li>
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="content-two p_relative d_block">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                        <figure class="image-box"><img src="http://elerepara.pt/assets/images/service/service-200.jpg" alt=""></figure>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                        <figure class="image-box"><img src="http://elerepara.pt/assets/images/service/service-170.jpg" alt=""></figure>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="content-two p_relative d_block">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                        <figure class="image-box"><img src="http://elerepara.pt/assets/images/service/service-180.jpg" alt=""></figure>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                        <figure class="image-box"><img src="http://elerepara.pt/assets/images/service/service-190.jpg" alt=""></figure>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <div class="content-three">
                                
                                <p>Não espere até ter problemas com o seu sistema de ar condicionado para entrar em contacto com a Ele Repara. Marque já uma avaliação e peça um orçamento para assegurar que o seu sistema de ar condicionado esteja sempre a funcionar a todo o vapor. Contacte a Ele Repara agora mesmo para obter mais informações sobre os nossos serviços e como podemos ajudá-lo.</p>
                                <ul class="list-style-one clearfix">
                                    
                                </ul>
                                <div class="btn-box"><a href="service.php" class="theme-btn btn-one">CONTACTE-NOS</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-details end -->


        <!-- subscribe-section -->
        <!-- <section class="subscribe-section p_relative">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="row align-items-center clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 text-column">
                            <div class="text p_relative d_block">
                                <h2>Subscribe to Our Newsletter</h2>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                            <div class="form-inner p_relative d_block">
                                <form action="index.php" method="post">
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Your email address" required="">
                                        <button type="submit">Subscribe Now<i class="icon-7"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- subscribe-section end -->


        <!-- main-footer -->
        <?php include "common/footer.php"; ?>
        <!-- main-footer end -->



        <!--Scroll to top-->
        <div class="scroll-to-top">
            <div>
                <div class="scroll-top-inner">
                    <div class="scroll-bar">
                        <div class="bar-inner"></div>
                    </div>
                    <div class="scroll-bar-text">Go To Top</div>
                </div>
            </div>
        </div>
        <!-- Scroll to top end -->
        
    </div>


    <!-- jequery plugins -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/scrollbar.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/parallax-scroll.js"></script>

    <!-- main-js -->
    <script src="assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->
</html>
