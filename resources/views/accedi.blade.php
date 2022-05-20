
<!DOCTYPE html>
<html>
<head>


    <!-- Webpage Title -->
    <title>AirStudents</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/fontawesome-all.css')}}" rel="stylesheet">
    <link href="{{asset('css/swiper.css')}}" rel="stylesheet">
	<link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet">
	<link href="{{asset('css/styles.css')}}" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="{{asset('images/favicon.png')}}">
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
            <a class="navbar-brand logo-image" href="{{route('home')}}"><img src="images/logo.png"></a> 

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#description">DESCRIZIONE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="accedi.html">ACCEDI</a>
                    </li>
                </ul>
                <span class="nav-item">
                    <a class="btn-outline-sm page-scroll" href="#download">REGISTRATI</a>
                </span>
            </div>
        </div> 
    </nav> 

    <header id="header" class="ex-header" style="background-color: white; padding-bottom: 3em; padding-top: 13em;">
        <div>
            <div>
                <div class="col-md-12">
                    <h1>Accedi al tuo account</h1>
                </div> 
            </div> 
        </div> 
    </header> 

    

    <!-- Login Form -->
    <div class="form-container" style="margin: auto; max-width: 40%; margin-bottom: 10em;">
            <form id="privacyForm" data-toggle="validator" data-focus="false">
                <div class="form-group">
                    <input type="text" class="form-control-input" id="username" required>
                    <label class="label-control">Username</label>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control-input" id="password" required>
                    <label class="label-control" >Password</label>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group checkbox p-small">
                    <p>Non hai un account? <a href="http://www.apple.com/it">Registrati cliccando qui</a></p>
                </div>
                <div class="form-group">
                    <button type="submit" class="form-control-submit-button">ACCEDI</button>
                </div>
            </form>
    </div> <!-- end of form container -->
        

    


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

