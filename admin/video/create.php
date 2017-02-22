<?php
  session_start();
?>

<p>Nuevo Video:</p>
<form id="contact_form" action="create_video.php" method="GET" enctype="multipart/form-data">
    
    <div class="row">
		<label for="nombre">Usuario:</label><br />
		<textarea id="nombre" class="input" name="nombre"  value="$idusuario" rows="10" cols="40" ></textarea><br />
	</div>
    
	<div class="row">
		<label for="descripcion">Detalle:</label><br />
		<textarea id="descripcion" class="input" name="descripcion"  value="$idvideo" rows="10" cols="40" ></textarea><br/>
	</div>
	
	<div class="row">
		<label for="nombre">Categoria:</label><br />
		<textarea id="nombre" class="input" name="nombre"  value="$fecha_entrada" rows="10" cols="40" ></textarea><br />
	</div>
    
	<div class="row">
		<label for="descripcion">Hora de Entrada:</label><br />
		<textarea id="descripcion" class="input" name="descripcion"  value="$hora_entrada" rows="10" cols="40" ></textarea><br/>
	</div>
	
	<input id="submit_button" type="submit" value="Enviar" />
</form>