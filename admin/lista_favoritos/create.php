<?php
  session_start();
?>

<p>Nueva Lista de favoritos:</p>
<form id="contact_form" action="create_lista_favoritos.php" method="GET" enctype="multipart/form-data">
    
    <div class="row">
		<label for="ususario">Usuario:</label><br />
		<textarea id="usuario" class="input" name="ususario"  value="" rows="10" cols="40" ></textarea><br />
	</div>
    
	<div class="row">
		<label for="video">Video:</label><br />
		<textarea id="video" class="input" name="video"  value="" rows="10" cols="40" ></textarea><br/>
	</div>
	
	<input id="submit_button" type="submit" value="Enviar" />
</form>