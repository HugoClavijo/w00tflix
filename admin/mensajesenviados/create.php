<?php
  session_start();
?>
<p>Creando nuevo mensaje:</p>
<form id="contact_form" action="create_mensajes_enviados.php" method="GET" enctype="multipart/form-data">
    
    
<!--
	<div class="row">
		<label for="idMensaje">idMensaje</label><br />
		<input id="idMensaje" class="input" name="idMensaje" type="text" value="" size="30" /><br />
	</div>
    
-->
    
    
	<div class="row">
		<label for="idusuario">idUsuario</label><br />
		<input id="idusuario" class="input" name="idusuario" type="text" value="" size="30" /><br />
	</div>    
    
    
    
	<div class="row">
		<label for="mensaje">mensaje:</label><br />
		<textarea id="mensaje" class="input" name="mensaje"  value="" rows="10" cols="40" ></textarea><br />
	</div>
	
	
	<input id="submit_button" type="submit" value="Enviar" />
</form>