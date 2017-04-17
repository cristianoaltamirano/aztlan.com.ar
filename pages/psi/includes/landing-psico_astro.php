<?php
//var_dump($camp);
$horario = $evento->horario;
$horario_2 = $evento->maxHorario;
$dia = $evento->fechaStr;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://ogp.me/ns#">
<head>

  <title>Aztlan - Escuela de Psicología y Filosofía de Conocimiento Unificado</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge">  

<meta property="og:type" content="article" />
<meta property="og:url" content="http://aztlan.org.ar/pages/psi/?c=<?php echo $_GET['c']?>" />
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

<link href="site/css/estilos.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" rel="stylesheet">
<link href="site/css/programas.css" rel="stylesheet">



 <!-- PLUGINS -->
 <link href="../../site/css/plugins/toastr.css" rel="stylesheet">
 
<?php echo '<script>var evento='.$evt.',tipo='.$evento->tipoEvento_idTipo.',owner='.$owner.',source='.$source.';</script>'?>
 <script src="site/script.js?random=<?php echo uniqid(); ?>"></script>
 <script src="site/js/site.js?random=<?php echo uniqid(); ?>"></script>
 
 <script src="//platform.twitter.com/oct.js" type="text/javascript"></script>
<script type="text/javascript">twttr.conversion.trackPid('ntyp3', { tw_sale_amount: 0, tw_order_quantity: 0 });</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://analytics.twitter.com/i/adsct?txn_id=ntyp3&p_id=Twitter&tw_sale_amount=0&tw_order_quantity=0" />
<img height="1" width="1" style="display:none;" alt="" src="//t.co/i/adsct?txn_id=ntyp3&p_id=Twitter&tw_sale_amount=0&tw_order_quantity=0" />
</noscript>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if IE ]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<link href="site/css/ie.css" rel="stylesheet">
      <![endif]-->
    </head>
    <body class="psico" >

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
    		<h3 class="hEscuela">Escuela de Psicología y Astrolog&iacute;a</h3>
    		<h5 class="hEnsenanza">Enseñanza Privada Nivel Terciario - No oficial</h5>
    		<p class="pHeader">Personería Jurídica Nº I.G.J. 748 - C.E.N.O.C. Nº 16528</p>
    	</div>
    </div>
</div>  


              		
    		  		
    	</div>    	
<div class="header-mobile container visible-xs visible-sm">
    <div class="row">    
    
    	<div class="logo col-xs-12 " >
    		<img src="images/logo.png" class="pull-left">
    		
    			<h4 class="h1Header"><strong>Aztlan</strong></h4>
                 <h1 class="h1Header">Escuela de Psicología y Astrolog&iacute;a</h1>
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
		<!--  <div class="entrar"><a href="http://www.aztlan.org.ar/">Entrar al sitio web de la escuela</a></div>  -->
        <!--  <div class="entrar"><a href="http://www.cineclubaztlan.com//">Entrar al sitio del Cineclub</a></div>  -->
		<div class="clearfix"></div>		
		</div>
		<!--   END CONTENTS    -->
		
		<div class="visible-sm">
			<img class="img-responsive" src="../../images/eventos/landing/<?php echo $evento->idEvento?>.jpg"></img>
		</div>
		
		<div class="visible-xs" id="mobile-contents">
			<!--  <div class="entrar"><a href="http://www.aztlan.org.ar/">Entrar al sitio web</a></div> -->
		<div class="clearfix"></div>
				
		<div class="promo hidden-sm hidden-md hidden-lg">
			<span class="titulo" ><?php echo utf8_decode($evento->titulo)?></span>
			<span class="subtitulo" ><?php echo utf8_decode($evento->subtitulo)?></span>
						
			<!--   <span class="metodo" >Método: C. G. Jung / Cuarto Camino / Budismo / Hinduismo / Yoga</span>-->			
		</div>
		
		
		</div>
		
	<?php include('site/includes/form_fb.html')?>
	<?php include('site/includes/mobile-form_fb.html')?>
	
	<div class="informacion">
	<div class="container">
		<div class="row">
		  <div class="main-text col-md-5 col-md-offset-1 col-sm-12"> 	
            <h2 class="text-left titulo1">TALLER DE PSICOLOGÍA INTEGRAL HOLÍSTICA DE VERANO</h2>
            	<h2 class="text-left sub-titulos">ANOTATE YA PARA ENERO O FEBRERO y conseguí tu descuento del 20%</h2>
						
<h9 class="text-left sub-titulos3">8 Jornadas (con opción a 4 jornadas)</h9>
			
						<h10 class="text-left sub-titulos5">Temas de las primeras 4 jornadas</h10>
                        
					
					
					<div class="beneficios">						
						<ul class="list-unstyled text-left">
							<li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Usar todo nuestro cerebro y vencer los hábitos-patrones limitantes</li>
							<li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Las emociones negativas y los antídotos para transformarlas (no reprimirlas)</li>
							<li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Técnicas prácticas para técnicas prácticas para tener mejores relaciones personales y profesionales</li>
							<li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Lográ un estado de paz interior independiente de las circunstancias</li>						
						</ul>
					</div>
                    <div > 
            	
				<h10 class="text-left sub-titulos5">               					
		  
   Temas de las 4 jornadas restantes (para participar de estas jornadas es necesario haber hecho las 4 primeras)
</h10>		
					<div class="beneficios">						
						<ul class="list-unstyled text-left">
							<li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Técnicas de meditación de Jung y Gurdjieff</li>
							<li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Alquimia. ¿Cómo nuestra mente afecta nuestro cuerpo?</li>
							<li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Sincronicidad - Atraemos nuestra vida</li>
							<li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Técnicas para no atraer eventos ni estados anímicos negativos</li>							
						</ul>
					</div>
                 	
                    					
		  <h10 class="text-left sub-titulos4">Modalidad del Taller: Jornadas de 1 h. 30 m.</h10>	
        
         <h10 class="text-left sub-titulos2">Días y horarios: Martes 10:30 hs. ó Lunes, Martes o Miércoles 19 hs. (4 clases de Enero o Febrero)
</h10>	

	
		
			</div>	
			</div>	
            
            <div class="main-text col-md-5 col-md-offset-1 col-sm-12"> 
          <h2 class="text-left titulo1">TALLER DE ASTROLOGÍA DE VERANO</h2>
          <h9 class="text-left sub-titulos3">Claves de la Astrología para una vida en plenitud</h9>
                	<h2 class="text-left sub-titulos">ANOTATE YA PARA ENERO O FEBRERO y conseguí tu descuento del 20 %
</h2>	
                <h9 class="text-left sub-titulos3">8 Jornadas Reveladoras (con opción a 4 jornadas)</h9>	<br />
                 
                		<div class="beneficios">				
						<h10 class="text-left sub-titulos5">
					    Temas de las primeras 4 jornadas</h10>
                        </div>
					
					<div class="beneficios">						
						<ul class="list-unstyled text-left">
							<li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Descubrí tu potencial creativo en el Karma positivo que traes</li>
							<li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Identificá tus enemigos internos y aprendé como dominarlos.</li>
							<li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Saná tus relaciones y elegí con sabiduría según tu carta natal</li>
							<li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Ciclos favorables y desfavorables </li>
						</ul>
					</div>
				
                    <div class="beneficios">	
    				
						<h10 class="text-left sub-titulos5">               					
		  
   Temas de las 4 jornadas restantes (para participar de estas jornadas es necesario haber hecho las 4 primeras)
</h10>

		</div>
					<div class="beneficios">	
                    					
						<ul class="list-unstyled text-left">
							<li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Profecías e influencias astrológicas para el año 2016</li>
							<li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Cómo te van a afectar las influencias y profecías según tu carta natal</li>
							<li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Descubrí tu misión en la vida 
</li>
							<li class="list-group-item"><span class="glyphicon glyphicon-ok-sign"></span> Realizá tu ascendente astrológico y se vos mismo</li>
						</ul>
					</div>
                    <div class="beneficios">	
                    					
		  <h10 class="text-left sub-titulos4">Modalidad del Taller: Jornadas de 1 h. 30 m.</h10>	
        
         <h10 class="text-left sub-titulos2">Días y horarios: Jueves 10:30 hs. ó Jueves 19 hs. (4 Jueves de Enero o Febrero)</h10>	
	</div>

		</div>
                 	


		
			</div>	
			
	<div class="main-text col-md-10 col-md-offset-1 col-sm-12"> 		
		<h2 class="sub-titulos">Nuestra Escuela</h2>
			<p class="texto"> 
			La Escuela Aztlan es una institución educativa de Psicología y Filosofía, fundada en la República Argentina hace más de 50 años por el Filósofo León Azulay. El Programa de Formación de la Escuela Aztlan es único en nuestro país. Consiste en el estudio comparado y combinado de la Psicología de Carl G. Jung, el Cuarto Camino de Gurdjieff, la Psicología y Filosofía Budista y de la India, y la Filosofía Griega y Occidental contemporánea.
			</br></br>La necesidad de un estudio comparado y holístico de los distintos sistemas es de suma importancia, ya que provee un enfoque pedagógico y terapéutico  verdaderamente  moderno, acorde con las necesidades del hombre y la mujer del  SXXI.
			</br></br>El conocimiento unificado es la vía para lograr una vida más integrada, consciente  e individualizada.</p>
	</div>
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
			<a href="http://www.aztlan.org.ar/blog">Ir al Blog</a>
		</div>
	</div>

	
  <nav class="footer " role="navigation">
  <div class="container">
   <span>&copy; 2015 ESCUELA AZTLAN - Almagro, Ciudad Autónoma de Buenos Aires, Argentina - <a href="mailto:secretaria@aztlan.org.ar">secretaria@aztlan.org.ar</a>  4981-2442/11 3895 6730</span>
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
