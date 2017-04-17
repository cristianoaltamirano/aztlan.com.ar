<?php
session_start();
if($_SESSION['usuario']){
	if($_GET){
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
		<script src="js/jquery.js"></script>
		
	</head>
	<body>
		<div id="planilla">
		
		<div class='volver'>
			<a href='curso.php'><img src='img/volver.png' width='20px' /></a>
		</div>
				<?php
				include("connect.php");
				//Muestro el Título del Curso
				$resultSet = $dbh->query("SELECT cursos.valor,cursos.id, cursos.dpm, cursos.idMesDp, cursos.valorPm, materias.materia, dias.dia, horarios.horario, sedes.sede, aulas.aula FROM cursos,materias,dias,horarios,sedes,aulas WHERE cursos.idMateria=materias.id AND cursos.idDia=dias.id AND cursos.idHorario=horarios.id AND cursos.idSede=sedes.id AND cursos.idAula=aulas.id AND cursos.id='$idCurso'");
				$curso = $resultSet->fetchObject();
				echo "<h3 class='tituloPlanilla'>".$curso->materia." - ".$curso->dia." - ".$curso->horario." - ".$curso->sede." - ".$curso->aula."</h3>";
				$dpm = $curso->dpm;
				$idMesDp = $curso->idMesDp;
				$valorPm = $curso->valorPm;
				/* echo $dpm; */
				if($dpm==1&&$idMesDp==$idP){
					$valorCurso = $valorPm;
				}else{
					$valorCurso = $curso->valor;
					$query = $dbh->query("SELECT * FROM aumentos");
					$aumento = $query->fetchObject();
						$idMesAumento = $aumento->idMes;
						$valorAumento = $aumento->nuevoMonto;
					if($idP>=$idMesAumento){
						$valorCurso = $valorAumento;
					}
				}
				
				?>
				<br />
				<table class="planillaAlumnos">
					<tr>	
						<th rowspan='2' class='medio'> Nº </th>
						<th rowspan='2'>Nombre y Apellido</th>
<?php
	include("funciones2.php");
	//Tomo de la base el Inicio del Curso 
	$resultSet = $dbh->query("SELECT * FROM cursos WHERE id=$idCurso");
	$row = $resultSet->fetchObject();
	$fecha = $row->fechaInicio;
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
		//Genero clases cada siete días a partir del inicio del Curso
			//Comparo si el curso inició dentro del período vigente. Si es asì imprimo las fechas
		if($fecha>$desde&&$fecha<$hasta){
			while($fecha<=$hasta){
			echo "<th rowspan='2' class='medio'>".date('d/m', $fecha)."</th>";	
			$fechas[$keyFechas] = date('d/m/Y', $fecha);

				//Ya dejo guardado el comentario que esté asignado a la fecha
				$fechaComentario = date('d/m/Y', $fecha);
				$sql = ("SELECT * FROM comentariosClases WHERE idCurso=$idCurso AND fecha='$fechaComentario'");
				$query = $dbh->query($sql);
				$result = $query->fetchObject();
				$comentario = $result->comentario;
				$comentariosClases[$keyFechas] = $comentario;
				
			$keyFechas = $keyFechas+1;
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
			echo "<th rowspan='2' class='medio'>".date('d/m', $fecha)."</th>";
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
		echo "<th colspan='2' class='mediop'>Mes</th>
			<th  colspan='2' class='mediop'>Matrícula</th>
		</tr>
		<tr>
			<th class='medio'>Pagó</th>
			<th class='medio'>Debe</th>
			<th class='medio'>Pagó</th>
			<th class='medio'>Debe</th>
		</tr>";
				//Selecciono los alumnos de èste curso
				$resultSet = $dbh->query("SELECT alumnos.id,alumnos.nombre,alumnos.apellido, alumnos.observaciones FROM alumnos,altas WHERE altas.idAlumno=alumnos.id AND altas.idCurso = ".$idCurso." ORDER BY alumnos.apellido");
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
				/*Inicializo el Selector de Clave del Array Fechas y lo vuelvo a 0 cada vez que paso por acá
				Esto me sirve para evaluar por cada alumno si estuvo presente para cada uno de los días del mes*/
				$selKeyFechas = 0;			
				/*Abro la fila*/
				echo "<tr class='row'> 
							<!-- imprimo el numero de registro -->
							<td class='medio'>".$nro."</td>
							<td title='".$alumno->observaciones."'><a class='alumno' href='editarAlumno.php?idAlumno=".$alumno->id."'>".$alumno->apellido." ".$alumno->nombre."</a></td>";
								//Mientras que r sea menor o igual a 1 Imprimo Campos
								while($r<$i){
									$fecha = $fechas[$selKeyFechas];
									//primero voy a ver si el alumno ya estaba dado de alta para la fecha
									$sql = ("SELECT inicio FROM altas WHERE idAlumno=$idAlumno AND idCurso=$idCurso");
									$query = $dbh->query($sql);
									$result = $query->fetchObject();
									$inicio = $result->inicio;
									$inicio = reOrdenarFecha($inicio);
									//paso la fecha a la variable de fecha de comparacion y le remplazo las / por -
									$fechaComp = str_replace("/","-",$fecha);
									//paso ambas fechas a UNIX TIME
									$fechaComp = strtotime($fechaComp);
									$inicioVista = $inicio;
									$inicio = strtotime($inicio);
										//si no estaba dado de alta im primo un "-"
										/* echo $inicio." ".$fechaComp."<br />"; */
										$celda = "<td title='Comienzo del curso el $inicioVista' ";
										if($inicio>$fechaComp){
											//Si no estaba anotado imprimo la celda de color Gris
											$celda .= " class='noInscripto'> ";
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
														$celda .= " class='presente'><a href='editarPresentismo.php?idPres=$idPres'>P</a>";
														//Voy guardando en el array "fechaPres" la cantidad de presentes por dia
														$fechaPres[$selKeyFechas] =	$fechaPres[$selKeyFechas] + 1;
													}
													if($pres=="2"){
														$celda .= " class='ausente'><a href='editarPresentismo.php?idPres=$idPres'>Ac</a></span>";
													}
													if($pres=="3"){
														$celda .= " class='ausente'><a href='editarPresentismo.php?idPres=$idPres'>As</a>";
													}
												}else{
													$celda .= "> ";
												}
										if($inicio==$fechaComp){
											//si es e mismo dia alerto que es nuevo "-"
											$celda .= "<span class='nuevo' title='Nuevo'>N</span>";
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
								$statement = $dbh->prepare("SELECT * FROM pagos WHERE concepto=1 AND idAlumno=$idAlumno AND idMes=".$idP." AND idCurso=".$idCurso."");
								/* echo "SELECT * FROM pagos WHERE concepto=1 AND idAlumno=$idAlumno AND idMes=".$idP." AND idCurso=".$idCurso.""; */
								$statement->execute();
								$count = $statement->rowCount();
								$valorPago = 0;
								$fecha = $valor->fecha;
								$fecha = reOrdenarFecha($fecha);
								if($count==1){
									$valor = $statement->fetchObject();
									$valorPago = $valor->valor;
									echo "<td class='medio'><a title='$fecha - ".$valor->observaciones."' href='editarPago.php?idPago=".$valor->id."'>$ ".$valor->valor."</a></td>";
								}else{
									echo "<td class='medio'><a href=''>$ ".$valorPago."</a></td>";
								}							
								$debe = $valorCurso - $valorPago;
								echo "<td class='medio'>$ ".$debe."</a></td>";
								
								//Ahora checkeo el pago de la matrícula
								$statement = $dbh->prepare("SELECT * FROM altas WHERE matricula=1 AND idAlumno=".$idAlumno." AND idCurso=".$idCurso."");
								$statement->execute();
								$count = $statement->rowCount();
								$valorPagoMat = 0;
								$montoMat = 0;
								if($count==1){
									$valorMat = $statement->fetchObject();
									$montoMat = $valorMat->montoMat;
									$valorPagoMat = $valorMat->pagoMat;
									echo "<td class='medio'><a href='editarPagoMat.php?idAlta=".$valorMat->id."'>$ ".$valorMat->pagoMat."</a></td>";
									$totalPagadoMat = $totalPagadoMat + $valorMat->pagoMat;
								}else{
									echo "<td class='medio'><a href=''>$ ".$valorPagoMat."</a></td>";
								}							
								$debeMat = $montoMat - $valorPagoMat; 
								$totalAdeudadoMat = $totalAdeudadoMat + $debeMat;
								echo "<td class='medio'>$ ".$debeMat." </td>
								</tr>";	/*Cierro la fila*/
								
					$totalPagado = $totalPagado+$valorPago;
					$totalAdeudado = $totalAdeudado+$debe;
					//Aumento nro en 1
					$nro = $nro+1;
					//Vuelvo r a cero para poder volver a entrar al WHILE e imprimir los campos de los siguientes registros
					$r = 0;
					/* echo "<br />"; */
				}
				
				echo "<tr>
						<th colspan='2'><b>Totales</b></th>";
				//Imprimo los Presentes totales

				$fechaNum = 0;		
					while($fechaNum<$i){
						echo "<th class='medio'><b>".$fechaPres[$fechaNum]."</b></th>";
						$fechaNum = $fechaNum+1;
					}
						
						echo "<th class='medio'><b>$";
						echo number_format($totalPagado,0,'.',',')."</b></th>
						<th class='medio'><b>$";
						echo number_format($totalAdeudado,0,'.',',')."</b></th>";
						echo "<th class='medio'><b>$";
						echo number_format($totalPagadoMat,0,'.',',')."</b></th>
						<th class='medio'><b>$";
						echo number_format($totalAdeudadoMat,0,'.',',')."</b></th>
					</tr>";
				?>
				
				</table>
				<br />
				<table class='planillaAlumnos'>
					<tr>
						<th>Día</th>
						<th>Comentario</th>
					</tr>		
					
						<?php
							$i = 0;
							while($i<$keyFechas){
								echo "<tr>
								<td valign='top' class='fechaCom'><a href='editarComentario.php?fecha=".$fechas[$i]."&&idCurso=$idCurso'>".$fechas[$i]."</a></td>
								<td>".$comentariosClases[$i]."</td>
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
header("location:index.php");
}
?>