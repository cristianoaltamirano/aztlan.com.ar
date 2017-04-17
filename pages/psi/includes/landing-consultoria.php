<?php
//var_dump($camp);
$horario = $evento->horario;
$horario_2 = $evento->maxHorario;
$dia = $evento->fechaStr;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://ogp.me/ns#">
<head>

  <title>Aztlan - Escuela de Astrolog�a -</title>
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
    		<h5 class="hdirector">Director Le�n Azulay</h5>    		
    		  		
    	</div>    	
     	
    	<div class="slogan col-xs-6">
    		<h3 class="hEscuela">Centro Astrol&oacute;gico</h3>
    		<h5 class="hEnsenanza">Ense�anza Privada Nivel Terciario - No oficial</h5>
    		<p class="pHeader">Personer�a Jur�dica N� I.G.J. 748 - C.E.N.O.C. N� 16528</p>
    	</div>
    </div>
</div>  

<div class="header-mobile container visible-xs visible-sm">
    <div class="row">    
    
    	<div class="logo col-xs-12 " >
    		<img src="images/logo.png" class="pull-left">
    		
    			<h4 class="h1Header"><strong>Aztlan</strong></h4>
                 <h1 class="h1Header">Centro Astrol&oacute;gico</h1>
                <h12 class="hdirector">Director Le�n Azulay</h12> 
                    <br />
                <h8 class="hdirector">N� I.G.J. 748</h8>
               
                <!--<h1 class="h1Header escuela-de">Escuela de Psicolog�a y Filosof�a</h1>-->
    			
    			     		 		
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
	          <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Dos entrevistas personales: En la primer entrevista se toman los datos natales y una se�a del 50%. En la segunda se entrega el Informe, y se explica detalladamente la interpretaci�n de la carta natal. Esta entrevista dura aproximadamente 30'.
</li>
	          <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Un Informe escrito de aproximadamente 10 p�ginas + el Dibujo de la Carta</li>
            </ul>
          </div>
          
          <p class="texto"> Se interpretar� c�mo funcionan cada uno de los planetas en su carta (su significado en signos y casas, y sus aspectos):</p>
             <div class="beneficios">
	        <ul class="list-unstyled text-left">
	          <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> El Sol: �Cu�l es el tema central de mi vida? �Cu�l es el tema central de mi vida? �Cu�l es el tono de mi ser? �Qu� tipo de energ�a irradio?</li>
	          <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> La Luna: �Qu� necesito para sentirme m�s contento y satisfecho conmigo mismo y el entorno?</li>
	          <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Mercurio: �Cu�l es mi actitud mental? �C�mo expreso y comunico mis ideas?</li>
	          <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Venus: �C�mo doy de mi y recibo amor? �Qu� tipo de relaciones me atraen?    </li>
              <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Marte: �C�mo me afirmo frente a la vida y los dem�s?    </li>
              <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> J�piter: �En qu� �reas tengo m�s posibilidades de expandirme y desarrollarme?    </li>
              <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Saturno: �D�nde tiendo a ser m�s serio y a buscar seguridad? �D�nde encontrar� m�s obst�culos y por ende deber� esforzarme m�s?    </li>
              <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Urano: �En qu� lugar se manifiesta en mi vida la necesidad de variedad y cambio?    </li>
              <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Neptuno: �En qu� campo de la experiencia tiendo a ser m�s idealista o confuso y ca�tico    </li>
              <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Plut�n: �A trav�s de que experiencias vendr�n las grandes transformaciones de mi vida?    </li>
            </ul>
          </div>
          
          
         <!-- <h10 class="text-left sub-titulos5">Inversi�n por la Carta Natal o Revoluci�n Solar: $1400.-</h10>-->	
          <strong><h2 class="text-left sub-titulos">DESCUENTO POR DICIEMBRE DE: $300.-</h2></strong>
        </div>
        
      
	    <div class="main-text col-md-5 col-md-offset-1 col-sm-12">
	      <h2 class="text-left titulo1">INFORME DE LA CARTA NATAL: CONOC� TU CARACTER Y DESTINO</h2>
          <h10 class="text-left sub-titulos5">La carta natal es un mapa de la posici�n de los planetas al momento de nuestro nacimiento, que indica nuestras tendencias, aptitudes y predisposiciones psico-f�sicas.</h10>
	      <h9 class="text-left sub-titulos3">INCLUYE:</h9>
	      <div class="beneficios">
	        <ul class="list-unstyled text-left">
	          <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Perspectiva ante la vida. Retrato personal.</li>
	          <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> El Sol como energ�a vital-espiritual. Orientaci�n vocacional.</li>
	          <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Sentimientos y Disposici�n Afectiva �C�mo me relaciono afectivamente?</li>
	          <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Empuje y Ambici�n: C�mo lograr mis Metas.</li>
              <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Astrolog�a K�rmica: Pautas k�rmicas pasadas adquiridas, y experiencias a ser adquiridas.</li>
            </ul>
          </div>
          
	    
        </div>
	     <div class="main-text col-md-5 col-md-offset-1 col-sm-12">
	      <h2 class="text-left titulo1">INFORME DE LA REVOLUCI�N SOLAR: CONOC� LAS INFLUENCIAS PARA TU A�O PERSONAL, UNA NUEVA OPORTUNIDAD</h2>
          <h10 class="text-left sub-titulos5">La revoluci�n solar inicia al momento del cumplea�os, el cual marca el nuevo a�o personal. Un nuevo ciclo abre nuevas oportunidades y posibilidades, la Revoluci�n solar te orienta  para aprovecharlas al m�ximo.</h10>
	      <h9 class="text-left sub-titulos3">INCLUYE:</h9>
	      <div class="beneficios">
	        <ul class="list-unstyled text-left">
	          <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Las caracter�sticas generales de mi a�o. Tema concreto del a�o. Las condiciones del medio externo.</li>
	          <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Ciclos de transformaci�n y posibles crisis.</li>
	          <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Influencias astrol�gicas sobre la vida afectiva, laboral y espiritual.</li>
	          <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Se revelar�n tendencias de posible evoluci�n. Los impedimentos que aparecer�n y c�mo superarlos.</li>
                <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> �Qu� momento del a�o ser� m�s propicio para emprender mis proyectos?</li>
	          <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> VIDA LABORAL, ECONOMICA, AFECTIVA Y ESPIRITUAL en el a�o personal.</li>
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
   <span>&copy; 2015 ESCUELA AZTLAN - Almagro, Ciudad Aut�noma de Buenos Aires, Argentina - <a href="mailto:info@centroastrologico.com.ar">info@centroastrologico.com.ar</a> 4981-2442/11 3895 6730</span>
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
