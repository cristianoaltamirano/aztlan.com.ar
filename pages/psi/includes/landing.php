<?php
//var_dump($camp);
$horario = $camp->evento->horario;
$horario_2 = $camp->evento->maxHorario;
$dia = $camp->evento->fechaStr;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://ogp.me/ns#">
<head>

  <title>Aztlan - Escuela de Psicología y Filosofía de Conocimiento Unificado</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge">  

<meta property="og:type" content="article" />
<meta property="og:url" content="http://aztlan.org.ar/pages/psi/?c=<?php echo $idCamp?>/2" />
<meta property="og:title" content="Psicolog&#237;a Transpersonal: Clase Gratuita - Almagro"/>
<meta property="og:image" content="http://aztlan.org.ar/pages/psi/images/facebook/facebook-agosto-2.jpg"/>
<meta property="og:site_name" content="Escuela de conocimiento integral"/>
<meta property="og:description" content="Método: C. G. Jung / Cuarto Camino / Budismo / Hinduismo / Yoga - Claves para el Autoconocimiento y el Desarrollo Personal" />

<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,700,900,600,800,500' rel='stylesheet' type='text/css'>
<!-- <link href='http://fonts.googleapis.com/css?family=Gentium+Book+Basic:400,400italic,700,700italic' rel='stylesheet' type='text/css'>-->
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

<!-- Bootstrap -->
<link href="site/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!--
<link rel="stylesheet/less" type="text/css" href="site/less/estilos.less" />
<link rel="stylesheet/less" type="text/css" href="site/less/programas.less" />

<script src="site/less/less-1.4.1.min.js"></script>
-->
 <?php 
 echo "<script>var idCamp=$idCamp;var source=$fuente</script>";
 ?>
<link href="site/css/estilos.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" rel="stylesheet">
<link href="site/css/programas.css" rel="stylesheet">



 <!-- PLUGINS -->
 <link href="../../site/css/plugins/toastr.css" rel="stylesheet">

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
    <body>

<nav class="header-nav">
<div class="header-cont">
<div class="header container hidden-xs hidden-sm">
    <div class="row">
    	
    	<div class="logo col-xs-3 pull-left">   
    		<img src="images/logo.png" class="pull-left"> 		
    		<h2 class="hAztlan">Aztlan</h2>
    		<h5 class="hdirector">Director León Azulay</h5>    		
    		  		
    	</div>    	
     	
    	<div class="slogan col-xs-6">
    		<h3 class="hEscuela">Escuela de Psicología y Filosofía</h3>
    		<h5 class="hEnsenanza">Enseñanza Privada Nivel Terciario - No oficial</h5>
    		<p class="pHeader">Personería Jurídica Nº I.G.J. 748 - C.E.N.O.C. Nº 16528</p>
    	</div>
    </div>
</div>  

<div class="header-mobile container visible-xs visible-sm">
    <div class="row">    
    	<div class="logo col-xs-12 text-center">
    		<img src="images/logo.png" >
    		
    			<h1 class="h1Header">Aztlan</h1>
    			<h4 class="h4Header">Director León Azulay</h4>
    			<h1 class="h1Header escuela-de">Escuela de Psicología y Filosofía</h1>     		 		
    	</div>         	
    </div>
</div>
</div>
 </nav>
		
		
					
		<!--   BEGIN CONTENTS    -->
		<div id="contents" style="background-image:url('../../images/eventos/landing/<?php echo $camp->evento->idEvento?>.jpg') !important">
		<div class="entrar"><a href="http://www.aztlan.org.ar/">Entrar al sitio web</a></div>
		<div class="clearfix"></div>
				
		<div class="promo hidden-sm hidden-md hidden-lg">
			<h3 class="intro" >Charla Gratuita</h3>
			<h1 class="titulo" >Psicología Transpersonal</h1>
						
			<h4 style="font-size:25px;" class="metodo" >Método: C. G. Jung / Cuarto Camino / Budismo / Hinduismo / Yoga</h4>				
		</div>
		
		<div class="frase hidden-sm hidden-md hidden-lg" style="top:320px!important;">
			<h4>Claves para el Autoconocimiento y el Desarrollo Personal</h4>
		</div>
		<div class="fecha hidden-sm hidden-md hidden-lg"><span class="txt-fecha"  style="text-align:center;"><?php echo $dia?> a las <?php echo $horario?> hs.</span> 
		</br><span class="lugar"  style="text-align:center;">En Amagro, Av. Rivadavia y Medrano</span>
		</div>

		<!--  <img class="hidden-lg hidden-md img-responsive" src="images/bg-2.jpg" />-->
		</div>
		<!--   END CONTENTS    -->
		
	<?php include('site/includes/form.html')?>
	<?php include('site/includes/mobile-form.html')?>
	<div>	
	<iframe class="ytvideo" width="100%" src="http://www.youtube.com/embed/O-13NxGJSeY?autohide=1&hd=1&rel=0&showinfo=0&controls=0" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class="informacion">
	<div class="container">
		<div class="row">
			<div class="main-text col-md-5 col-md-offset-1 col-sm-12"> 		
				<h2 class="text-left sub-titulos">Conocé los beneficios de esta psicología:</h2>			
					<div class="beneficios">						
						<ul class="list-unstyled text-left">
							<li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Conocé los mecanismos de tu mente y aprendé a dominarte</li>
							<li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Mejorá la calidad de tus vínculos afectivos</li>
							<li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Fijate metas y logralas</li>
							<li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Conocé lo desconocido en vos que te impide tu evolución</li>
							<li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Aprendé herramientas para hacer los cambios que necesitás</li>							
							<li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Transformá las Emociones Negativas como: depresión, ansiedad, enojo, celos, sin sentido …</li>
							<li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Superá tus Miedos con herramientas prácticas</li>
							<li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Lográ una seguridad verdadera basada en logros</li>
							<li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Clarificá tu mente para que esté libre de la confusión</li>
							<li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Aprendé a tomar decisiones</li>
							<li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Identificá tus necesidades y satisfacelas</li>							
							<li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Viví en el presente</li>							
						</ul>
					</div>
			</div>	
			
	<div class="main-text col-md-5 col-sm-12"> 			
		<h2 class="sub-titulos">Nuestra Escuela</h2>
			<p class="texto"> 
			La Escuela Aztlan es una institución educativa de Psicología y Filosofía,  fundada en la República  Argentina hace 50 años por el Filósofo León Azulay.  El Programa de Formación de la Escuela Aztlan es único en nuestro país. Consiste en el estudio comparado y combinado de  la Psicología de Carl G. Jung, del Cuarto Camino de Gurdjieff, la Psicología y Filosofía Budista y de la India, la Filosofía Griega y Occidental contemporánea.
			</br></br>La necesidad de un estudio comparado y holístico de los distintos sistemas es de suma importancia, ya que provee un enfoque pedagógico y terapéutico  verdaderamente  moderno, acorde con las necesidades del hombre y la mujer del  SXXI.
			</br></br>El conocimiento unificado es la vía para lograr una vida más integrada, consciente  e individualizada.</p>
	</div>
	</div>
	
	</div>
	</div>
			
			<div class="container ">
				<div class="row programa">
					<p class="propuesta text-center" style="margin-top:20px;">
							<strong>Conocé más de nuestra propuesta:</strong> <a href="http://www.aztlan.org.ar/programa.pdf" target="_blank">Ver programa de estudios</a>
							</p>			
				</div>
	</div>

<div class="container" style="margin-top:20px;">
<div class="row info-horario">
	<div class="col-xs-12 col-md-6">		
		<p class="importante max-parrafo">
		<span class="rojo" style="font-size:1.5em;">Sólo con Reserva</span>
		</br>Una vez hecha su reserva aguarde su confirmación. Todos los datos pedidos para hacer la reserva deben ser verídicos caso contrario no se tomará la misma.
		</br>Las reservas se tomarán sólo vía internet y la confirmación se llevará a cabo vía telefónica o mensaje de texto.
		</p>
	</div>
	
	<div class="col-xs-12 col-md-6">
		
		<p  class="importante max-parrafo">	
		<span class="rojo" style="font-size:1.5em;">Horario</span>				
		</br>La actividad comenzará a las <?php echo $horario?> hs. en punto por lo que <span class="rojo">solicitamos estar 15 minutos antes</span>.  No se permitirá la entrada posterior a después de las <?php echo $horario_2?> hs. 
		</p>								
	</div>
	
</div>
</div>
 
<!-- 
<div class="container" id="mapa">
		<h3>Espacio Cultural Sr. Duncan</h3>
		<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1641.8538803959987!2d-58.41953449006932!3d-34.61155063112213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcca5efe5631b7%3A0x8b89b54c9dc87bd2!2sAv+Rivadavia+3832!5e0!3m2!1ses!2sar!4v1404394435783" width="600" height="450" frameborder="0" style="border:0"></iframe><a href="https://www.google.com.ar/maps/place/Av+Corrientes+1680/@-34.6043592,-58.3905278,17z/data=!3m1!4b1!4m2!3m1!1s0x95bccac15d317ce9:0x9144708bc6baf782" style="color:#0000FF;text-align:left">Ver mapa más grande</a></small>
	</div>
-->

	<div class="container entrar-2">
		<div class="row">
			<a href="http://www.aztlan.org.ar/es/">Entrar al sitio web</a>
		</div>
	</div>

	
  <nav class="footer " role="navigation">
  <div class="container">
   <span>&copy; 2014 ESCUELA AZTLAN - Almagro, Ciudad Autónoma de Buenos Aires, Argentina - <a href="mailto:info@aztlan.com.ar">info@aztlan.com.ar</a> 4981-7935 /  15-3895-6730</span>
  </div>
  </nav>

  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="site/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
