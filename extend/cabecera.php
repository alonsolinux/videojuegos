 <!DOCTYPE html>
 <html lang="es">
 <head>
 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>

      <!-- Importacion de la hojas de estilos  -->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!--Vriables del titulio-->
     <title><?php echo $title; ?></title>

    <?php 
      include('js/funciones.js');
    ?> 
 </head>

<body>
 	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>

<div class="navbar-fixed">
  <nav class="grey lighten-5">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo right grey-text">Video Juegos</a>

      <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"><img src="img/video.png" style="width: 78px; height: 60px;"></a>

        <ul id="nav-mobile" class="left side-nav">
          <li><a href="index.php">Inicio</a></li>
        </ul>

    </div>
  </nav>
</div>