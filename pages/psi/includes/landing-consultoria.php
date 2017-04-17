<?php
//var_dump($camp);
$horario = $evento->horario;
$horario_2 = $evento->maxHorario;
$dia = $evento->fechaStr;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://ogp.me/ns#">
<head>

  <title>Aztlan - Escuela de Astrología -</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge">  

<meta property="og:type" content="article" />
<meta property="og:url" content="http://aztlan.org.ar/pages/psi/?c=<?php echo $_GET['c']?>/2" />
<meta property="og:title" content="Escuela de Astrolog&#237;a - Almagro"/>
<meta property="og:image" content=""/>
<meta property="og:site_name" content="Escuela de Astrolog&#237;a"/>
<meta property="og:description" content="Claves para el Autoconocimiento y el Desarrollo Personal" />

<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,700,900,600,800,500' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

<!-- Bootstrap -->
<link href="site/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<link href="site/css/estilos.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" rel="stylesheet">
<link href="site/css/programas.css" rel="stylesheet">

 <!-- PLUGINS -->
<link href="../../site/css/plugins/toastr.css" rel="stylesheet">

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
<body class="astro">

<nav class="header-nav">
<div class="header-cont">
<div class="header container hidden-xs hidden-sm">
    <div class="row">
    	
    	<div class="logo col-xs-3 pull-left">   
    		<img src="images/logo.png" class="pull-left" style="inline-block;"> 		
    		<h2 class="hAztlan">Aztlan</h2>
    		<h5 class="hdirector">Director León Azulay</h5>    		
    		  		
    	</div>    	
     	
    	<div class="slogan col-xs-6">
    		<h3 class="hEscuela">Centro Astrol&oacute;gico</h3>
    		<h5 class="hEnsenanza">Enseñanza Privada Nivel Terciario - No oficial</h5>
    		<p class="pHeader">Personería Jurídica Nº I.G.J. 748 - C.E.N.O.C. Nº 16528</p>
    	</div>
    </div>
</div>  

<div class="header-mobile container visible-xs visible-sm">
    <div class="row">    
    
    	<div class="logo col-xs-12 " >
    		<img src="images/logo.png" class="pull-left">
    		
    			<h4 class="h1Header"><strong>Aztlan</strong></h4>
                 <h1 class="h1Header">Centro Astrol&oacute;gico</h1>
                <h12 class="hdirector">Director León Azulay</h12> 
                    <br />
                <h8 class="hdirector">Nº I.G.J. 748</h8>
               
                <!--<h1 class="h1Header escuela-de">Escuela de Psicología y Filosofía</h1>-->
    			
    			     		 		
    	</div>  
            	 
    </div>


     


</div>
 </nav>
		
		
					
		<!--   BEGIN CONTENTS    -->
		<div class="visible-md visible-lg" id="contents" style="background-image:url('../../images/eventos/landing/<?php echo $evento->idEvento?>.jpg') !important">
		 <!--   <div class="entrar"><a href="http://www.centroastrologico.com.ar/">Entrar al sitio web de la escuela</a></div>-->
        <!--   <div class="entrar"><a href="http://www.cineclubaztlan.com//">Entrar al sitio del Cineclub</a></div>   -->
		<div class="clearfix"></div>		
		</div>
		<!--   END CONTENTS    -->
		
		<div class="visible-sm">
			<img class="img-responsive" src="../../images/eventos/landing/<?php echo $evento->idEvento?>.jpg"></img>
		</div>
		
		<div class="visible-xs" id="mobile-contents">
			<!--  <div class="entrar"><a href="http://www.centroastrologico.com.ar/">Entrar al sitio web</a></div>-->
		<div class="clearfix"></div>
				
		<div class="promo hidden-sm hidden-md hidden-lg">
			<span class="titulo" ><?php echo utf8_decode($evento->titulo)?></span>
			<span class="subtitulo" ><?php echo utf8_decode($evento->subtitulo)?></span>					
		</div>
		
		
		</div>
		
	<?php include('site/includes/form.html')?>
	<?php include('site/includes/mobile-form.html')?>


	
	
	
</div>
</div>
</div>
	<div class="informacion">
	<div class="container">
	  <div class="row">
      
      <div class="main-text col-md-10 col-md-offset-1 col-sm-12">
	      <h2 class="sub-titulos">Informe de Carta Natal y Revoluci&oacute;n Solar</h2>
	      <h9 class="text-left sub-titulos3">INCLUYE:</h9>
          <div class="beneficios">
	        <ul class="list-unstyled text-left">
	          <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Dos entrevistas personales: En la primer entrevista se toman los datos natales y una seña del 50%. En la segunda se entrega el Informe, y se explica detalladamente la interpretación de la carta natal. Esta entrevista dura aproximadamente 30'.
</li>
	          <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Un Informe escrito de aproximadamente 10 páginas + el Dibujo de la Carta</li>
            </ul>
          </div>
          
          <p class="texto"> Se interpretará cómo funcionan cada uno de los planetas en su carta (su significado en signos y casas, y sus aspectos):</p>
             <div class="beneficios">
	        <ul class="list-unstyled text-left">
	          <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> El Sol: ¿Cuál es el tema central de mi vida? ¿Cuál es el tema central de mi vida? ¿Cuál es el tono de mi ser? ¿Qué tipo de energía irradio?</li>
	          <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> La Luna: ¿Qué necesito para sentirme más contento y satisfecho conmigo mismo y el entorno?</li>
	          <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Mercurio: ¿Cuál es mi actitud mental? ¿Cómo expreso y comunico mis ideas?</li>
	          <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Venus: ¿Cómo doy de mi y recibo amor? ¿Qué tipo de relaciones me atraen?    </li>
              <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Marte: ¿Cómo me afirmo frente a la vida y los demás?    </li>
              <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Júpiter: ¿En qué áreas tengo más posibilidades de expandirme y desarrollarme?    </li>
              <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Saturno: ¿Dónde tiendo a ser más serio y a buscar seguridad? ¿Dónde encontraré más obstáculos y por ende deberé esforzarme más?    </li>
              <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Urano: ¿En qué lugar se manifiesta en mi vida la necesidad de variedad y cambio?    </li>
              <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Neptuno: ¿En qué campo de la experiencia tiendo a ser más idealista o confuso y caótico    </li>
              <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Plutón: ¿A través de que experiencias vendrán las grandes transformaciones de mi vida?    </li>
            </ul>
          </div>
          
          
         <!-- <h10 class="text-left sub-titulos5">Inversión por la Carta Natal o Revolución Solar: $1400.-</h10>-->	
          <strong><h2 class="text-left sub-titulos">DESCUENTO POR DICIEMBRE DE: $300.-</h2></strong>
        </div>
        
      
	    <div class="main-text col-md-5 col-md-offset-1 col-sm-12">
	      <h2 class="text-left titulo1">INFORME DE LA CARTA NATAL: CONOCÉ TU CARACTER Y DESTINO</h2>
          <h10 class="text-left sub-titulos5">La carta natal es un mapa de la posición de los planetas al momento de nuestro nacimiento, que indica nuestras tendencias, aptitudes y predisposiciones psico-físicas.</h10>
	      <h9 class="text-left sub-titulos3">INCLUYE:</h9>
	      <div class="beneficios">
	        <ul class="list-unstyled text-left">
	          <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Perspectiva ante la vida. Retrato personal.</li>
	          <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> El Sol como energía vital-espiritual. Orientación vocacional.</li>
	          <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Sentimientos y Disposición Afectiva ¿Cómo me relaciono afectivamente?</li>
	          <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Empuje y Ambición: Cómo lograr mis Metas.</li>
              <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Astrología Kármica: Pautas kármicas pasadas adquiridas, y experiencias a ser adquiridas.</li>
            </ul>
          </div>
          
	    
        </div>
	     <div class="main-text col-md-5 col-md-offset-1 col-sm-12">
	      <h2 class="text-left titulo1">INFORME DE LA REVOLUCIÓN SOLAR: CONOCÉ LAS INFLUENCIAS PARA TU AÑO PERSONAL, UNA NUEVA OPORTUNIDAD</h2>
          <h10 class="text-left sub-titulos5">La revolución solar inicia al momento del cumpleaños, el cual marca el nuevo año personal. Un nuevo ciclo abre nuevas oportunidades y posibilidades, la Revolución solar te orienta  para aprovecharlas al máximo.</h10>
	      <h9 class="text-left sub-titulos3">INCLUYE:</h9>
	      <div class="beneficios">
	        <ul class="list-unstyled text-left">
	          <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Las características generales de mi año. Tema concreto del año. Las condiciones del medio externo.</li>
	          <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Ciclos de transformación y posibles crisis.</li>
	          <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Influencias astrológicas sobre la vida afectiva, laboral y espiritual.</li>
	          <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Se revelarán tendencias de posible evolución. Los impedimentos que aparecerán y cómo superarlos.</li>
                <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> ¿Qué momento del año será más propicio para emprender mis proyectos?</li>
	          <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> VIDA LABORAL, ECONOMICA, AFECTIVA Y ESPIRITUAL en el año personal.</li>
            </ul>
          </div>
          
        </div>
	  </div>
	</div>
	</div>
			
			


	<div class="container entrar-2">
		<div class="row">
			<a href="http://www.centroastrologico.com.ar/blog">Ir al Blog</a>
		</div>
	</div>

	
  <nav class="footer " role="navigation">
  <div class="container">
   <span>&copy; 2015 ESCUELA AZTLAN - Almagro, Ciudad Autónoma de Buenos Aires, Argentina - <a href="mailto:info@centroastrologico.com.ar">info@centroastrologico.com.ar</a> 4981-2442/11 3895 6730</span>
  </div>
  </nav>

  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="site/bootstrap/js/bootstrap.min.js"></script>
  
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47282074-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
