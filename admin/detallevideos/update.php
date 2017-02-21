<?php
  session_start();

$iddetalles =$_GET['iddetalles'];
$descripcion =$_GET['descripcion'];
echo $iddetalles." ".$descripcion."";

?>

<p>Actualizando el detalle de video:</p>

<form id="contact_form" action="update_detalle_videos.php" method="GET" enctype="multipart/form-data">
    
    <div class="row">
		<label for="iddetalles">iddetalle:</label>
		<input id="iddetalles" class="input" name="iddetalles" type="text" readonly="readonly" value="<?php print $iddetalles; ?> " size="5" />
	</div><br>
    
	<div class="row">
		<label for="descripcion">Descripción:</label><br>
		<textarea id="descripcion" class="input" name="descripcion"  value="" rows="10" cols="40" ></textarea><br>
	</div>
	
	
	<input id="submit_button" type="submit" value="Enviar" />
</form>