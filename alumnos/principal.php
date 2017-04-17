<?php
//error_reporting(0);
session_start();
if($_SESSION['usuario']){
   header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es-AR">
	<head>
		<title>Principal</title>
		<link rel="stylesheet" type="text/css" href="css/estilos.css" />
		<script type="text/javascript" src="js/jquery.min.js"></script>		
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8_spanish_ci" />
		<script type="text/javascript">
			$(document).ready(function(){
				$("#verCursos2017v").click(function (){
					$(".div1-2017v").toggle("low");
					$(".div2-2017v").toggle("low");
				});	
				$("#verCursos2017a").click(function (){
					$(".div1-2017a").toggle("low");
					$(".div2-2017a").toggle("low");
				});	
				$(".div1-2017GE").toggle("low");
				$("#verGruposEstudio2017").click(function (){
					$(".div1-2017GE").toggle("low");
				});	
			});
		</script>	
	</head>
	<body>
		<?php
		$p = 0;
		include('cabecera.php');
		require_once 'classes/Conexion.php';
		require_once 'classes/GetCantAlumnos.php';
		require_once 'classes/GetCantCursos.php';
		require_once 'classes/ShowCursos.php';
		require_once 'classes/ShowCursosHoy.php';
		require_once 'classes/GetCantGruposEstudio.php';
		require_once 'classes/ShowGruposEstudio.php';
			$dbh = Conexion::getConexion();
			$dbh->query("SET NAMES 'utf8'");
		?>
		<!-- CANTIDAD DE ALUMNOS POR MATERIA Y POR SEDE -->	
		<div id='cuerpo'>
			<div class='innerCuerpo'>
			<h3>Principal</h3>
			<?php 
				$resultSet = $dbh->query("SELECT mostrar FROM ciclolectivos WHERE cicloLectivo='2017'");
				$cicloLectivo = $resultSet->fetchObject();
				
				if($cicloLectivo->mostrar==1){
				?>
			<div class='div4'>	
				<div class='div3'>
					<h4>Alumnos 2017 Activos:</h4>	
					<div class="div2">
						<table class='tablaPrincipal'>			
							<tr>
								<th>Tarde</th>
								<th class='medio'>Psicolog&iacute;a</th>
								<th class='medio'>Astrolog&iacute;a</th>
								<th class='medio'>Total</th>
							</tr>
							<tr>
								<th>Verano</th>
								<?php
								$h4 = new GetCantCursos($dbh);
								$tr = new ShowCursos($dbh);
								$td = new GetCantAlumnos($dbh, '2017');
								$td->imprimir('1', '1', '1');
								$td->imprimir('1', '1', '2');
								$td->imprimirTot('1');
								?>
							</tr>
							<tr>
								<th>Anuales</th>
								<?php
								$td = new GetCantAlumnos($dbh, '2017');
								$td->imprimir('2', '1', '1');
								$td->imprimir('2', '1', '2');
								$td->imprimirTot('2');
								?>
							</tr>
						</table>
					</div>
					<div class="div1">
						<table class='tablaPrincipal'>			
							<tr>
								<th>Ma&ntilde;ana</th>
								<th class='medio'>Psicolog&iacute;a</th>
								<th class='medio'>Astrolog&iacute;a</th>
								<th class='medio'>Total</th>
							</tr>
							<tr>
								<th>Verano</th>
								<?php
								$td->imprimir('1', '2', '1');
								$td->imprimir('1', '2', '2');
								$td->imprimirTot('1');
								?>
							</tr>
							<tr>
								<th>Anuales</th>
								<?php
								$td->imprimir('2', '2', '1');
								$td->imprimir('2', '2', '2');
								$td->imprimirTot('2');
								$td->desc();
								?>
							</tr>
						</table>					
					</div>	
				</div><!-- FIN DE DIV 3 -->		
				<div class='div3' style="display: none;">		
					<h4>Cursos Verano 2017 Activos:		
					<?php
					// Modalidad - Situacion - Ciclo Lectivo
					$h4->imprimir('1','1', '2017');
					$h4->desc();
					?>							
					<p><button id='verCursos2017v'>Ver / Ocultar</button></p>					
					<div class="div2-2017v">
						<table  class='tablaCursos'>
							<tr>
								<th>Talleres</th>
								<th class='medio'>Alumnos</th>
								<!--<th class='medio'>Ver</th>-->
							</tr>
							<?php
							// Modalidad - Sede - Aula - Situacion - Periodo - Ciclo Lectivo
							$tr->imprimir('1', '1', '1','1',$idP,'2017', true);
							$tr->imprimir('1', '1', '2','1',$idP,'2017', true);
							/*$tr->imprimir('1', '1', '3','1',$idP,'2017', true);
							$tr->imprimir('1', '1', '4','1',$idP,'2017', true);*/
							$tr->desc();	
							?>	
						</table>
						<table  class='tablaCursos'>
							<tr>
								<th>Cursos - Tarde - Aula 1</th>
								<th class='medio'>Alumnos</th>
								<!--<th class='medio'>Ver</th>-->
							</tr>
							<?php
							// Modalidad - Sede - Aula - Situacion - Periodo - Ciclo Lectivo
							$tr->imprimir('1', '1', '1','1',$idP,'2017');	
							$tr->desc();				
							?>	
						</table>
						<table  class='tablaCursos'>
							<tr>
								<th>Cursos - Tarde - Aula 2</th>
								<th class='medio'>Alumnos</th>
								<!--<th class='medio'>Ver</th>-->
							</tr>
							<?php
							$tr->imprimir('1', '1', '2','1',$idP,'2017');	
							$tr->desc();			
							?>
						</table>
						
						<table  class='tablaCursos'>
							<tr>
							<th>Cursos - Tarde - Aula 3</th>
							<th class='medio'>Alumnos</th>
							<!--<th class='medio'>Ver</th>-->
							</tr>
							<?php
							$tr->imprimir('1', '1', '3','1',$idP,'2017');	
							$tr->desc();	
							?>
						</table>
						<table  class='tablaCursos'>
							<tr>
							<th>Cursos - Tarde - Aula 4</th>
							<th class='medio'>Alumnos</th>
							<!--<th class='medio'>Ver</th>-->
							</tr>
							<?php
							$tr->imprimir('1', '1', '4','1',$idP,'2017');	
							$tr->desc();	
							?>
						</table>
					</div> <!-- FIN DE DIV 2 -->
					
					<div class="div1-2017v">
						<table  class='tablaCursos'>
							<tr>
								<th>Cursos - Ma&ntilde;ana - Aula 1</th>
								<th class='medio'>Alumnos</th>
								<!--<th class='medio'>Ver</th>-->
							</tr>
							<?php
							$tr->imprimir('1', '2', '1','1',$idP,'2017');	
							$tr->desc();			
							?>					
						</table>					
						<table  class='tablaCursos'>
							<tr>
								<th>Cursos - Ma&ntilde;ana - Aula 2</th>
								<th class='medio'>Alumnos</th>
								<!--<th class='medio'>Ver</th>-->
							</tr>
							<?php
							$tr->imprimir('1', '2', '2','1',$idP,'2017');
							$tr->desc();				
							?>
						</table>
						<table  class='tablaCursos'>
							<tr>
								<th>Cursos - Ma&ntilde;ana - Aula 3</th>
								<th class='medio'>Alumnos</th>
								<!--<th class='medio'>Ver</th>-->
							</tr>
							<?php
							$tr->imprimir('1', '2', '3','1',$idP,'2017');
							$tr->desc();				
							?>
						</table>
						<table  class='tablaCursos'>
							<tr>
								<th>Cursos - Ma&ntilde;ana - Aula 4</th>
								<th class='medio'>Alumnos</th>
								<!--<th class='medio'>Ver</th>-->
							</tr>
							<?php
							$tr->imprimir('1', '2', '4','1',$idP,'2017');
							$tr->desc();				
							?>
						</table>
						<div class='clear'></div>					
					</div> <!-- FIN DE DIV 1 -->	
				</div> <!-- FIN DE DIV 3 -->


				

				<div class='div3'>		
					<h4>Cursos Anuales 2017 Activos:		
					<?php
					$h4->imprimir('2','1', '2017');
					$h4->desc();
					?>							
					<p><button id='verCursos2017a'>Ver / Ocultar</button></p>					
					<div class="div2-2017a">
						<table  class='tablaCursos'>
							<tr>
								<th>Cursos - Tarde - Aula 1</th>
								<th class='medio'>Alumnos</th>
								<!--<th class='medio'>Ver</th>-->
							</tr>
							<?php
							$tr->imprimir('2', '1', '1','1',$idP,'2017');				
							?>	
						</table>
						<table  class='tablaCursos'>
							<tr>
								<th>Cursos - Tarde - Aula 2</th>
								<th class='medio'>Alumnos</th>
								<!--<th class='medio'>Ver</th>-->
							</tr>
							<?php
							$tr->imprimir('2', '1', '2','1',$idP,'2017');			
							?>
						</table>
						
						<table  class='tablaCursos'>
							<tr>
							<th>Cursos - Tarde - Aula 3</th>
							<th class='medio'>Alumnos</th>
							<!--<th class='medio'>Ver</th>-->
							</tr>
							<?php
							$tr->imprimir('2', '1', '3','1',$idP,'2017');	
							?>
						</table>

						<table  class='tablaCursos'>
							<tr>
							<th>Cursos - Tarde - Aula 4</th>
							<th class='medio'>Alumnos</th>
							<!--<th class='medio'>Ver</th>-->
							</tr>
							<?php
							$tr->imprimir('2', '1', '4','1',$idP,'2017');	
							?>
						</table>
					</div> <!-- FIN DE DIV 2 -->
					
					<div class="div1-2017a">
						<table  class='tablaCursos'>
							<tr>
								<th>Cursos - Ma&ntilde;ana - Aula 1</th>
								<th class='medio'>Alumnos</th>
								<!--<th class='medio'>Ver</th>-->
							</tr>
							<?php
							$tr->imprimir('2', '2', '1','1',$idP,'2017');			
							?>					
						</table>					
						<table  class='tablaCursos'>
							<tr>
								<th>Cursos - Ma&ntilde;ana - Aula 2</th>
								<th class='medio'>Alumnos</th>
								<!--<th class='medio'>Ver</th>-->
							</tr>
							<?php
							$tr->imprimir('2', '2', '2','1',$idP,'2017');
							$tr->desc();				
							?>
						</table>
						<table  class='tablaCursos'>
							<tr>
							<th>Cursos - Ma&ntilde;ana - Aula 3</th>
							<th class='medio'>Alumnos</th>
							<!--<th class='medio'>Ver</th>-->
							</tr>
							<?php
							$tr->imprimir('2', '2', '3','1',$idP,'2017');	
							?>
						</table>
						<table  class='tablaCursos'>
							<tr>
							<th>Cursos - Ma&ntilde;ana - Aula 4</th>
							<th class='medio'>Alumnos</th>
							<!--<th class='medio'>Ver</th>-->
							</tr>
							<?php
							$tr->imprimir('2', '2', '4','1',$idP,'2017');	
							?>
						</table>

						<div class='clear'></div>					
					</div> <!-- FIN DE DIV 1 -->	
				</div> <!-- FIN DE DIV 3 -->	

				<div class='div3'>		
					<h4>Grupos de Estudio 2017:		
					<?php
					$h4GE = new GetCantGruposEstudio($dbh);
					$h4GE->imprimir('1','2017');
					$h4GE->desc();
					?>							
					<p><button id='verGruposEstudio2017'>Ver / Ocultar</button></p>					
					<div class="div1-2017GE">
						<table  class='tablaCursos'>
							<tr>
								<th>Grupo de Estudio</th>
								<th class='medio'>Alumnos</th>
								<!--<th class='medio'>Ver</th>-->
							</tr>
							<?php
							$trGE = new ShowGruposEstudio($dbh);
							$trGE->imprimir('1', '2017');				
							?>	
						</table>
					</div> <!-- FIN DE DIV 2 -->
						
				</div> <!-- FIN DE DIV 3 -->	
				
				<div class='clear'></div>	
			</div> 	<!-- FIN DE DIV 4 -->
			<?php } ?>
			</div>  <!-- FIN DE INNER CUERPO -->	
		</div>	 <!-- FIN DE CUERPO -->
		<?php include('pie.php');?>
	</body>
</html>
<?php
}else{
header("location:index.php");
}
?>