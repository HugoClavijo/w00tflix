<?php
  session_start();

$idusuario_bloqueado =$_GET['idusuario_bloqueado'];
$fecha_bloqueo =$_GET['fecha_bloqueo'];
$idusuario =$_GET['idusuario'];
echo $idusuario_bloqueado." ".$fecha_bloqueo." ".$idusuario." " ;

?>

<p>Actualizando el bloqueo de la persona:</p>

<form id="contact_form" action="update_usuarios_bloqueados.php" method="GET" enctype="multipart/form-data">
    
    <div class="row">
		<label for="idusuario_bloqueado">idusuario_bloqueado:</label>
		<input id="idusuario_bloqueado" class="input" name="idusuario_bloqueado" type="text" readonly="readonly" value="<?php print $idusuario_bloqueado; ?> " size="5" />
	</div><br>
    
    
  
    <div class="row">
		<label for="fecha_bloqueo">fecha_bloqueo:</label>
		<input id="fecha_bloqueo" class="input" name="fecha_bloqueo" type="text" readonly="readonly" value="<?php print $fecha_bloqueo; ?> " size="6" />
	</div><br>   
    
    
    
   <div class="row">
		<label for="idusuario">idusuario:</label>
		<input id="idusuario" class="input" name="idusuario" type="text"  value="<?php print $idusuario; ?> " size="6" />
	</div><br>   
	
	
	<input id="submit_button" type="submit" value="Enviar" />
</form>