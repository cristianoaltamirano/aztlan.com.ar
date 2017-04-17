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
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Aztlan - Escuela de Filosof&iacute;a y Psicolog&iacute;a-</title>
        <meta property="og:type" content="article" />
        <meta property="og:url" content="http://aztlan.org.ar/pages/psi/?c=<?php echo $_GET['c']?>/2" />
        <meta property="og:title" content="Centro Cultural Aztlan, de Filosof&iacute;a, Psicolog&iacute;a y Humanidades - Almagro"/>
        <meta property="og:image" content=""/>
        <meta property="og:site_name" content="Centro Cultural Aztlan, de Filosof&iacute;a, Psicolog&iacute;a y Humanidades"/>
        <meta property="og:description" content="Claves para el Autoconocimiento y el Desarrollo Personal" />
        <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link href="site/css/estilos_v2.css" rel="stylesheet">
        
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
            
            <div class="visible-md visible-lg" id="contents3" style="background-image:url('../../images/eventos/landing/<?php echo $evento->idEvento?>.jpg') !important">
                
                <div  id="form" class="hidden-xs hidden-sm">
                    
                    <form class="form-horizontal" role="form">
                        
                        <h3 class="envianos">&iexcl;Reserv&aacute; tu lugar!</h3>
                        <h3 class="envianos">Todas las reservas quedan sujetas a confirmaci&oacute;n seg&uacute;n disponibilidad.</h3>
                        <div class="form-group" >
                            <label for="inputName" class="col-xs-3 control-label">Nombre</label>
                            <div class="col-xs-9">
                                <input type="text" class="form-control"  name="nombre" validate chars="3" msg="Debes ingresar tu nombre" value="Nombres"
                                placeholder="Nombre" required/>
                            </div>
                        </div>
                        <div class="form-group" >
                            <label for="inputLastname" class="col-xs-3 control-label">Apellido</label>
                            <div class="col-xs-9">
                                <input type="text" class="form-control" name="apellido" validate chars="3" msg="Debes ingresar tu apellido" value="Apellidos"
                                placeholder="Apellido" required/>
                            </div>
                        </div>
                        <div class="form-group" >
                            <label for="dni" class="col-sm-3 control-label">Dni</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="dni" validate chars="8" msg="Debes ingresar tu dni" value="22333444"
                                placeholder="33322211" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputTel" class="col-xs-3 control-label">Celular</label>
                            <div class="col-xs-9">
                                <input type="text" class="form-control" name="telefono" validate chars="8" msg="Debes ingresar tu celular" value="Celular"
                                placeholder="Celular" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="col-xs-3 control-label">Email</label>
                            <div class="col-xs-9">
                                <input type="email" class="form-control" name="email" validate="email"  msg="Debes ingresar tu email" value="mail@hotmail.com"
                                placeholder="Email" required/>
                            </div>
                        </div>
                        
                        <div class="form-group" >
                            <label for="inputName" class="col-xs-3 control-label">Facebook </label>
                            <div class="col-xs-9">
                                <input type="text" class="form-control"  name="facebook" validate chars="3" msg="Debes ingresar tu facebook" value="Usuario de  Facebook"
                                placeholder="Usuario de Facebook" required/>
                            </div>
                        </div>
                        <div id="RecaptchaField1" style="margin-left: 6%;"></div>
                        <p id="captchatext" style="color:#fff;text-align:center;display: none;">Debes seleccionar no soy un robot.</p>
                        <input type="hidden" name="desde" value="psico">
                        <input type="hidden" name="tipoform" value="charla">
                        <div class="form-group">
                            <a href="site/autoreply/autoreply_fb.html">
                            <button class="btnSend btn btn-warning">RESERVAR</button>  </a>
                        </div>
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
            
            <div class="visible-xs visible-sm" id="mobile-contents">
                
                <div class="promo hidden-sm hidden-md hidden-lg">
                    <span class="titulo"><?php echo utf8_decode($evento->titulo)?></span>
                    <span class="subtitulo"><?php echo utf8_decode($evento->subtitulo)?></span>
                </div>
                
                <div class="col-xs-12  visible-xs visible-sm">
                    <div  class="form-mobile">
                        <form class="form-horizontal" role="form">
                            <legend class="envianos"> &iexcl;Reserv&aacute; tu lugar!</legend>
                            <legend class="envianos"> Todas las reservas quedan sujetas a confirmaci&oacute;n seg&uacute;n disponibilidad.</legend>
                        </legend>-->
                        <div class="form-group" >
                            <div class="col-xs-12">
                                <input type="text" class="form-control"  name="nombre" validate chars="3" msg="Debes ingresar tu nombre" value="Nombres"
                                placeholder="Nombre" required/>
                            </div>
                        </div>
                        <div class="form-group" >
                            <div class="col-xs-12">
                                <input type="text" class="form-control" name="apellido" validate chars="3" msg="Debes ingresar tu apellido" value="Apellidos"
                                placeholder="Apellido" required/>
                            </div>
                        </div>
                        <div class="form-group" >
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="dni" validate chars="8" msg="Debes ingresar tu dni" value="33222444"
                                placeholder="dni" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input type="text" class="form-control" name="telefono" validate chars="8"  msg="Debes ingresar tu celular" value="Celular"
                                placeholder="Celular" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input type="email" class="form-control" name="email" validate="email"  msg="Debes ingresar tu email" value="mail@hotmail.com"
                                placeholder="Email" required/>
                            </div>
                        </div>
                        <div class="form-group" >
                            <div class="col-xs-12">
                                <input type="text" class="form-control"  name="facebook" validate chars="3" msg="Debes ingresar tu facebook" value="Usuario de Facebook"
                                placeholder="Usuario de Facebook" required/>
                            </div>
                        </div>
                        
                        <div id="RecaptchaField2" style="margin-left: 10%;"></div>
                        <p id="captchatextmobile" style="color:#fff;text-align:center;display: none;">Debes seleccionar no soy un robot.</p>
                        <div style="width: 100%;">
                            <p style="color:#fff;text-align:center;font-size: 16px;font-weight: bold;">Para confirmar la solicitud, dale me gusta</p>
                            
                            <input type="hidden" name="desde" value="psico">
                            <input type="hidden" name="tipoform" value="charla">
                            <div class="form-group">
                                <button class="btnSend mobile btn btn-warning btn-lg">RESERVAR</button>
                            </div>
                        </form>
                    </div>
                </div>
                
                <div class="clearfix"></div>
                
            </div>
            
        </div>
    </div>
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

    <div align="center" >
     <div style="height: auto;background-color: #ebebeb;max-width: 1600px;">
    <?php include('../../includes/footer.php');?>
    </div></div>
</div>
<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
</body>
</html>