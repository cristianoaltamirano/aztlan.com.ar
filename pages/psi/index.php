<?php
error_reporting(E_ALL); 
ini_set("display_errors", 1); 
ini_set("display_startup_errors", 1); 


include "../../php/HX_Fmwk/load.php";

class Index extends AppPageController {

  public function onLoad() {	
  	 ob_clean();  	
	$idCamp = @split("/",$_GET['c']);
	$evt= $idCamp[0];
	$owner = $idCamp[1];
	$source = $idCamp[2];
	

	$evento = GET_eventos::getEvento($evt);
	$eventos = GET_eventos::getEventosByFechaAndTipo($evento->date, $evento->tipoEvento_idTipo);
	/*
	1 cineclub
	2 taller
	3 charlapsicologia
	4 charlaastrologia
	5 cursopsicologia
	6 cursoastrologia
	*/
  
  //echo parse_url($_SERVER['REQUEST_URI'],PHP_URL_FRAGMENT);
  //die;
  	//if($evento->tipoEvento_idTipo == 3)include('includes/landing-psico.php');
  	//else include('includes/landing-astro.php');
    //echo "tipoEvento_idTipo" . $evento->tipoEvento_idTipo;
  	if($evento->tipoEvento_idTipo == 2)
  	{
      include('includes/psico_informacion.php');
		}else if($evento->tipoEvento_idTipo == 3)
  	{
      include('includes/psico_reserva.php');
  	}else if($evento->tipoEvento_idTipo == 4)
  	{
      include('includes/astro_reserva.php');
  	}else if($evento->tipoEvento_idTipo == 7)
  	{
      include('includes/astro_reserva.php');
  	}else if($evento->tipoEvento_idTipo == 8)
    {
      include('includes/landing-consultoria.php');
    }else if($evento->tipoEvento_idTipo == 9)
    {
      include('includes/psico_reserva.php');
    }else if($evento->tipoEvento_idTipo == 10)
    {
      include('../../blog/consultas/form/landing-psico_consultas.php');
    }else if($evento->tipoEvento_idTipo == 11)
    {
      include('../../blog/consultas/form/landing-astro_consultas.php');
    }else if($evento->tipoEvento_idTipo == 12)
    {
      include('../../blog/consultas/form/landing-psi_tarot_consultas.php');
    }else if($evento->tipoEvento_idTipo == 13)
    {
      include('../../blog/consultas/form/landing-psi_entrevistas.php');
    }else if($evento->tipoEvento_idTipo == 14)
    {
      include('../../blog/consultas/form/landing-astro_entrevistas.php');
    }else if($evento->tipoEvento_idTipo == 15)
    {
      include('../../blog/consultas/becas/psicologia.php');
    }else if($evento->tipoEvento_idTipo == 16)
    {
      include('../../blog/consultas/becas/astrologia.php');
    }else if($evento->tipoEvento_idTipo == 17)
    {
      include('../../blog/consultas/form/landing-tarot_entrevistas.php');
    }else if($evento->tipoEvento_idTipo == 18)
    {
      include('includes/psico_videos.php');      
    }else if($evento->tipoEvento_idTipo == 19)
    {
      include('includes/astro_videos.php');      
    }else if($evento->tipoEvento_idTipo == 20)
    {
      include('includes/tarot_videos.php');      
    }else if($evento->tipoEvento_idTipo == 21)
    {
      include('../../blog/consultas/landings/psicologia_charla.php');
    }else if($evento->tipoEvento_idTipo == 22)
    {
      include('../../blog/consultas/landings/astrologia_charla.php');
    }else if($evento->tipoEvento_idTipo == 23)
    {
      include('../../blog/consultas/landings/tarot_charla.php');
    }else if($evento->tipoEvento_idTipo == 24)
    {
      include('includes/psico_reserva_desplegable.php');      
    }else if($evento->tipoEvento_idTipo == 25)
    {
      include('includes/astro_reserva_desplegable.php');      
    }else if($evento->tipoEvento_idTipo == 26)
    {
      include('includes/landing_cursos.php');      
    }else if($evento->tipoEvento_idTipo == 27)
    {
      include('includes/landing_talleres.php');      
    }else if($evento->tipoEvento_idTipo == 28)
    {
      include('includes/landing_cursosytalleres.php');      
    }else if($evento->tipoEvento_idTipo == 29)
    {
      include('includes/psico_informacion.php');      
    }else if($evento->tipoEvento_idTipo == 30)
    {
      include('includes/astro_informacion.php');      
    }else if($evento->tipoEvento_idTipo == 31)
    {
      include('includes/astro_informacion.php');      
    }else if($evento->tipoEvento_idTipo == 32)
    {
      include('includes/landing_descuento2017.php');      
    }else if($evento->tipoEvento_idTipo == 33)
    {
      include('includes/landing_descuento_astro2017.php');      
    }else if($evento->tipoEvento_idTipo == 34)
    {
      include('includes/landing_descuento_astro2017.php');      
    }
  }
  
  public function onUnLoad() {}
  
}
Controller::load("Index");

/*ALTER TABLE  `eventos` ADD  `fotoHome` VARCHAR( 1000 ) NOT NULL AFTER  `foto`*/
/*ALTER TABLE  `eventos` ADD  `mostrarHome` INT( 1 ) NOT NULL AFTER  `activo`*/

/*GET_EVENTOS)*/
?>



