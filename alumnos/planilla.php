<?php
header('Content-Type: text/html; charset=utf-8');
$ver = 0;
error_reporting(0);
session_start();
if($_SESSION['usuario']){
$nivUs = $_SESSION['nivelUsuario'];
if($nivUs==1 or $nivUs==2){	
	if($_GET){
		$ver = $_GET['ver'];
		$idCurso = $_GET['idCurso'];
		$idP = $_GET['periodo'];
		$_SESSION['idCurso'] = $idCurso;
	}else{
		header("location:principal.php");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es-AR">
	<head>
		<title>Planilla</title>
		<link rel="stylesheet" type="text/css" href="css/estilos.css" />
		<link type="text/css" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" rel="Stylesheet" />	

		<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
		<script type="text/javascript" src="js/jquery.ui.datepicker-es.js"></script>
		<script>
		  $(function() {
			$( "#datepicker" ).datepicker();
			$( "#datepicker" ).datepicker($.datepicker.regional['es']);
		  });
		  </script>		
	</head>
	<body>
		<div id="planilla">
		
		<div class='volver'>
			<?php
				if($ver==0){
					echo "<a href='planilla.php?idCurso=$idCurso&periodo=$idP&ver=1'><img src='img/verPagos.png' width='20px' /></a>";
				}else{
					echo "<a href='planilla.php?idCurso=$idCurso&periodo=$idP&ver=0'><img src='img/ocultarPagos.png' width='20px' /></a>";
				}
			?>
			<a href='planillaCuaderno.php?idCurso=<?php echo "$idCurso&idP=$idP"; ?>'><img src='img/cuaderno.png' width='20px' /></a>
			<a href='curso.php'><img src='img/volver.png' width='20px' /></a>
		</div>
				<?php
				include("connect.php");
				//Muestro el Título del Curso
				$resultSet = $dbh->query("SELECT cursos.valor,cursos.id, cursos.dpm, cursos.idMesDp, cursos.valorPm, materias.materia, dias.dia, horarios.horario, sedes.sede, aulas.aula FROM cursos,materias,dias,horarios,sedes,aulas WHERE cursos.idMateria=materias.id AND cursos.idDia=dias.id AND cursos.idHorario=horarios.id AND cursos.idSede=sedes.id AND cursos.idAula=aulas.id AND cursos.id='$idCurso'");
				$curso = $resultSet->fetchObject();
				echo "<h3 class='tituloPlanilla'>".$curso->materia." - ".$curso->dia." ".$curso->horario." - ".$curso->sede." - ".$curso->aula."</h3>";
				
				
				/* MUESTRO A LOS INSTRUCTORES */
					$resultSet = $dbh->query("SELECT inst1, inst2, inst3 FROM cursos WHERE id=$idCurso");
					$inst = $resultSet->fetchObject();	
					if($inst->inst1==0){
						echo "<span class='instructores'><b>No hay asignado ningún Instructor</b></span>";
					}else{
						$resultSet = $dbh->query("SELECT nombre, apellido FROM instructores WHERE id=".$inst->inst1);
						$nai1 = $resultSet->fetchObject();	
						if($inst->inst2==0){
							echo "<span class='instructores'><b>Instructor:</b> ".$nai1->nombre." ".$nai1->apellido."</span>";
						}else{
							$resultSet = $dbh->query("SELECT nombre, apellido FROM instructores WHERE id=".$inst->inst2);
							$nai2 = $resultSet->fetchObject();	
							if($inst->inst3==0){
								echo "<span class='instructores'><b>Instructores:</b> ".$nai1->nombre." ".$nai1->apellido." y ".$nai2->nombre." ".$nai2->apellido."</span>";
							}else{
								$resultSet = $dbh->query("SELECT nombre, apellido FROM instructores WHERE id=".$inst->inst3);
								$nai3 = $resultSet->fetchObject();	
								echo "<span class='instructores'><b>Instructores:</b> ".$nai1->nombre." ".$nai1->apellido.", ".$nai2->nombre." ".$nai2->apellido." y ".$nai3->nombre." ".$nai3->apellido."</span>";
							}
						}
					}

				$dpm = $curso->dpm;
				$idMesDp = $curso->idMesDp;
				$valorPm = $curso->valorPm;
				/* echo $dpm; */
				if($dpm==1&&$idMesDp==$idP){
					$valorCursoInicial = $valorPm;
				}else{
					$valorCurso = $curso->valor;
				}
				
				?>
				
					
				<table
					<?php 
						echo "class='planillaAlumnos ";
						if($ver==1){
							echo "verPagos'";
						}else{
							echo "ocultarPagos'";
						}
					?>>  
					<tr>	
						<th rowspan='2' class='medio'> N&#176; </th>
						<th rowspan='2'>Nombre y Apellido</th>
<?php
	include("funciones.php");
	include("funciones2.php");
	//Tomo de la base el Inicio del Curso 
	$resultSet = $dbh->query("SELECT * FROM cursos WHERE id=$idCurso");
	$row = $resultSet->fetchObject();
	$fecha = $row->fechaInicio;
	$materia = $row->idMateria;
	$sumaFecha = false;
	//Paso la fecha a UNIX TIME
	$fecha = strtotime($fecha);
	//Tomo el "Desde" y "Hasta" del Período vigente. $idP me la da "periodo2.php"
	$resultSet = $dbh->query("SELECT * FROM meses WHERE id=$idP");
	$mes = $resultSet->fetchObject();
	$desde = $mes->desde;
	$hasta = $mes->hasta;
	//Paso ambos a UNIX TIME
	$desde = strtotime($desde);
	$hasta = strtotime($hasta);
	//Inicializo i para contar las fechas que corresponden al perìodo vigente
	$i = 0;
	//Genero un Array para guardar las fechas e inicializo una variable para luego recorrerlo
	$fechas = array();
	$keyFechas = 0;
	$comentariosClases = array();
	//Inicializo el indicador de descuentos.
	$desc = 0;
	
		//Genero clases cada siete días a partir del inicio del Curso
			//Comparo si el curso inició dentro del período vigente. Si es asì imprimo las fechas
		if($fecha>=$desde&&$fecha<=$hasta){
			while($fecha<=$hasta){
			echo "<th rowspan='2' class='medio'><a title='Informar Presentes para este día' href='presentismo.php?idCurso=$idCurso&dia=".date('d/m/Y', $fecha)."'>".date('d/m', $fecha)."</a></th>";	
			$fechas[$keyFechas] = date('d/m/Y', $fecha);

				//Ya dejo guardado el comentario que esté asignado a la fecha
				$fechaComentario = date('d/m/Y', $fecha);
				$sql = ("SELECT * FROM comentariosClases WHERE idCurso=$idCurso AND fecha='$fechaComentario'");
				$query = $dbh->query($sql);
				$result = $query->fetchObject();
				$comentario = $result->comentario;
				$comentariosClases[$keyFechas] = $comentario;
				
			$keyFechas = $keyFechas+1;
			//Compruebo si la clase es de taekwondo, hice esto para no modificar toda la red.
			/*if($materia == 6)
			{
				if($sumaFecha)
				{
					$fecha = strtotime('+5day',$fecha);
					$sumaFecha = false;
				}else
				{
					$fecha = strtotime('+2day',$fecha);
					$sumaFecha = true;
				}
				
			}else
			{
				$fecha = strtotime('+7day',$fecha);	
			}*/
			/*//Compruebo si la clase es de algun taller, hice esto para no modificar toda la red.
			if($materia == 7 || $materia == 8 || $materia == 9 || $materia == 10)
			{
				
				$fecha = strtotime('+1day',$fecha);
				if($i == 1)
				{
					break;
				}
			}else
			{
				$fecha = strtotime('+7day',$fecha);	
			}*/
			$fecha = strtotime('+7day',$fecha);	
			$i = $i + 1;
			}
		}
			//Sino calculo qué días corresponden al período Vigente
		if($fecha<$desde&&$fecha<$hasta){
			while($fecha<$desde){
			$fecha = strtotime('+7day',$fecha);				
			}
			//Y luego los imprimo en la tabla
			while($fecha<=$hasta){
			echo "<th rowspan='2' class='medio'><a title='Informar Presentes para este día' href='presentismo.php?idCurso=$idCurso&dia=".date('d/m/Y', $fecha)."'>".date('d/m', $fecha)."</a></th>";
			$fechas["$keyFechas"] = date('d/m/Y', $fecha);
			
				//Ya dejo guardado el comentario que esté asignado a la fecha
				$fechaComentario = date('d/m/Y', $fecha);
				$sql = ("SELECT * FROM comentariosClases WHERE idCurso=$idCurso AND fecha='$fechaComentario'");
				$query = $dbh->query($sql);
				$result = $query->fetchObject();
				$comentario = $result->comentario;
				$comentariosClases[$keyFechas] = $comentario;			
			/*Aumento la clave de fechas en 1*/
			$keyFechas = $keyFechas+1;
			//Compruebo si la clase es de taekwondo, hice esto para no modificar toda la red.
			/*if($materia == 6)
			{
				if($sumaFecha)
				{
					$fecha = strtotime('+5day',$fecha);
					$sumaFecha = false;
				}else
				{
					$fecha = strtotime('+2day',$fecha);
					$sumaFecha = true;
				}
				
			}else
			{
				$fecha = strtotime('+7day',$fecha);	
			}*/

			/*if($materia == 7 || $materia == 8 || $materia == 9 || $materia == 10)
			{
				
				$fecha = strtotime('+1day',$fecha);
				if($i == 1)
				{
					break;
				}
			}else
			{
				$fecha = strtotime('+7day',$fecha);	
			}*/
			$fecha = strtotime('+7day',$fecha);	
			$i = $i + 1;
			}
		}
			//Y finalmente hago que no me imprima los días correspondientes a períodos anteriores, sino que imprima un "-"
		if($fecha>$desde&&$fecha>$hasta&&$i==0){
			while($i<5){
			echo "<th rowspan='2'> - </th>";
			$i = $i + 1;				
			}		
		}
		echo "<th colspan='2' class='pagos'>Mes</th>
			<th  colspan='2' class='pagos'>Proximo Pago</th>
		</tr>
		<tr>
			<th class='pagos'><a title='Informar Pagos' href='informarPagos2.php?idCurso=$idCurso&idP=$idP'>Pag&oacute;</a></th>
			<th class='pagos'>Debe</th>
			<th colspan='2' class='pagos'>Fecha</th>
		</tr>";
				//Selecciono los alumnos de este curso
				//$resultSet = $dbh->query("SELECT alumnos.id,alumnos.nombre,alumnos.apellido, alumnos.observaciones FROM alumnos,altas WHERE altas.idAlumno=alumnos.id AND altas.idCurso = ".$idCurso." AND (altas.idPerFinal>=$idP OR altas.final='0') ORDER BY alumnos.apellido");
				$resultSet = $dbh->query("SELECT alumnos.id,alumnos.nombre,alumnos.apellido, alumnos.observaciones FROM alumnos,altas WHERE altas.idAlumno=alumnos.id AND altas.idCurso = ".$idCurso." AND (altas.idPerFinal>=$idP OR altas.final='0') AND alumnos.activo=1 ORDER BY alumnos.apellido");
				//Inicializo r para imprimir tantos campos de la tabla como fechas se hayan contado
				$r = 0;
				//Inicializo nro para numerar los registros que extraigo de la base
				$nro=1;
				//Inicializo totalPagado para contar el total de dinero que se pagó y lo mismo con el que se adeuda
				$totalPagado = 0;
				$totalAdeudado = 0;		
				$totalPagadoMat = 0;
				$totalAdeudadoMat = 0;	
				//Inicializo cantPres para contar los presentes por día
				$cantPres = 0;
				//Creo un array para poder ir guardando las cantidades de presentes para cada dia
				$fechaPres = array();
				
				
				//Empizo la impresion de la tabla
				while($alumno = $resultSet->fetchObject()){
				$idAlumno = $alumno->id;
					$sql = ("SELECT inicio, final, fechaFinal FROM altas WHERE idAlumno=$idAlumno AND idCurso=$idCurso");
					$query = $dbh->query($sql);
					$result = $query->fetchObject();
					$fechaInicio = $result->inicio;
					$final = $result->final;
					$fechaFinal = $result->fechaFinal;
					$fechaInicioComp = strtotime($fechaInicio);
					
					$ultimaFecha = count($fechas);
					$ultimaFecha = $ultimaFecha-1;
					$fecha1 = $fechas[0];
					$fecha2 = $fechas[$ultimaFecha];
					$fecha1 = ordenarFecha($fecha1);
					$fecha2 = ordenarFecha($fecha2);
					$fechaFinalComp = strtotime($fechaFinal);
					$fechaCompInicio1 = strtotime($fecha1);
					$fechaCompInicio2 = strtotime($fecha2);
				//echo "$idAlumno - $fechaInicioComp<=$fechaCompInicio <br /> ";
					if(($fechaInicioComp<=$fechaCompInicio2) AND ($final==0 OR $fechaFinalComp>=$fechaCompInicio1)){//( OR $fechaFinalComp<=$fechaCompInicio2 AND $fechaFinalComp>=$fechaCompInicio1))){
					/*Inicializo el Selector de Clave del Array Fechas y lo vuelvo a 0 cada vez que paso por acá
					Esto me sirve para evaluar por cada alumno si estuvo presente para cada uno de los días del mes*/
					$selKeyFechas = 0;	
						/*Abro la fila*/
							echo "<tr class='row'> 
									<!-- imprimo el numero de registro -->
									<td class='medio'>".$nro."</td>
									<td title='".$alumno->observaciones."'><a class='alumno' href='alumno.php?idAlumno=".$alumno->id."'>".$alumno->apellido." ".$alumno->nombre;
									
									/* Veo si el alumno tuvo un descuento. Si es así le imprimo una marca junto al nombre*/
									$sql = ("SELECT id,descuento, montoDesc FROM altas WHERE idAlumno=$idAlumno AND idCurso=$idCurso");
									//echo "SELECT descuento, montoDesc FROM altas WHERE idAlumno=$idAlumno AND idCurso=$idCurso";
									$query = $dbh->query($sql);
									$result = $query->fetchObject();
									$idAlta = $result->id;
									$descuento = $result->descuento;
									$montoDesc= $result->montoDesc;
									if($descuento==1){
										echo "<span class='descuento' title='Tuvo un descuento de $$montoDesc'>D</span>";

										/* SI ES EL MES DE ALTA APLICO EL DESCUENTO SOBRE EL VALOR DEL CURSO */	
										$sql = "SELECT inicio FROM altas WHERE idAlumno=$idAlumno AND idCurso=$idCurso";
										$query = $dbh->query($sql);
										$result = $query->fetchObject();
										$inicioALumno = $result->inicio;
										$query = $dbh->query("SELECT id FROM meses WHERE desde<='$inicioALumno' AND hasta>='$inicioALumno'");
										$result = $query->fetchObject();
										$idMesDesc = $result->id;
										$valorCursoReal = $valorCurso;
										$desc = 1;
										
											if($idMesDesc==$idP){
												$valorCursoReal = $valorCursoReal - $montoDesc;
											}	
									}

									/* SI ES EL MES DE ALTA APLICO EL DESCUENTO SOBRE EL VALOR DEL CURSO */	
									$sql = ("SELECT inicio FROM altas WHERE idAlumno=$idAlumno AND idCurso=$idCurso");
									$query = $dbh->query($sql);
									$result = $query->fetchObject();
									$inicioALumno = $result->inicio;
									
									/* Veo si el alumno se dió de baja para el período consultado. Si es así le imprimo una marca junto al nombre*/
									$sql = ("SELECT final, fechaFinal FROM altas WHERE idAlumno=$idAlumno AND idCurso=$idCurso");
									$query = $dbh->query($sql);
									$result = $query->fetchObject();
									$final = $result->final;
									$fechaFinal = $fechaFinal;
									if($final==1){
										$fechaFinalStr = strtotime($fechaFinal);
										$fechaFinal = $result->fechaFinal;
										$fechaFinal = reOrdenarFecha($fechaFinal);
										echo "<span class='baja' title='Se dio de baja el $fechaFinal'>Baja</span> ";		
									}
									echo "</a></td>";
									//Mientras que r sea menor o igual a 1 Imprimo Campos
										while($r<$i){
											$fecha = $fechas[$selKeyFechas];
											//primero voy a ver si el alumno ya estaba dado de alta para la fecha
											$sql = ("SELECT inicio, final, fechaFinal FROM altas WHERE idAlumno=$idAlumno AND idCurso=$idCurso");
											$query = $dbh->query($sql);
											$result = $query->fetchObject();
											$inicio = $result->inicio;
											$final = $result->final;

											$inicio = reOrdenarFecha($inicio);
											//paso la fecha a la variable de fecha de comparacion y le remplazo las / por -
											$fechaComp = str_replace("/","-",$fecha);
											//paso ambas fechas a UNIX TIME
											$fechaComp = strtotime($fechaComp);
											$inicioVista = $inicio;
											$inicio = strtotime($inicio);
											$fechaFinalStr = strtotime($fechaFinal);
												//si no estaba dado de alta im primo un "-"
												/* echo $inicio." ".$fechaComp."<br />"; */
												$celda = "<td ";
												if($inicio>$fechaComp){
													//Si no estaba anotado imprimo la celda de color Gris
													$celda .= " class='noInscripto'> ";
												}else{
														//Antes que nada veo si el alumno se dió de baja este mes y si es asi en qué fecha.
														if($final==1&&$fechaFinalStr<=$fechaComp){
															$celda .= " class='noInscripto' title='Se dio de baja el $fechaFinal'> Baja </span>";
														}else{
															//sino hago la verifiacion si se informo el presente y si estuvo presente o no
															//echo $fecha."<br />";
															$statement = $dbh->prepare("SELECT presentes.id,presentismo.idP FROM presentes,presentismo WHERE presentismo.idAlumno=$idAlumno AND presentismo.idCurso=$idCurso AND presentismo.fecha='$fecha' AND presentes.id=presentismo.idPresente");
															/*  echo "SELECT presentes.id FROM presentes,presentismo WHERE presentismo.idAlumno=$idAlumno AND presentismo.idCurso=$idCurso AND presentismo.fecha='$fecha' AND presentes.id=presentismo.idPresente";  */
															$statement->execute();
															$count = $statement->rowCount();
															/* echo $count; */
															if($count>0){
																$pesente = $statement->fetchObject();
																$pres = $pesente->id;
																$idPres = $pesente->idP;
																/* echo $pres; */
																if($pres=="1"){
																	$celda .= "title='Comienzo del curso el $inicioVista' class='presente'><a href='editarPresentismo.php?idPres=$idPres'>P</a>";
																	//Voy guardando en el array "fechaPres" la cantidad de presentes por dia
																	$fechaPres[$selKeyFechas] =	$fechaPres[$selKeyFechas] + 1;
																}
																if($pres=="2"){
																	$celda .= "title='Comienzo del curso el $inicioVista' class='ausente'><a href='editarPresentismo.php?idPres=$idPres'>Ac</a></span>";
																}
																if($pres=="3"){
																	$celda .= "title='Comienzo del curso el $inicioVista' class='ausente'><a href='editarPresentismo.php?idPres=$idPres'>As</a>";
																}
															}else{
																$celda .= "> ";
															}
															if($inicio==$fechaComp){
																//si es e mismo dia alerto que es nuevo "-"
																$celda .= "<span class='nuevo' title='Nuevo'>N</span>";
															}	
														}
												}
												//Aumento el selector de Fechas en 1
												$selKeyFechas = $selKeyFechas+1;
												//Aumento r en 1
												$r=$r+1;
												$celda .= "</td>";
												echo $celda;	
										}
										//Ahora checkeo el pago del Mes
										$statement = $dbh->prepare("SELECT * FROM pagos WHERE concepto=1 AND pagos.idAlumno=$idAlumno AND idMes=".$idP." AND idCurso=".$idCurso."");
										//echo "SELECT * FROM pagos WHERE concepto=1 AND idAlumno=$idAlumno AND idMes=".$idP." AND idCurso=".$idCurso."" . '<br/>';
										$statement->execute();
										$count = $statement->rowCount();
										$valorPago = 0;
										$idPago = 0;
										$fecha = $valor->fecha;
										$fecha = reOrdenarFecha($fecha);
										if($count>0){
											//$valor = $statement->fetchObject();
											while($valor=$statement->fetchObject()){
												$valorPago = $valorPago + $valor->valor;
												$idPago = $valor->id;
											}
											//$valorPago = $valor->valor;
											echo "<td class='pagos'><a title='$fecha - ".$valor->observaciones."' href='editarPago.php?idPago=".$idPago."'>$ ".$valorPago."</a></td>";
										}else{
											echo "<td class='pagos'><a href='informarPagos3.php?idCurso=$idCurso&idAlumno=$idAlumno&idP=$idP'>$ ".$valorPago."</a></td>";
										}

										if($desc==1){
											$debe = $valorCursoReal - $valorPago;
										}else{
											$debe = $valorCurso - $valorPago;
										}
											echo "<td class='pagos";											
											if($debe>0){
												echo " debe";
											}											
											echo "'>$ ".$debe."</a></td>";

										$statement = $dbh->prepare("SELECT * FROM altas WHERE idAlumno=$idAlumno AND idCurso=$idCurso");
										$statement->execute();
										$count = $statement->rowCount();
											
										if($count==1){
											$fechaPagoSt = $statement->fetchObject();
											$fechaPago = $fechaPagoSt->fechaPago;
											if(!$fechaPago){
												$fechaPago = '0000-00-00';
											}
											$fechaPago = reOrdenarFecha($fechaPago);
											echo "<td class='pagos'><a href='editarFechaPago.php?idAlta=".$fechaPagoSt->id."'>".$fechaPago."</a></td>";
										}else{
											echo "<td class='pagos'><a href='editarFechaPago.php?idAlta=".$fechaPagoSt->id."'>00-00-0000</a></td>";
										}		
										echo "</tr>";
										//Ahora checkeo el pago de la matrícula
										/*$statement = $dbh->prepare("SELECT * FROM altas WHERE matricula=1 AND idAlumno=".$idAlumno." AND idCurso=".$idCurso."");
										$statement->execute();
										$count = $statement->rowCount();
										$valorPagoMat = 0;
										$montoMat = 0;
										if($count==1){
											$valorMat = $statement->fetchObject();
											$montoMat = $valorMat->montoMat;
											$valorPagoMat = $valorMat->pagoMat;
											echo "<td class='pagos'><a href='editarPagoMat.php?idAlta=".$valorMat->id."'>$ ".$valorMat->pagoMat."</a></td>";
											$totalPagadoMat = $totalPagadoMat + $valorMat->pagoMat;
										}else{
											echo "<td class='pagos'><a href=''>$ ".$valorPagoMat."</a></td>";
										}							
										$debeMat = $montoMat - $valorPagoMat; 
										$totalAdeudadoMat = $totalAdeudadoMat + $debeMat;
										
											echo "<td class='pagos";
											if($debeMat>0){
												echo " debe";
											}
											echo "'>$ ".$debeMat."</a></td>";
											
										echo "</tr>";*/	/*Cierro la fila*/
					
						$totalPagado = $totalPagado+$valorPago;
						$totalAdeudado = $totalAdeudado+$debe;
						//Aumento nro en 1
						$nro = $nro+1;
						//Vuelvo r a cero para poder volver a entrar al WHILE e imprimir los campos de los siguientes registros
						$r = 0;	
						//Vuelvo a cero el indicador de descuento
						$desc = 0;
					}
								

				}
				
				echo "<tr>
						<th colspan='2'><b>Totales</b></th>";
				//Imprimo los Presentes totales

				$fechaNum = 0;		
					while($fechaNum<$i){
						echo "<th class='medio'><b>".$fechaPres[$fechaNum]."</b></th>";
						$fechaNum = $fechaNum+1;
					}
						
						echo "<th class='pagos'><b>$";
						echo number_format($totalPagado,0,'.',',')."</b></th>
						<th class='pagos'><b>$";
						echo number_format($totalAdeudado,0,'.',',')."</b></th>";
						echo "<th class='pagos'><b>";
						/*echo number_format($totalPagadoMat,0,'.',',')."</b></th>*/
						echo ""."</b></th>
					</tr>";
				?>
				
				</table>
				<br />
				<table class='planillaAlumnos'>
					<tr>
						<th>D&iacute;a</th>
						<th>Comentario</th>
					</tr>		
					
						<?php
							$i = 0;
							while($i<$keyFechas){
								echo "<tr>";
									if($nivUs==1 or $nivUs==2){ 
										echo "<td valign='top' class='fechaCom'><a href='editarComentario.php?fecha=".$fechas[$i]."&&idCurso=$idCurso'>".$fechas[$i]."</a></td>";
									}else{
										echo "<td valign='top' class='fechaCom'>".$fechas[$i]."</td>";
									}
								echo "<td>".$comentariosClases[$i]."</td>
								</tr>";
								$i = $i+1;
							}
						?>						
				</table>
			</div>
			<div class=''clear></div>
		</div>
	</body>
</html>
<?php
}else{
	header("location:principal.php");
}
}else{
	header("location:index.php");
}
?>