<?php
  session_start();
?>
<p>Nuevo Tipo De Usuario:</p>
<form id="contact_form" action="create_tipo_usuarios.php" method="GET" enctype="multipart/form-data">
	<div class="row">
		<label for="detalle">Tipo:</label><br />
		<textarea id="detalle" class="input" name="detalle"  value="" rows="10" cols="40" ></textarea><br />
	</div>
	
	<input id="submit_button" type="submit" value="Enviar" />
</form>