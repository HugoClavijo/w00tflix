<?php
  session_start();
?>
<p>Creando nuevo mensaje:</p>
<form id="contact_form" action="create_detalle_videos.php" method="GET" enctype="multipart/form-data">
	<div class="row">
		<label for="descripcion">Mensaje:</label><br />
		<textarea id="descripcion" class="input" name="descripcion"  value="" rows="10" cols="40" ></textarea><br />
	</div>
	
	
	<input id="submit_button" type="submit" value="Enviar" />
</form>