<!DOCTYPE html>
<html lang="">
	<head>
		<?php include('includes/head.php'); ?>

		<script src="js/main.js"></script>
		
		<style type="text/css">
			#screenshot {
				position: absolute;
				border: 1px solid #ccc;
				background: #333;
				padding: 5px;
				display: none;
				color: #fff;
			}
			
			.table-scrollablea,
			.table-scrollable a:link,
			.table-scrollable a:visited,
			.table-scrollable a:hover,
			.table-scrollable a:focus,
			.table-scrollable td {
				font-size: 12px !important;
				text-align: center !important;
			}
			
			.table-scrollablea a:hover {
				text-decoration: underline;
			}
			
			.table th {
				max-width: 90px;
				width: 90px;
			}
			
			.table td {
				max-width: 90px;
				width: 90px;
			}
			
			.thead>tr>th:first-child {
				max-width: 70px;
				width: 70px;
			}
			
			#articulo .col-sm-9 {
				padding: 0 0px 0 40px;
			}
			
			@media (max-width: 600px) {}
		</style>
	</head>
	<body>
		<div id="fb-root"></div>
		<script>
			( function ( d, s, id ) {
				var js, fjs = d.getElementsByTagName( s )[ 0 ];
				if ( d.getElementById( id ) ) return;
				js = d.createElement( s );
				js.id = id;
				js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.8";
				fjs.parentNode.insertBefore( js, fjs );
			}( document, 'script', 'facebook-jssdk' ) );
		</script>
		<div class="container" id="contenedor">
			<?php include('includes/navbar.php');?>
			<section>
				<div style="height: auto;background-color: #ebebeb;max-width: 1600px;">
					<img class="img-responsive" src="assets/images/articulos/agenda.jpg" alt="">
				</div>
			</section>
			<!-- Page Content -->
			<div class="container-fluid cont-section" style="padding-top:20px" id="articulo">
				<!-- /.row -->
				<div class="row">
					<div class="col-sm-9 col-lg-8">
						<!-- titulo -->
						<div class="page-header articulo_header">
							<h2 class="articulo_text_header">Agenda semanal</h2>
							<h3> Si no podés asistir a una charla, solicitá tu   <span class="reserva">  <a href="http://aztlan.org.ar/contacto.php">Entrevista Personalizada</a></span></h3>
						</div>
						<!-- Bajada -->
						<!--CALENDAR-->
						<div class="table-scrollable">
							<table class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
										<th scope="col"> </th>
										<th scope="col"> Lunes </th>
										<th scope="col"> Martes </th>
										<th scope="col"> Miércoles </th>
										<th scope="col"> Jueves </th>
										<th scope="col"> Viernes </th>
										<th scope="col"> Sábado </th>
										<th scope="col"> Domingo </th>
									</tr>
								</thead>
								<tbody style="font-size: 14px!important;text-align: center;">
									
									<tr>
										<td> 9:00 hs </td>
										<!-- LUNES -->
										<td> </td>
										<!-- MARTES -->
										<td> </td>
										<!-- MIÉRCOLES -->
										<td> </td>
										<!-- JUEVES -->
										<td> </td>
										<!-- VIERNES -->
										<td> </td>
										<!-- SÁBADO -->
										<td> </td>
										<!-- DOMINGO -->
										<td></td>
									</tr>
									<tr>
										<td> 10:00 hs </td>
										<!-- LUNES -->
										<td></td>
										<!-- MARTES -->
										<td></td>
										<!-- MIÉRCOLES -->
										<td></td>
										<!-- JUEVES -->
										<td></td>
										<!-- VIERNES -->
										<td></td>
										<!-- SÁBADO -->
										<td></td>
										<!-- DOMINGO -->
										<td></td>
									</tr>
									<tr>
										<td> 10:30 hs </td>
										<!-- LUNES -->
										<td>
											<div>
												<a class="screenshot" href="http://www.aztlan.org.ar/pages/psi/?c=1256/3/7" style="color:#1a0e26; text-align: center !important" rel="http://www.aztlan.com.ar/images/eventos/agenda/agenda_psico_lunes_1030.jpg">
													<strong>CHARLA</strong>
													<br>Cómo Vivir el Presente: Aquí y Ahora
													<br>
												</a>
											</div>
										</td>
										<!-- MARTES -->
										<td>
											<div>
												<a class="screenshot" href="http://www.aztlan.org.ar/pages/psi/?c=1258/3/7" style="color:#1a0e26; text-align: center !important" rel="http://www.aztlan.com.ar/images/eventos/agenda/agenda_psico_martes_1030.jpg">
													<strong>CHARLA</strong>
													<br>Mejorá tus Pensamientos, tus Emociones y tu Cuerpo
													<br>
												</a>
											</div>
										</td>
										<!-- MIÉRCOLES -->
										<td>
											<div>
												<a class="screenshot" href="http://www.aztlan.org.ar/pages/psi/?c=1260/3/7" style="color:#1a0e26; text-align: center !important" rel="http://www.aztlan.com.ar/images/eventos/agenda/agenda_psico_miercoles_1030.jpg">
													<strong>CHARLA</strong>
													<br>Sacrificá tu Sufrimiento Inútil: Aprendé a eliminar todo lo que no te ayude en tu crecimiento y éxito
													<br>
												</a>
											</div>
										</td>
										<!-- JUEVES -->
										<td>
											<div>
												<a class="screenshot" href="http://www.aztlan.org.ar/pages/psi/?c=1262/3/7" style="color:#1a0e26; text-align: center !important" rel="http://www.aztlan.com.ar/images/eventos/agenda/agenda_psico_jueves_1030.jpg">
													<strong>CHARLA</strong>
													<br>Las Emociones Afectan tu Motivación
													<br>
												</a>
											</div>
										</td>
										<!-- VIERNES -->
										<td> </td>
										<!-- SÁBADO -->
										<td> </td>
										<!-- DOMINGO -->
										<td> </td>
									</tr>
									<tr>
										<td> 12:00 hs </td>
										<!-- LUNES -->
										<td></td>
										<!-- MARTES -->
										<td></td>
										<!-- MIÉRCOLES -->
										<td></td>
										<!-- JUEVES -->
										<td></td>
										<!-- VIERNES -->
										<td></td>
										<!-- SÁBADO -->
										<td></td>
										<!-- DOMINGO -->
										<td></td>
									</tr>
									<tr>
										<td> 16:30 hs </td>
										<!-- LUNES -->
										<td></td>
										<!-- MARTES -->
										<td></td>
										<!-- MIÉRCOLES -->
										<td></td>
										<!-- JUEVES -->
										<td></td>
										<!-- VIERNES -->
										<td></td>
										<!-- SÁBADO -->
										<td></td>
										<!-- DOMINGO -->
										<td></td>
									</tr>
									<tr>
										<td> 18:30 hs </td>
										<!-- LUNES -->
										<td></td>
										<!-- MARTES -->
										<td></td>
										<!-- MIÉRCOLES -->
										<td></td>
										<!-- JUEVES -->
										<td></td>
										<!-- VIERNES -->
										<td></td>
										<!-- SÁBADO -->
										<td></td>
										<!-- DOMINGO -->
										<td></td>
									</tr>
									<tr>
										<td> 19:00 hs </td>
										<!-- LUNES -->
										<td>
											<div>
												<a class="screenshot" href="http://www.aztlan.org.ar/pages/psi/?c=1257/3/7" style="color:#1a0e26; text-align: center !important" rel="http://www.aztlan.com.ar/images/eventos/agenda/agenda_psico_lunes_19.jpg">
													<strong>CHARLA</strong>
													<br>Cómo Transformar las Emociones Negativas
													<br>
												</a>
											</div>
										</td>
										<!-- MARTES -->
										<td>
											<div>
												<a class="screenshot" href="http://www.aztlan.org.ar/pages/psi/?c=1259/3/7" style="color:#1a0e26; text-align: center !important" rel="http://www.aztlan.com.ar/images/eventos/agenda/agenda_psico_martes_19.jpg">
													<strong>CHARLA</strong>
													<br>Sincronicidad: Tus Pensamientos crean tu Realidad
													<br>
												</a>
											</div>
											<br />
											<div>
												<a class="screenshot" href="http://www.aztlan.org.ar/pages/psi/?c=1255/3/7" style="color:#1a0e26; text-align: center !important" rel="http://www.aztlan.com.ar/images/eventos/agenda/agenda_meditacion_martes_11.jpg">
													<strong>CLASE DE MUESTRA</strong>
													<br>Alcanzá un Estado de Paz y Relajación
													<br>
												</a>
											</div>
										</td>
										<!-- MIÉRCOLES -->
										<td>
											<div>
												<a class="screenshot" href="http://www.aztlan.org.ar/pages/psi/?c=1261/3/7" style="color:#1a0e26; text-align: center !important" rel="http://www.aztlan.com.ar/images/eventos/agenda/agenda_psico_miercoles_19.jpg">
													<strong>CHARLA</strong>
													<br>Cultivá la Atención Plena - Mindfulness: Has notado cómo tu Mente no puede concentrarse
													<br>
												</a>
											</div>
										</td>
										<!-- JUEVES -->
										<td>
											<div>
												<a class="screenshot" href="http://www.aztlan.org.ar/pages/psi/?c=1263/3/7" style="color:#1a0e26; text-align: center !important" rel="http://www.aztlan.com.ar/images/eventos/agenda/agenda_psico_jueves_19.jpg">
													<strong>CHARLA</strong>
													<br>APRENDÉ LA PRÁCTICA DEL DESAPEGO: A tus Relaciones, Emociones y Pensamientos conflictivos
													<br>
												</a>
											</div>
										</td>
										<!--
										<td><div><a class="screenshot" href="http://www.aztlan.org.ar/pages/psi/?c=1209/3/7" style="color:#1a0e26; text-align: center !important" rel="http://www.aztlan.com.ar/images/eventos/agenda/agenda_cineclub.jpg"><strong>CINECLUB</strong><br>
											Encuentro con Hombre Notables</a></div></td>
										-->
										<!-- VIERNES -->
										<td> </td>
										<!-- SÁBADO -->
										<td> </td>
										<!-- DOMINGO -->
										<td>
											<div>
												<a class="screenshot" href="http://www.aztlan.org.ar/pages/psi/?c=1275/3/7" style="color:#1a0e26; text-align: center !important" rel="http://www.aztlan.com.ar/images/eventos/agenda/agenda_psico_domingo_19.jpg">
													<strong>CHARLA</strong>
													<br>5 T&eacute;cnicas para Entrenar tu Mente y Alcanzar la Paz Interior
													<br>
												</a>
											</div>
										</td>
									</tr>
									<tr>
										<td> 19:30 hs </td>
										<!-- LUNES -->
										<td></td>
										<!-- MARTES -->
										<td></td>
										<!-- MIÉRCOLES -->
										<td></td>
										<!-- JUEVES -->
										<td></td>
										<!-- VIERNES -->
										<td></td>
										<!-- SÁBADO -->
										<td></td>
										<!-- DOMINGO -->
										<td></td>
									</tr>
								</tbody>
							</table>
						</div>
						<!--EVENTO-->
						<!-- <div style="margin-bottom:20px;">
												
												
														<div class="agenda-box-date">
																<div> <span class="dia">Domingo</span></div>
																			<div> <span class="numero">19</span></div>
																<div>   <span class="hora">MARZO</span></div>
																<div>   <span class="hora">19:00 hs.</span></div>
														</div>
														<div class="agenda-text">
																			<p style="margin-bottom: 0px;">CLASE PRESENCIAL</p>
																			<span class="titulo">Psicología Transpersonal</span>
																<p>Mejorá tus Emociones, tus Pensamientos y tu Cuerpo.</p>
																<span class="reserva"> Reservá tu lugar <a href="http://www.aztlan.org.ar/pages/psi/?c=1136/100/7">Aquí</a></span>
														</div>
												
						</div> -->
						<!-- FIN EVENTO-->
					</div>
					<div class="col-sm-3">
						<?php include('includes/rside-agenda.php');?>
						<!-- <img class="img-responsive" src="assets/images/articulos/aside.jpg" alt=""/>  -->
					</div>
				</div>
				<br>
				<!-- /.row -->
			</div>
			<!-- /.container-fluid -->
			<?php include('includes/footer.php');?>
		</div>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<!-- Go to www.addthis.com/dashboard to customize your tools -->
		<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-581e95d72d475c8b"></script>
	</body>
</html>