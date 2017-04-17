

	<div  id="form" class="hidden-xs hidden-sm">	
											
					<form class="form-horizontal" role="form">
					
<h3 class="envianos">&iexcl;Reserv&aacute; tu lugar!</h3>
  <h3 class="envianos">Todas las reservas quedan sujetas a confirmaci&oacute;n seg&uacute;n disponibilidad.</h3>
		<div class="form-group" >
               <label for="inputName" class="col-xs-3 control-label">Nombre</label>
               <div class="col-xs-9">
                  <input type="text" class="form-control"  name="nombre" validate chars="3" msg="Debes ingresar tu nombre" value="Nombres"
                     placeholder="Nombre" required/>
               </div>
            </div>
            <div class="form-group" >
               <label for="inputLastname" class="col-xs-3 control-label">Apellido</label>
               <div class="col-xs-9">
                  <input type="text" class="form-control" name="apellido" validate chars="3" msg="Debes ingresar tu apellido" value="Apellidos"
                     placeholder="Apellido" required/>
               </div>
            </div>
            <div class="form-group" >
               <label for="dni" class="col-sm-3 control-label">Dni</label>
               <div class="col-sm-9">
                  <input type="text" class="form-control" name="dni" validate chars="8" msg="Debes ingresar tu dni" value="22333444"
                     placeholder="33322211" required/>
               </div>
            </div>
            <div class="form-group">
               <label for="inputTel" class="col-xs-3 control-label">Celular</label>
               <div class="col-xs-9">
                  <input type="text" class="form-control" name="telefono" validate chars="8" msg="Debes ingresar tu celular" value="Celular"
                     placeholder="Celular" required/>
               </div>
            </div>
            <div class="form-group">
               <label for="inputEmail" class="col-xs-3 control-label">Email</label>
               <div class="col-xs-9">
                  <input type="email" class="form-control" name="email" validate="email"  msg="Debes ingresar tu email" value="mail@hotmail.com"
                     placeholder="Email" required/>
               </div>
            </div>
            <?php
            if(count($eventos)>1)
            {
             echo '<div class="form-group">';
             echo '<label for="inputEmail" class="col-xs-3 control-label">Horarios</label>';
             echo '<select name="eventSelect" style="width: 67%!important;margin-left: 15px;" id="eventSelect" class="col-xs-9 form-control" required="required">';
             echo '<option value="">Elegir horario</option>';
             for ($i=0; $i < count($eventos); $i++) { 
               echo '<option value="' . $eventos[$i]->idEvento . '">' . $eventos[$i]->horario . '</option>';
             }
             echo '</select>';
             echo '</div>';
            } 
            ?>
            <div class="form-group" >
               <label for="inputName" class="col-xs-3 control-label">Facebook </label>
               <div class="col-xs-9">
                  <input type="text" class="form-control"  name="facebook" validate chars="3" msg="Debes ingresar tu facebook" value="Usuario de  Facebook"
                     placeholder="Usuario de Facebook" required/>
               </div>
            </div>
            <div id="RecaptchaField1" style="margin-left: 6%;"></div>            
            <p id="captchatext" style="color:#fff;text-align:center;display: none;">Debes seleccionar no soy un robot.</p>
            <div>
               <p style="color:#fff;text-align:center;font-size: 16px;font-weight: bold;">Para confirmar la solicitud, dale me gusta</p>
            
               <div class="fb-page" data-href="https://www.facebook.com/psicologiaholisticaztlan" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/psicologiaholisticaztlan" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/psicologiaholisticaztlan">Psicología Holística Aztlan</a></blockquote></div>
            </div>
            
		<input type="hidden" name="desde" value="psico">
      <input type="hidden" name="tipoform" value="charla">

<!-- 		<div class="form-group"> -->
<!-- 			<label for="inputConsulta" class="col-xs-3 control-label">Consulta</label> -->
<!-- 			<div class="col-xs-9"> -->
<!-- 				<textarea name="consulta"  class="form-control" rows="3" cols="6"></textarea> -->
<!-- 			</div> -->
<!-- 		</div> -->

		<div class="form-group">
			<a href="site/autoreply/autoreply_fb.html">
			<button class="btnSend btn btn-warning">RESERVAR</button>	</a>		
		</div>

	</form>
				</div>
