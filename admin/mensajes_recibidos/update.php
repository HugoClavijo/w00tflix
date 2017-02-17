<?php
  session_start();

$idmensajes_recibidos =$_GET['idmensajes_recibidos'];
$idusuario =$_GET['idusuario'];
$mensaje =$_GET['mensaje'];
echo $idmensajes_recibidos." ".$idusuario." ".$mensaje."";
?>

<p>Actualizando Mensaje:</p>

<form id="contact_form" action="update_mensajes_recibidos.php" method="GET" enctype="multipart/form-data">
    
    <div class="row">
		<label for="idmensajes_recibidos">idmensajes_recibidos:</label>
		<input id="idmensajes_recibidos" class="input" name="idmensajes_Recibidos" type="text" readonly="readonly" value="<?php print $idmensajes_recibidos; ?> " size="5" />
	</div><br>
    
    <div class="row">
		<label for="usuario">Usuario:</label><br>
		<textarea id="usuario" class="input" name="usuario"  value="" rows="10" cols="40" ></textarea><br>
	</div>
    
	<div class="row">
		<label for="mensaje">Mensaje:</label><br>
		<textarea id="mensaje" class="input" name="mensaje"  value="" rows="10" cols="40" ></textarea><br>
	</div>
	
	<input id="submit_button" type="submit" value="Enviar" />
</form>