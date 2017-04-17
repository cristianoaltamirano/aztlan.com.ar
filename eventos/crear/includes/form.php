<?php
if(count($_POST) > 0){
	
	echo "RECORD";
	//var_dump($_POST);die;
	
	$newEvento = GET_eventos::setEvento($_POST);
	
	//var_dump($evento);die;
	if(isset($_POST['idEvento'])){
		header('Location: eventoCreado.php?success=1&changed=1&idEvento='.$newEvento);
	}	
	else {
		GET_Eventos::setCamp($newEvento);
		header('Location: eventoCreado.php?success=1&idEvento='.$newEvento);
	}
	exit;
}


?>



<!DOCTYPE html>
<html lang="es"><head>
<meta charset="utf-8">
<title>Eventos</title>
<link rel="icon" type="../../image/png" href="favicon.png">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Gentium+Book+Basic:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

<link href="../site/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../site/bootstrap/css/bootstrap-switch.min.css" rel="stylesheet">
<link href="../site/css/bootstrap-datetimepicker.min.css" rel="stylesheet">

<link rel="stylesheet/less" type="text/css" href="../site/less/estilos.less" />
<script src="../site/less/less-1.4.1.min.js"></script>

<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/moment.js"></script>
<script src="js/bootstrap-datetimepicker.min.js"></script>
<script src="../site/bootstrap/js/bootstrap-switch.min.js"></script>

<script src="ckeditor/ckeditor.js"></script>
<script src="ckeditor/adapters/jquery.js" type="text/javascript" ></script>
	
<script src="js/script.js"></script>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if IE ]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<link href="http://aztlan.com.ar/site/css/ie.css" rel="stylesheet">
			<![endif]-->

</head>
	<body>	
	
	<nav class="header-nav">
<div class="header container">
    <div class="row">
    
    	<div class="logo col-xs-2 col-sm-3 col-md-4 hidden-xs ">
    		<img src="../images/logo.png"  class="pull-left">
    		<div  class="pull-left hidden-sm">
    			<h1 class="h1Header">Aztlan</h1>
    			<h4 class="h4Header">Director León Azulay</h4>
    		</div>    		
    	</div>    	
     	
    	<div class="slogan col-xs-8 col-sm-8 col-md-6">
    		<h1 class="h1Header">Escuela de Filosofía y Psicología</h1>
    		<h4 class="h4Header"><strong>Enseñanza Privada Nivel Terciario - No oficial</strong></h4>
    		<p class="pHeader hidden-xs">Personería Jurídica Nº I.G.J. 748</p>
    		<p class="pHeader hidden-xs">Centro Nacional de Organizaciones de la Comunidad C.E.N.O.C. Nº 16528</p>
    	</div>
    	<div  class="slogan col-xs-2 col-sm-2 col-md-2">
    	<a href="http://aztlan.com.ar/eventos" ><span style="font-size:50px;" class="glyphicon glyphicon-home"></span></a>
    	</div>
    </div>
</div>  
 </nav>
	
	

<div id="form" class="container" style="padding-top:50px;">
  
  	   <form class="form-horizontal" role="form" action="evento.php" method="POST">
  	   
  	   <?php 
  	   	if(isset($evento) && !is_null($evento)){
  	   		
  	   		echo '<div class="form-group" style="display:none;">';
		    echo '<label for="idEvento" class="col-sm-3 control-label">IdEvento</label>';
		    echo '<div class="col-sm-8">';
		    echo '<input type="number" class="form-control" id="idEvento" name="idEvento"  value="'.$evento->idEvento.'">';
			echo '</div>';
		  	echo '</div>';  
  	   	}
  	   ?>
  	   <div class="form-group">  	  
		     <label for="activo" class="col-sm-3 control-label">Activo</label>
		     <div class="col-sm-8">
		      <div class="switch-wrapper">		     	
		     	<?php		
		      		echo '<input id="switch-state" type="checkbox" name="activo"';
		      		if(!isset($evento) || $evento->activo == 1) echo 'checked';
		      		echo ' >';		      	
		     	?>	
		     </div> 
		     </div>
	   </div>
		       
		<div class="form-group">  	  
		     <label for="mostrarHome" class="col-sm-3 control-label">Mostrar en Home</label>
		     <div class="col-sm-8">
		      <div class="switch-wrapper">		     
		     	<?php		
		      		echo '<input id="switch-state-2" type="checkbox" name="mostrarHome"';
		      		if(!isset($evento) || $evento->mostrarHome == 1) echo 'checked';
		      		echo ' >';		      	
		     	?>	     	
		     </div> 
		     </div>
	   </div> 
	   
	  <div class="form-group">  	  
		     <label for="mostrarAstro" class="col-sm-3 control-label">Mostrar en Web Astrología</label>
		     <div class="col-sm-8">
		      <div class="switch-wrapper">
		      <?php		
		      		echo '<input id="switch-state-3" type="checkbox" name="mostrarAstro"';
		      		if(!isset($evento) || $evento->mostrarAstro == 1) echo 'checked';
		      		echo ' >';		      	
		     	?>	     	
		     </div> 
		     </div>
	   </div> 
	   
	   <div class="form-group">  	  
		     <label for="mostrarPsico" class="col-sm-3 control-label">Mostrar en Web Psicología</label>
		     <div class="col-sm-8">
		      <div class="switch-wrapper">
		      <?php		
		      		echo '<input id="switch-state-4" type="checkbox" name="mostrarPsico"';
		      		if(!isset($evento) || $evento->mostrarPsico == 1) echo 'checked';
		      		echo ' >';		      	
		     	?>	     	
		     </div> 
		     </div>
	   </div>  
		        
  <div class="form-group">
    <label for="tipoEvento" class="col-sm-3 control-label">Tipo Evento</label>
    <div class="col-sm-8">
      <select class="form-control"  name="tipoEvento" >
		  <!-- <option value="1" <?php if(isset($evento) && $evento->tipoEvento_idTipo == 1)echo 'selected';?> >Cineclub</option>
		  <option value="2" <?php if(isset($evento) && $evento->tipoEvento_idTipo == 2)echo 'selected';?> >Taller</option> -->
		  <option value="3" <?php if(isset($evento) && $evento->tipoEvento_idTipo == 3 || !isset($evento))echo 'selected';?> >Charla Psicología</option>
		  <option value="4" <?php if(isset($evento) && $evento->tipoEvento_idTipo == 4)echo 'selected';?> >Charla Astrología</option>
		  <option value="7" <?php if(isset($evento) && $evento->tipoEvento_idTipo == 7)echo 'selected';?> >Charla Tarot</option>
		  <!-- <option value="8" <?php if(isset($evento) && $evento->tipoEvento_idTipo == 8)echo 'selected';?> >Consultoría Astrológica</option> -->
		  <option value="9" <?php if(isset($evento) && $evento->tipoEvento_idTipo == 9)echo 'selected';?> >Charla Psicología y Astrología</option>
		  <!-- <option value="10" <?php if(isset($evento) && $evento->tipoEvento_idTipo == 10)echo 'selected';?> >Consulta Psicología</option>
		  <option value="11" <?php if(isset($evento) && $evento->tipoEvento_idTipo == 11)echo 'selected';?> >Consulta Astrología</option>
		  <option value="12" <?php if(isset($evento) && $evento->tipoEvento_idTipo == 12)echo 'selected';?> >Consulta Tarot</option>
		  <option value="13" <?php if(isset($evento) && $evento->tipoEvento_idTipo == 13)echo 'selected';?> >Entrevista Psicología</option>
		  <option value="14" <?php if(isset($evento) && $evento->tipoEvento_idTipo == 14)echo 'selected';?> >Entrevista Astrología</option>
		  <option value="17" <?php if(isset($evento) && $evento->tipoEvento_idTipo == 17)echo 'selected';?> >Entrevista Tarot</option>
		  <option value="15" <?php if(isset($evento) && $evento->tipoEvento_idTipo == 15)echo 'selected';?> >Beca Psicología</option>
		  <option value="16" <?php if(isset($evento) && $evento->tipoEvento_idTipo == 16)echo 'selected';?> >Beca Astrología</option>-->
		  <option value="18" <?php if(isset($evento) && $evento->tipoEvento_idTipo == 18)echo 'selected';?> >Psicología con Videos</option>
		  <option value="19" <?php if(isset($evento) && $evento->tipoEvento_idTipo == 19)echo 'selected';?> >Astrología con Videos</option>
		  <option value="20" <?php if(isset($evento) && $evento->tipoEvento_idTipo == 20)echo 'selected';?> >Tarot con Videos</option>
		  <!-- <option value="21" <?php if(isset($evento) && $evento->tipoEvento_idTipo == 21)echo 'selected';?> >Psicologia Charla 2016</option>
		  <option value="22" <?php if(isset($evento) && $evento->tipoEvento_idTipo == 22)echo 'selected';?> >Astrologia Charla 2016</option>
		  <option value="23" <?php if(isset($evento) && $evento->tipoEvento_idTipo == 23)echo 'selected';?> >Tarot Charla 2016</option> -->
		  <option value="24" <?php if(isset($evento) && $evento->tipoEvento_idTipo == 24)echo 'selected';?> >Psico Reserva Horarios</option>
		  <option value="25" <?php if(isset($evento) && $evento->tipoEvento_idTipo == 25)echo 'selected';?> >Astro Reserva Horarios</option>
		  <option value="26" <?php if(isset($evento) && $evento->tipoEvento_idTipo == 26)echo 'selected';?> >Consultas Cursos 2017</option>
		  <option value="27" <?php if(isset($evento) && $evento->tipoEvento_idTipo == 27)echo 'selected';?> >Consultas Talleres 2017</option>
		  <option value="28" <?php if(isset($evento) && $evento->tipoEvento_idTipo == 28)echo 'selected';?> >Consultas Cursos y Talleres 2017</option>
		  <option value="29" <?php if(isset($evento) && $evento->tipoEvento_idTipo == 29)echo 'selected';?> >Consultas Psicología 2017</option>
		  <option value="30" <?php if(isset($evento) && $evento->tipoEvento_idTipo == 30)echo 'selected';?> >Consultas Astrología 2017</option>
		  <option value="31" <?php if(isset($evento) && $evento->tipoEvento_idTipo == 31)echo 'selected';?> >Consultas Tarot 2017</option>
		  <option value="32" <?php if(isset($evento) && $evento->tipoEvento_idTipo == 32)echo 'selected';?> >Descuento Psicología 2017</option>
		  <option value="33" <?php if(isset($evento) && $evento->tipoEvento_idTipo == 33)echo 'selected';?> >Descuento Astrología 2017</option>
		  <option value="34" <?php if(isset($evento) && $evento->tipoEvento_idTipo == 34)echo 'selected';?> >Descuento Tarot 2017</option>
		</select>

    </div>
  </div>
  
  <div class="form-group">
    	<label for="disponibilidad" class="col-sm-3 control-label">Disponibilidad</label>
    	<div class="col-sm-8">
     	<input type="number" class="form-control" id="disponibilidad" name="disponibilidad" placeholder="Disponibilidad" value="120">
		</div>
  </div>
  
  <div class="form-group">
    	<label for="lugar" class="col-sm-3 control-label">Lugar</label>
    	<div class="col-sm-8">
	     	 <select class="form-control"  name="lugar" >
			  <option value="1" <?php if(isset($evento) && $evento->lugar_idLugar == 1)echo 'selected';?> >Apart Hotel Congreso - Sala Grande</option>
			  <option value="2" <?php if(isset($evento) && $evento->lugar_idLugar == 2)echo 'selected';?> >Apart Hotel Congreso - Sala Chica</option>
			  <option value="3" <?php if(isset($evento) && $evento->lugar_idLugar == 3 || !isset($evento))echo 'selected';?>>Escuela Aztlan - Sede Central</option>
			  <option value="4" <?php if(isset($evento) && $evento->lugar_idLugar == 4)echo 'selected';?> >Escuela Aztlan - Sede Almagro II</option>			  
			  <option value="5" <?php if(isset($evento) && $evento->lugar_idLugar == 5)echo 'selected';?> >Jardín de los Ángeles</option>
			  <option value="6" <?php if(isset($evento) && $evento->lugar_idLugar == 6)echo 'selected';?> >Sr. Duncan - Centro Cultural</option>
			  <option value="7" <?php if(isset($evento) && $evento->lugar_idLugar == 7)echo 'selected';?> >Salon</option>
			</select>
		</div>
  </div>
  
  <div class="form-group">
    <label for="fecha" class="col-sm-3 control-label">Fecha Sistema</label>
    <div class="col-sm-8">      
			<div class='input-group date' id='datetimepicker5'>
				<input type='text' class="form-control" data-date-format="YYYY/MM/DD"  name="fecha" />
				<span class="input-group-addon">
					<span class="glyphicon glyphicon-calendar"></span>
				</span>
			</div>			
		</div>
		<?php if(isset($evento)){
		echo '<script type="text/javascript">
			$(function (){
			 /* $("#setDate").click(function () {*/
                    $("#datetimepicker5").data("DateTimePicker").setDate("'.$evento->date.'");
               /* });
                
                $("#datetimepicker5").data("DateTimePicker").show();   */          
                
            });
             
        </script>';
		}
		?>
        
    </div>
    
    <div class="form-group">
    	<label for="titulo" class="col-sm-3 control-label">Título</label>
    	<div class="col-sm-8">
      	<input type="text" class="form-control" id="titulo" placeholder="Título" name="titulo" <?php if(isset($evento)) echo 'value="'.utf8_decode($evento->titulo).'"'?> >
		</div>
    </div>
    
    <div class="form-group">
    	<label for="subtitulo" class="col-sm-3 control-label">Subtítulo</label>
    	<div class="col-sm-8">
      <input type="text" class="form-control" id="subtitulo" placeholder="Subtítulo"  name="subtitulo"  <?php if(isset($evento)) echo 'value="'.utf8_decode($evento->subtitulo).'"'?>>
		</div>
    </div>
    
    <div class="form-group">
    	<label for="fechaVisible" class="col-sm-3 control-label">Fecha Visible</label>
    	<div class="col-sm-8">
      <input type="text" class="form-control" id="fechaVisible" placeholder="Fecha Visible"  name="fechaStr"  <?php if(isset($evento)) echo 'value="'.utf8_decode($evento->fechaStr).'"'?>>
		</div>
    </div>
    
    <div class="form-group">
    	<label for=""horario"" class="col-sm-3 control-label">Horario</label>
    	<div class="col-sm-8">
      <input type="text" class="form-control" id="horario"   name="horario"  <?php if(isset($evento)) echo 'value="'.utf8_decode($evento->horario).'"'; else echo 'value=17:00'; ?>>
		</div>
    </div>
    <div class="form-group">
    	<label for="maxHorario" class="col-sm-3 control-label">Max Horario</label>
    	<div class="col-sm-8">
      <input type="text" class="form-control" id="maxHorario"   name="maxHorario"  <?php if(isset($evento)) echo 'value="'.utf8_decode($evento->maxHorario).'"'; else echo 'value=17:15'; ?>>
		</div>
    </div>
    
    <div class="form-group <?php echo (isset($evento) && $evento->tipoEvento_idTipo == 1) ? 'visible' : 'hidden'?> ">
    	<label for="idYoutube" class="col-sm-3 control-label">Video de YouTube (solo ID)</label>
    	<div class="col-sm-8">
      <input type="text" class="form-control" id="idYoutube" placeholder="Solo si es CINECLUB, insertar ID de Video de YOUTUBE"  name="idYoutube"  <?php if(isset($evento) && $evento->idYoutube != '') echo 'value="'.$evento->idYoutube.'"'?>>
		</div>
    </div>
    
    <div class="form-group <?php echo (isset($evento) && $evento->tipoEvento_idTipo == 1) ? 'visible' : 'hidden'?> ">
    	<label for="link" class="col-sm-3 control-label">Link</label>
    	<div class="col-sm-8">
      <input type="text" class="form-control" id="link" placeholder="Link"  name="link"  <?php if(isset($evento) && $evento->link != '') echo 'value="'.$evento->link.'"'?>>
		</div>
    </div>
    
    <div class="form-group">
    	<label for="fechaVisible" class="col-sm-3 control-label">Texto</label>
    	<div class="col-sm-8">
      		
      		<textarea name="texto" id="editorEditar"  rows="10" class="ckeditor required form-control" ><?php if(isset($evento)) echo utf8_decode(htmlspecialchars_decode($evento->texto))  ?></textarea>
		</div>		
		
    </div>
  <?php  	if(isset($evento) && !is_null($evento)){ 
		echo '<button type="submit" class="btn btn-warning btn-lg col-sm-offset-3">Editar Evento</button>';
  }else echo '<button type="submit" class="btn btn-warning btn-lg col-sm-offset-3">Crear Evento</button>';
  ?> 
</form>

<?php if(isset($evento) && !is_null($evento)){  	   		
  	   		echo '<a  class="btn btn-warning btn-lg col-sm-offset-3" href="eventoCreado.php?idEvento='.$evento->idEvento.'">Modificar fotos</a>';  
  	   	}
 ?>


</div>

</body>
</html>