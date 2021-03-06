<!DOCTYPE html>
<html>
    <head>
        <meta name="" content="" charset="UTF-8">
        <title>@yield('title', 'Curso de Laravel 5')</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>   
    <body>
        <nav class="light-blue lighten-1" role="navigation">
            <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Compuzoft</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="#">Navbar Link</a></li>
                </ul>

                <ul id="nav-mobile" class="side-nav">
                    <li><a href="#">Navbar Link</a></li>
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
            </div>
        </nav>
        <!--<div class="section no-pad-bot" id="index-banner">
            <div class="container">
                <br><br>
                <h1 class="header center orange-text">Curso Basico de Laravel 5</h1>
                <div class="row center">
                    <h5 class="header col s12 light">Clic en el boton para Descargar el Certificado</h5>
                </div>
                <div class="row center">
                    <a href="dowload.php" id="download-button" class="btn-large waves-effect waves-light orange">Descargar Certificado</a>
                </div>
                <br><br>
            </div>
        </div>-->
        @yield('content')
        <footer class="page-footer orange">
            <div class="footer-copyright">
                <div class="container">
                    Made by <a class="orange-text text-lighten-3" href="#">Felix Castro</a>
                </div>
            </div>
        </footer>        
    </body> 
</html>
