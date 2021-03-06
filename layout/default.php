<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="es">
<head>

    <title><?php echo $title ?></title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="author" content="juan2ramos"/>
    <meta name="contact" content="juan2ramos@gmail.com"/>
    <meta name="description" content=" Escena 70"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1"/>
    <!-- Meta Facebook -->
    <meta property="og:url" content="">
    <meta property="og:title" content="circulart"/>
    <meta property="og:description" content=".."/>
    <meta property="og:image" content="images/logo.png"/>


    <link rel="shortcut icon" href="favicon.png">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic'
          rel='stylesheet' type='text/css'>

    <!-- Estilos -->
    <script src="js/prefixfree.min.js"></script>
    <link rel="stylesheet" href="css/normalize.css"/>
    <link rel="stylesheet" href="css/style.css"/>


</head>
<body>
<header>
    <figure class="logo-escena">
        <img src="images/escena-70.png" alt="escena 70"/>
    </figure>
    <figure class="logo-complejo">
        <img src="images/complejo-teatral.png" alt="Complejo teatral de Buenos Aires"/>
    </figure>


</header>

<div class="network">
    <ul>
        <li id="twitter"><a href="https://twitter.com/TeatroSMOficial" target="_blank"><span class="icon-twitter"></span></a></li>
        <li id="facebook"><a href="https://www.facebook.com/TeatroSanMartinOficial" target="_blank"><span class="icon-facebook"></span></a></li>
    </ul>
    <h2>mercado de artes escénicas de <b>buenos aires</b></h2>
</div>

<nav>
    <?php $class='class="active"'?>
    <ul id="nav">
        <li><a href="inicio" <?php if('inicio'==$url){echo($class);}?>>sobre escena 70</a></li>
        <li>
            <a href="http://escena70.complejoteatral.gob.ar/m/index.php?modo=inscripciones" target="_blank">convocatoria</a>
        </li>
        <li><a href="presentaciones-artisticas" <?php if('presentaciones-artisticas'==$url){echo($class);}?>>Presentaciones artísticas</a></li>
        <li><a href="rueda-de-negocios" <?php if('rueda-de-negocios'==$url){echo($class);}?>>rueda de negocios</a></li>
        <li><a href="datos-utiles" <?php if('datos-utiles'==$url){echo($class);}?>>Datos útiles</a></li>
        <!--<li><a href="useful-data">datos útiles</a></li>-->
        <li><a href="contactenos" <?php if('contactenos'==$url){echo($class);}?>>contacto</a></li>
    </ul>
</nav>

<?php include $fileName; ?>

<footer>
    <ul id="nav-footer">

        <li><a href="http://complejoteatral.gob.ar/" target="_blank"><img src="images/70-teatro.png"></a></li>
        <li><a href="http://redlat.org" target="_blank"><img src="images/redlat.png"></a></li>
        <li><a href="http://circulart.org" target="_blank"><img src="images/circulart.png"></a></li>
        <li><a href="http://www.teatropicadero.com.ar" target="_blank"><img src="images/teatro-picadero.png"></a></li>
        <li><a href="http://www.paseolaplaza.com.ar" target="_blank"><img src="images/grupo-la-plaza.png"></a></li>
        <li><a href="http://complejoteatral.gob.ar/institucional/estructura?ascm_content_change=Teatro_SanMartin" target="_blank"><img src="images/san-martin.png"></a></li>
        <li><a href="#"><img src="images/buenos-aires.png"></a></li>

    </ul>
</footer>
<!-- JavaScript -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<script src="js/script.js"></script>
</body>
</html>