<!DOCTYPE html>
<?php
//var_dump($camp);
$horario = $evento->horario;
$horario_2 = $evento->maxHorario;
$dia = $evento->fechaStr;
?>
<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aztlan - Escuela de Astrolog&iacute;a -</title>
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://aztlan.org.ar/pages/psi/?c=<?php echo $_GET['c']?>/2" />
    <meta property="og:title" content="Centro Cultural de Astrolog&#237;a - Almagro"/>
    <meta property="og:image" content=""/>
    <meta property="og:site_name" content="Centro Cultural de Astrolog&#237;a"/>
    <meta property="og:description" content="Claves para el Autoconocimiento y el Desarrollo Personal" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700,900,600,800,500' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="http://aztlan.org.ar/pages/psi/site/css/estilos_v2.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../centroastrologico/css/general.css" />
    <link rel="stylesheet" type="text/css" href="../../centroastrologico/css/texts.css" />
    <script type="text/javascript">
    var CaptchaCallback = function(){
    grecaptcha.render('RecaptchaField1', {'sitekey' : '6Lf6nSATAAAAAMyU6v4acFZiHVpGi-GZO-SW1Eum'});
    grecaptcha.render('RecaptchaField2', {'sitekey' : '6Lf6nSATAAAAAMyU6v4acFZiHVpGi-GZO-SW1Eum', 'size':'compact'});
    };
    </script>
    <script src="https://www.google.com/recaptcha/api.js?hl=es&onload=CaptchaCallback&render=explicit" async defer></script>
    <?php echo '<script>var evento='.$evt.',tipo='.$evento->tipoEvento_idTipo.',owner='.$owner.',source='.$source.';</script>'?>
    <script src="site/script.js?random=<?php echo uniqid(); ?>"></script>
    <script src="site/js/site.js?random=<?php echo uniqid(); ?>"></script>
    <!--landing-astro.php-->
  </head>
  <body class="astro" margin="0">
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5&appId=1550425018612860";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    
    <div class="container" id="container" style="padding-left: 0px;padding-right: 0px;">
      <?php include('../../centroastrologico/site/header.php');?>
      <!--   BEGIN CONTENTS    -->
      <div class="visible-md visible-lg" id="contents2" style="background-image:url('../../../images/eventos/landing/<?php echo $evento->idEvento?>.jpg') !important">
        <!--   <div class="entrar"><a href="http://www.centroastrologico.com.ar/">Entrar al sitio web de la escuela</a></div>-->
        <!--   <div class="entrar"><a href="http://www.cineclubaztlan.com//">Entrar al sitio del Cineclub</a></div>   -->
        <?php include('site/includes/form_fb2017.php');?>
        <div class="clearfix"></div>
      </div>
      <!--   END CONTENTS    -->
      
      
      
      <div class="visible-xs" id="mobile-contents">
        <!--  <div class="entrar"><a href="http://www.centroastrologico.com.ar/">Entrar al sitio web</a></div>-->
        
        <div class="promo hidden-sm hidden-md hidden-lg">
          <span class="titulo"><?php echo utf8_decode($evento->titulo)?></span>
          <span class="subtitulo"><?php echo utf8_decode($evento->subtitulo)?></span>
        </div>
        
        <?php include('site/includes/mobile-form_fb2017.php');?>
        
        
        
      </div>
    </div>
  </div>
  <!--  <div class="informacion">
    <div class="container">
      <div class="row">
        <div class="main-text col-md-10 col-md-offset-1 col-sm-12">     <h2 class="text-left titulo1">CHARLA GRATUITA</h2>
          <h2 class="text-left sub-titulos">Astrolog�a, Karma y Transformaci�n</h2>
          <h2 class="text-left sub-titulos">Expres� tu verdadero Ser</h2>
          <div class="beneficios">
            <ul class="list-unstyled text-left">
              <li class="list-group-item">&bull;   Conoc� tu Carta Natal.</li>
              <li class="list-group-item">&bull;    Sintoniz� con la energ�a de tu pareja.</li>
              <li class="list-group-item">&bull;    Encontr� relaciones significativas.</li>
              <li class="list-group-item">&bull;    No pierdas m�s el tiempo. �Conectate con tu Verdadera Esencia!</li>
              <li class="list-group-item">&bull;    Viv� tu forma de amar seg�n la energ�a de tu Venus, tu Luna y tu Neptuno.
              </li>
            </ul>
          </div>
        </div>
      </div>
      
    </div>
  </div>-->
  <?php include('../../centroastrologico/site/footer.php');?>
</div>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>