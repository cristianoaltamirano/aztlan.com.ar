<div class="col-xs-12  visible-xs visible-sm">
  <div  class="form-mobile">
    <form class="form-horizontal" role="form">
      <legend class="envianos"> &iexcl;Solicit&aacute; m&aacute;s informaci&oacute;n!</legend>
      <legend class="envianos"> </legend>
      <!--  <legend class="envianos2">Complet&aacute; tus datos y a la brevedad nos comunicaremos con vos para confirmar tu reserva. Los datos deben ser ver&iacute;dicos para que sea v&aacute;lida la misma.</legend>-->
      <!--  <legend class="envianos">   <legend class="envianos">Envianos tu consulta</legend>
    </legend>-->
    <div class="form-group" >
      <div class="col-xs-12">
        <input type="text" class="form-control"  name="nombre" validate chars="3" msg="Debes ingresar tu nombre" value="Nombres"
        placeholder="Nombre" required/>
      </div>
    </div>
    <div class="form-group" >
      <div class="col-xs-12">
        <input type="text" class="form-control" name="apellido" validate chars="3" msg="Debes ingresar tu apellido" value="Apellidos"
        placeholder="Apellido" required/>
      </div>
    </div>
    <div class="form-group" >
      <div class="col-sm-12">
        <input type="text" class="form-control" name="dni" validate chars="8" msg="Debes ingresar tu dni" value="33222444"
        placeholder="dni" required/>
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-12">
        <input type="text" class="form-control" name="telefono" validate chars="8"  msg="Debes ingresar tu celular" value="Celular"
        placeholder="Celular" required/>
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-12">
        <input  type="email" class="form-control" name="email" validate="email"  msg="Debes ingresar tu email" value="mail@hotmail.com"
        placeholder="Email" required/>
      </div>
    </div>
    <?php
    /*if(count($eventos)>1)
    {
    echo '<div class="form-group">';
      echo '<label for="inputEmail" style="color: white" class="col-xs-3 control-label">Horarios</label>';
      echo '<select name="eventSelect" style="width: 67%!important;margin-left: 15px;" id="eventSelect" class="col-xs-9 form-control" required="required">';
        echo '<option value="">Elegir horario</option>';
        for ($i=0; $i < count($eventos); $i++) {
        echo '<option value="' . $eventos[$i]->idEvento . '">' . $eventos[$i]->horario . '</option>';
        }
      echo '</select>';
    echo '</div>';
    } */
    ?>
    <div class="form-group" >
      <div class="col-xs-12">
        <input type="text" class="form-control"  name="facebook" validate chars="3" msg="Debes ingresar tu facebook" value="Usuario de Facebook"
        placeholder="Usuario de Facebook" required/>
      </div>
    </div>
    
    
    <!-- <div style="width: 100%;">
      <p style="color:#fff;text-align:center;font-size: 16px;font-weight: bold;">Para confirmar la solicitud, dale me gusta</p>
      <div class="fb-page" data-href="https://www.facebook.com/AstrologiaAztlan" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/AstrologiaAztlan" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/AstrologiaAztlan">Astrología Aztlan</a></blockquote></div>
    </div> -->
    <input type="hidden" name="desde" value="astro">
    <input type="hidden" name="tipoform" value="charla">
        <div class="form-group">       
          <div class="col-xs-12"> 
            <textarea name="consulta"  class="form-control" rows="3" cols="6"></textarea> 
          </div> 
        </div> 
    <div id="RecaptchaField2" style="margin-left: 10%;"></div>
    <p id="captchatextmobile" style="color:#fff;text-align:center;display: none;">Debes seleccionar no soy un robot.</p>
    <div class="form-group">
      <button class="btnSend mobile btn btn-warning btn-lg">Solicitar Informaci&oacute;n</button>
    </div>
  </form>
</div>
</div>