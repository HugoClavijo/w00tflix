<?php
  session_start();
?>
<p>Bloqueando a un usuario:</p>
<form id="contact_form" action="create_usuarios_bloqueados.php" method="GET" enctype="multipart/form-data">
    
    
<!--
	<div class="row">
		<label for="idMensaje">idMensaje</label><br />
		<input id="idMensaje" class="input" name="idMensaje" type="text" value="" size="30" /><br />
	</div>
    
-->
    
    
	<div class="row">
		<label for="fecha_bloqueo">fecha</label><br />
		<input id="fecha_bloqueo" class="input" name="fecha_bloqueo" type="text" value="" size="30" /><br />
	</div>    
    
    
    
	<div class="row">
		<label for="idusuario">idUsuario</label><br />
		<input id="idusuario" class="input" name="idusuario" type="text" value="" size="30" /><br />
	</div>  
	
	
	<input id="submit_button" type="submit" value="Enviar" />
</form>