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
        <title>Aztlan - Escuela de Filosof&iacute;a y Psicolog&iacute;a-</title>
        <meta property="og:type" content="article" />
        <meta property="og:url" content="http://aztlan.org.ar/pages/psi/?c=<?php echo $_GET['c']?>/2" />
        <meta property="og:title" content="Centro Cultural Aztlan, de Filosof&iacute;a, Psicolog&iacute;a y Humanidades - Almagro"/>
        <meta property="og:image" content=""/>
        <meta property="og:site_name" content="Centro Cultural Aztlan, de Filosof&iacute;a, Psicolog&iacute;a y Humanidades"/>
        <meta property="og:description" content="Claves para el Autoconocimiento y el Desarrollo Personal" />
        <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
        <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,700,900,600,800,500' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'> -->
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link href="site/css/estilos_v2.css" rel="stylesheet">
        <!-- <link href="http://aztlan.org.ar/blog/consultas/site/css/programas.css" rel="stylesheet">
        <link href="http://aztlan.org.ar/site/css/plugins/toastr.css" rel="stylesheet">-->
        <link rel="stylesheet" href="../../css/style.css">
        
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
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if IE ]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <link href="site/css/ie.css" rel="stylesheet">
        <![endif]-->
        
    </head>
    <body class="psico" margin="0">
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5&appId=1550425018612860";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        
        <div class="container" id="contenedor">
            <?php include('../../includes/navbar.php');?>
            <!--   BEGIN CONTENTS    -->
            <div class="visible-md visible-lg" id="contents3" style="background-image:url('../../images/eventos/landing/<?php echo $evento->idEvento?>.jpg') !important">
                <!--   <div class="entrar"><a href="http://www.centroastrologico.com.ar/">Entrar al sitio web de la escuela</a></div>-->
                <!--   <div class="entrar"><a href="http://www.cineclubaztlan.com//">Entrar al sitio del Cineclub</a></div>   -->
                <?php include('site/includes/form_fb.php');?>
                <div class="clearfix"></div>
            </div>
            <!--   END CONTENTS    -->
            
            <div class="visible-sm" style="margin-top:135px;">
                <img class="img-responsive" src="../../blog/consultas/site/images/fondo_psico.jpg">
            </div>
            
            <div class="visible-xs" id="mobile-contents">
                <!--  <div class="entrar"><a href="http://www.centroastrologico.com.ar/">Entrar al sitio web</a></div>-->
                
                <div class="promo hidden-sm hidden-md hidden-lg">
                    <span class="titulo"><?php echo utf8_decode($evento->titulo)?></span>
                    <span class="subtitulo"><?php echo utf8_decode($evento->subtitulo)?></span>
                </div>
                
                <?php include('site/includes/mobile-form_fb.php');?>
                
                <div class="clearfix"></div>
                
            </div>
            <!--<div class="informacion">
                <div class="container">
                    <div class="row">
                        <div class="main-text col-md-5 col-md-offset-1 col-sm-12">
                            <h2 class="text-left sub-titulos">Conoc&eacute; los beneficios de esta psicolog&iacute;a:</h2>
                            <div class="beneficios">
                                <ul class="list-unstyled text-left">
                                    <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Conoc&eacute; los mecanismos de tu mente y aprend&eacute; a dominarte</li>
                                    <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Mejor&aacute; la calidad de tus v&iacute;nculos afectivos</li>
                                    <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Fijate metas y logralas</li>
                                    <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Conoc&eacute; lo desconocido en vos que te impide tu evoluci&oacute;n</li>
                                    <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Aprend&eacute; herramientas para hacer los cambios que necesit&aacute;s</li>
                                    <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Transform&aacute; las Emociones Negativas como: depresi&oacute;n, ansiedad, enojo, celos, sin sentido...</li>
                                    <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Super&aacute; tus Miedos con herramientas pr&aacute;cticas</li>
                                    <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Logr&aacute; una seguridad verdadera basada en logros</li>
                                    <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Clarific&aacute; tu mente para que est&eacute; libre de la confusi&oacute;n</li>
                                    <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Aprend&eacute; a tomar decisiones</li>
                                    <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Identific&aacute; tus necesidades y satisfacelas</li>
                                    <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Viv&iacute; en el presente</li>
                                </ul>
                            </div>
                        </div>
                        <div class="main-text col-md-5 col-sm-12">
                            <h2 class="sub-titulos">Nuestro Centro Cultural</h2>
                            <p class="texto">
                                La Asociaci&oacute;n Civil Aztlan es un Centro Cultural de Psicolog&iacute;a, Filosof&iacute;a y Humanidades,  fundado en la Rep&uacute;blica  Argentina hace 50 a&#241;os por el Fil&oacute;sofo Le&oacute;n Azulay.  El Programa de Formaci&oacute;n de la Sociedad Civil Aztlan es &uacute;nico en nuestro pa&iacute;s. Consiste en el estudio comparado y combinado de  la Psicolog&iacute;a de Carl G. Jung, del Cuarto Camino de Gurdjieff, la Psicolog&iacute;a y Filosof&iacute;a Budista y de la India, la Filosof&iacute;a Griega y Occidental contempor&aacute;nea.
                                </br></br>La necesidad de un estudio comparado y hol&iacute;stico de los distintos sistemas es de suma importancia, ya que provee un enfoque pedag&oacute;gico y terap&eacute;utico  verdaderamente  moderno, acorde con las necesidades del hombre y la mujer del  SXXI.
                                </br></br>El conocimiento unificado es la v&iacute;a para lograr una vida m&aacute;s integrada, consciente  e individualizada.
                            </p>
                        </div>
                    </div>
                </div>-->
                <div class="container" style="padding-top: 0px;padding-bottom: 20px;background-color: white;width: 100%">
                    <h1>¿Queres saber más? ¡Mirá estos videos!</h1>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="youtube-video">
                                <iframe width="100%" height="250"
                                src="https://www.youtube.com/embed/oLfeOdiyBqo">
                                </iframe>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="youtube-video">
                                <iframe width="100%" height="250"
                                src="https://www.youtube.com/embed/3VdAg59ppNA">
                                </iframe>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="youtube-video">
                                <iframe width="100%" height="250"
                                src="https://www.youtube.com/embed/kE1ZcpwWV5I">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container" style="padding-top: 20px;padding-bottom: 40px;background-color: white;width: 100%">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="youtube-video">
                                <iframe width="100%" height="250"
                                src="https://www.youtube.com/embed/QvCimXn9Tls">
                                </iframe>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="youtube-video">
                                <iframe width="100%" height="250"
                                src="https://www.youtube.com/embed/-2kQ1ISpvj4">
                                </iframe>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="youtube-video">
                                <iframe width="100%" height="250"
                                src="https://www.youtube.com/embed/pqT24hDIRPQ">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('../../includes/footer.php');?>
    </div>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
</body>
</html>