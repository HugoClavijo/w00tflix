<?php
  session_start();
?>
<p>Nuevo Usuario:</p>
<form id="contact_form" action="create_usuarios.php" method="GET" enctype="multipart/form-data">
	<div class="row">
		<label for="nombre">Nombre:</label><br />
		<textarea id="nombre" class="input" name="nombre"  value="" rows="10" cols="40" ></textarea><br />
	</div>
	
	<div class="row">
		<label for="correo">Correo:</label><br />
		<textarea id="correo" class="input" name="correo"  value="" rows="10" cols="40" ></textarea><br />
	</div>
    
    <div class="row">
		<label for="tipo">Tipo:</label><br />
		<textarea id="tipo" class="input" name="tipo"  value="" rows="10" cols="40" ></textarea><br />
	</div>
    
    <div class="row">
		<label for="usuario">Usuario:</label><br />
		<textarea id="usuario" class="input" name="usuario"  value="" rows="10" cols="40" ></textarea><br />
	</div>
    
    <div class="row">
		<label for="pass">Password:</label><br />
		<textarea id="pass" class="input" name="pass"  value="" rows="10" cols="40" ></textarea><br />
	</div>
    
    
	<input id="submit_button" type="submit" value="Enviar" />
</form>