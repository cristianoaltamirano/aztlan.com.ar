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
    <!--satro_v2_reserva.php-->
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
            <!--<div class="form-group" >
              <label for="dni" class="col-sm-3 control-label">Dni</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="dni" validate chars="8" msg="Debes ingresar tu dni" value="22333444"
                placeholder="33322211" required/>
              </div>
            </div>-->
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
            <div class="form-group" >
              <label for="inputName" class="col-xs-3 control-label">Horarios </label>
              <div class="col-xs-9">
                <select name="horario" id="inputHorario" class="form-control" required="required">
                  <option value="10:30 hs">10:30 hs</option>
                  <option value="15:00 hs">15:00 hs</option>
                  <option value="19:00 hs">19:00 hs</option>
                </select>
              </div>
            </div>
            <div id="RecaptchaField1" style="margin-left: 6%;"></div>
            <p id="captchatext" style="color:#fff;text-align:center;display: none;">Debes seleccionar no soy un robot.</p>
            
            
            <input type="hidden" name="desde" value="astro">
            <input type="hidden" name="tipoform" value="reserva">
            <div class="form-group">
              <a href="site/autoreply/autoreply_fb.html">
              <button class="btnSend btn btn-warning">RESERVAR</button> </a>
            </div>
          </form>
        </div>
        <div class="clearfix"></div>
      </div>
      <!--   END CONTENTS    -->
      
      
      
      <div class="visible-xs" id="mobile-contents">
        
        
        <div class="promo hidden-sm hidden-md hidden-lg">
          <span class="titulo"><?php echo utf8_decode($evento->titulo)?></span>
          <span class="subtitulo"><?php echo utf8_decode($evento->subtitulo)?></span>
        </div>
        
        <div class="col-xs-12  visible-xs visible-sm">
          <div  class="form-mobile">
            <form class="form-horizontal" role="form">
              <legend class="envianos"> &iexcl;Reserv&aacute; tu lugar!</legend>
              <legend class="envianos"> Todas las reservas quedan sujetas a confirmaci&oacute;n seg&uacute;n disponibilidad.</legend>
              <!--  <legend class="envianos2">Complet&aacute; tus datos y a la brevedad nos comunicaremos con vos para confirmar tu reserva. Los datos deben ser ver&iacute;dicos para que sea v&aacute;lida la misma.</legend>-->
              <!--  <legend class="envianos">    <legend class="envianos">Envianos tu consulta</legend>
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
            <div class="form-group" >
              <div class="col-xs-12">
                <select name="horario" id="inputHorario" class="form-control" required="required">
                  <option value="10:30 hs">10:30 hs</option>
                  <option value="15:00 hs">15:00 hs</option>
                  <option value="19:00 hs">19:00 hs</option>
                </select>
              </div>
            </div>
            <div id="RecaptchaField2" style="margin-left: 10%;"></div>
            <p id="captchatextmobile" style="color:#fff;text-align:center;display: none;">Debes seleccionar no soy un robot.</p>
            <div style="width: 100%;">
              <p style="color:#fff;text-align:center;font-size: 16px;font-weight: bold;">Para confirmar la solicitud, dale me gusta</p>
              
              
              <input type="hidden" name="desde" value="astro">
              <input type="hidden" name="tipoform" value="reserva">
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
  
  <?php include('../../centroastrologico/site/footer.php');?>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>