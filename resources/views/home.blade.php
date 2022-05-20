<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>


    <!-- Webpage Title -->
    <title>AirStudents</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navigation bar-->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand logo-image" href="index.html"><img src="images/logo.png"></a> 

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#description">DESCRIZIONE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="">ACCEDI</a>
                    </li>
                </ul>
                <span class="nav-item">
                    <a class="btn-outline-sm page-scroll" href="#download">REGISTRATI</a>
                </span>
            </div>
        </div> 
    </nav> 
    
    


    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container">
                        <h1>Benvenuto in AirStudents</h1>
                        <p class="p-large p-heading">Se sei uno studente in cerca di un alloggio ad Ancona, in questo sito potrai scegliere un posto letto o un appartamento fra le numerose offerte messe a disposizione. 
                                                    Se invece sei proprietario di un immobile e vuoi metterlo in affitto a uno studente, potrai inserirlo nel catalogo del sito e aspettare che qualcuno
                                                    si interessi al tuo annuncio.
                        </p>
                        <a class="btn-solid-lg" href="#your-link">ESPLORA IL CATALOGO</a>
                    </div>
                </div> 
            </div> 
            <div class="row">
                <div class="col-lg-12">
                    <div class="image-container">
                        <img class="img-fluid" src="images/ancona.png">
                    </div> 
                </div> 
            </div> 
        </div> 
        <div class="deco-white-circle-1">
            <img src="images/decorative-white-circle.svg">
        </div> 
        <div class="deco-white-circle-2">
            <img src="images/decorative-white-circle.svg">
        </div> 
        <div class="deco-blue-circle">
            <img src="images/decorative-blue-circle.svg">
        </div>
        <div class="deco-yellow-circle">
            <img src="images/decorative-yellow-circle.svg">
        </div>
        <div class="deco-green-diamond">
            <img src="images/decorative-green-diamond.svg">
        </div>
    </header>

    



    <!-- Description 2 -->
    <div class="tabs">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="tabs-container">
                        <div class="tab-content" id="cedoTabsContent">
                            <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1" style="font-size: 1.2em;">
                                <p style="font-size: 0.9em;"><b>Affitta l'alloggio che ti piace di più in 3 semplici passi:</b>  </p>
                                <ul class="list-unstyled li-space-lg">
                                    <li class="media">
                                        <i class="far fa-check-square"></i>
                                        <div class="media-body">Effettua una nuova ricerca impostando i filtri a seconda delle tue esigenze</div>
                                    </li>
                                    <li class="media">
                                        <i class="far fa-check-square"></i>
                                        <div class="media-body">Sfoglia i risultati che soddisfano i tuoi criteri</div>
                                    </li>
                                    <li class="media">
                                        <i class="far fa-check-square"></i>
                                        <div class="media-body">Invia una richiesta al proprietario grazie a un semplice meccanismo di messagistica interna al sito</div>
                                    </li>
                                </ul>
                            </div> 
                        </div> 
                    </div> 
                </div> 

                <div class="col-lg-6">
                    <img class="img-fluid" src="images/camere-home.png" alt="alternative">
                </div>
            </div> 
        </div> 
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="container foot">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-col first" style="margin-right: 5em;">
                        <h5>About AirStudent</h5>
                        <p class="p-small">AirStudent è un sito finalizzato a far incontrare l’offerta di locazione di alloggi della città di Ancona a studenti con la relativa domanda.</p>
                    </div>
                    <div class="footer-col second" style="margin-right: 5em;">
                        <h5>Contatti</h5>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li class="media">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="media-body" style="width: 18em;">Via Brecce Bianche 12, Ancona </div>
                            </li>
                            <li class="media">
                                <i class="fas fa-envelope"></i>
                                <div class="media-body"><a href="#your-link">airstudents@gmail.com</a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-phone-alt"></i>
                                <div class="media-body"><a href="#your-link">+071 459 8765</a></div>
                            </li>
                        </ul>
                    </div> 
                    <div class="footer-col third" style="margin-right: 5em;">
                        <h5>Link utili</h5>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li><a href="terms-conditions.html">Termini e Condizioni</a></li>
                            <li><a href="privacy-policy.html">Informativa sulla Privacy</a></li>
                        </ul>
                    </div> 
                    <div class="footer-col fourth" style="width: max-content;">
                        <h5>Domande frequenti</h5>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li><a href="#your-link">Leggi le FAQ</a></li>
                        </ul>
                    </div>
                </div> 
            </div> 
        </div> 
    </div>


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2022 - Gruppo TW22</p>
                </div> 
            </div> 
        </div> 
    </div> 
    
    	
    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>
    
    
</html>
