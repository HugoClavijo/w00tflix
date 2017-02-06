<?php
  session_start();
?>

<p>Nueva Categoria:</p>
<form id="contact_form" action="create_categorias_videos.php" method="GET" enctype="multipart/form-data">
    
    <div class="row">
		<label for="nombre">Nombre:</label><br />
		<textarea id="nombre" class="input" name="nombre"  value="" rows="10" cols="40" ></textarea><br />
	</div>
    
	<div class="row">
		<label for="descripcion">Descripcion:</label><br />
		<textarea id="descripcion" class="input" name="descripcion"  value="" rows="10" cols="40" ></textarea><br/>
	</div>
	
	<input id="submit_button" type="submit" value="Enviar" />
</form>