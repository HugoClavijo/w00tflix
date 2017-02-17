<?php
  session_start();

$idlista_favoritos =$_GET['idlista_favoritos'];
$idusuario =$_GET['idusuario'];
$idvideo =$_GET['idvideo'];
echo $idlista_favoritos." ".$idusuario." ".$idvideo."";
?>

<p>Actualizando Lista:</p>

<form id="contact_form" action="update_lista_favoritos.php" method="GET" enctype="multipart/form-data">
    
    <div class="row">
		<label for="idlista_favoritos">idlista_favoritos:</label>
		<input id="idlista_favoritos" class="input" name="idlista_favoritos" type="text" readonly="readonly" value="<?php print $idlista_favoritos; ?> " size="5" />
	</div><br>
    
    <div class="row">
		<label for="usuario">Usuario:</label><br>
		<textarea id="usuario" class="input" name="usuario"  value="" rows="10" cols="40" ></textarea><br>
	</div>
    
	<div class="row">
		<label for="video">Video:</label><br>
		<textarea id="video" class="input" name="video"  value="" rows="10" cols="40" ></textarea><br>
	</div>
	
	<input id="submit_button" type="submit" value="Enviar" />
</form>