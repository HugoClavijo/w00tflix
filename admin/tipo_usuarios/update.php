<?php
  session_start();

$idtipo_usuarios =$_GET['idtipo_usuarios'];
$detalle =$_GET['detalle'];
echo $idtipo_usuarios." ".$detalle."";

?>

<p>Actualizando Tipos De Usuario:</p>

<form id="contact_form" action="update_tipo_usuarios.php" method="GET" enctype="multipart/form-data">
    
    <div class="row">
		<label for="idtipo_usuarios">idTipo:</label>
		<input id="idtipo_usuarios" class="input" name="idtipo_usuarios" type="text" readonly="readonly" value="<?php print $idtipo_usuarios; ?> " size="5" />
	</div><br>
    
	<div class="row">
		<label for="detalle">Detalle:</label><br>
		<textarea id="detalle" class="input" name="detalle"  value="" rows="10" cols="40" ></textarea><br>
	</div>
	
	<input id="submit_button" type="submit" value="Enviar" />
</form>