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

<script src="//platform.twitter.com/oct.js" type="text/javascript"></script>
<script type="text/javascript">twttr.conversion.trackPid('ntyp7', { tw_sale_amount: 0, tw_order_quantity: 0 });</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://analytics.twitter.com/i/adsct?txn_id=ntyp7&p_id=Twitter&tw_sale_amount=0&tw_order_quantity=0" />
<img height="1" width="1" style="display:none;" alt="" src="//t.co/i/adsct?txn_id=ntyp7&p_id=Twitter&tw_sale_amount=0&tw_order_quantity=0" />
</noscript>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if IE ]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<link href="site/css/ie.css" rel="stylesheet">
      <![endif]-->
    </head>
<body class="tarot">

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
    		<h3 class="hEscuela">Escuela de Astrolog�a</h3>
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
                 <h1 class="h1Header">Escuela de Astrolog�a</h1>
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
	      <h2 class="text-left titulo1"><strong id="docs-internal-guid-5878d5eb-7a40-704a-7e6e-1d69726d1d83">LOS ARQUETIPOS DEL TAROT (enfoque seg&uacute;n la Psicolog&iacute;a de Carl G. Jung)<br />
          TALLER DE VERANO ENERO-FEBRERO 2016</strong></h2>
	      <h2 class="text-left sub-titulos">ANOTATE YA PARA ENERO O FEBRERO y consegu&iacute; tu descuento del 20 % </h2>
	      <h9 class="text-left sub-titulos3">Enfoque seg�n la Psicolog�a de Carl G. Jung - 8 Jornadas (con opci&oacute;n a 4 jornadas)</h9>
	      <br />
	      <div class="beneficios">
	        <h10 class="text-left sub-titulos5"> Claves para interpretar los s�mbolos de las cartas desde el punto de vista psicol�gico. EL Tarot como un mapa, que describe el viaje hacia la autorrealizaci�n. 
</h10>
          </div>
	      <div class="beneficios">
	        <ul class="list-unstyled text-left">
	          <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> &iquest;C&oacute;mo usarlo como gu&iacute;a para tu desarrollo interior? La relaci&oacute;n entre el Yo y lo Inconsciente seg&uacute;n la Psicologia de Jung</li>
	          <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Vivimos divididos en dualidades, bueno-malo, verdadero-falso, masculino-femenino. Aprenderemos a integrar todas las dualidades. </li>
	          <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Arcanos Mayores: Cartas de los Principios Femenino y Masculino seg&uacute;n la Psicolog&iacute;a de Jung. </li>
	          <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Las Cartas de la Transformaci&oacute;n, Renovaci&oacute;n y Crisis. &iquest;Qu&eacute; es mejor hacer seg&uacute;n cada momento de mi ciclo evolutivo? </li>
	          <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Conectate con tu Gu&iacute;a interior. Desarroll&aacute; todo tu potencial Oculto y Desconocido. Arquetipos orientadores: El Santo, el Genio y el H&eacute;roe. </li>
	          <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> La relaci&oacute;n entre el Tarot y la Astrolog&iacute;a &iquest;Qu&eacute; relaci&oacute;n hay entre cada una de las cartas y los signos y planetas astrol&oacute;gicos? Los Arcanos Menores y los 4 elementos</li>
	          <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Pr&aacute;cticas. Las tiradas b&aacute;sicas. Aprenderemos a tirar e interpretar las cartas para nosotros mismos como parte de nuestro proceso de Autoconocimiento. &iquest;C&oacute;mo ser Verdaderamente Libre? </li>
	          <li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> SINCRONICIDAD &iquest;Existen las Casualidades? El Tarot como expresi&oacute;n de la Sabidur&iacute;a Ancestral del Inconsciente Colectivo. </li>
            </ul>
          </div>
	    </div>
	    <div class="main-text col-md-10 col-md-offset-1 col-sm-12">
	      <div class="beneficios">
	        <h10 class="text-left sub-titulos4">4 jornadas de 1 h. 30 m. y luego pod�s hacer 4 m�s
</h10>
	        <h10 class="text-left sub-titulos2">D�as de las 4 jornadas: Lunes 19 hs. (4 Jueves de Enero o Febrero)</h10>
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
