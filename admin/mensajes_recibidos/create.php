<?php
  session_start();
?>

<p>Nuevo Mensaje:</p>
<form id="contact_form" action="create_mensajes_recibidos.php" method="GET" enctype="multipart/form-data">
    
    <div class="row">
		<label for="usuario">Usuario:</label><br />
		<textarea id="usuario" class="input" name="usuario"  value="" rows="10" cols="40" ></textarea><br/>
	</div>
    
	<div class="row">
		<label for="mensaje">Mensaje:</label><br />
		<textarea id="mensaje" class="input" name="mensaje"  value="" rows="10" cols="40" ></textarea><br/>
	</div>
	
	<input id="submit_button" type="submit" value="Enviar" />
</form>