<?php
  session_start();

$idhistorial =$_GET['idhistorial'];
$idusuario =$_GET['idusuario'];
$idvideo =$_GET['idvideo'];
$fecha_entrada =$_GET['fecha_entrada'];
$hora_entrada =$_GET['hora_entrada'];

echo $idhistorial." ".$idusuario." ".$idvideo." ".$fecha_entrada. " ".hora_entrada."";
?>

<p>Actualizando Historial:</p>

<form id="contact_form" action="update_historial.php" method="GET" enctype="multipart/form-data">
    
    <div class="row">
		<label for="idhistorial">idhistorial:</label>
		<input id="idhistorial" class="input" name="idhistorial" type="text" readonly="readonly" value="<?php print $idhistorial; ?> " size="5" />
	</div><br>
    
    <div class="row">
		<label for="nombre">Usuario:</label><br />
		<textarea id="nombre" class="input" name="nombre"  value="$idusuario" rows="10" cols="40" ></textarea><br />
	</div>
    
	<div class="row">
		<label for="descripcion">Video:</label><br />
		<textarea id="descripcion" class="input" name="descripcion"  value="$idvideo" rows="10" cols="40" ></textarea><br/>
	</div>
	
	<div class="row">
		<label for="nombre">Fecha de Entrada:</label><br />
		<textarea id="nombre" class="input" name="nombre"  value="$fecha_entrada" rows="10" cols="40" ></textarea><br />
	</div>
    
	<div class="row">
		<label for="descripcion">Hora de Entrada:</label><br />
		<textarea id="descripcion" class="input" name="descripcion"  value="$hora_entrada" rows="10" cols="40" ></textarea><br/>
	</div>
	
	<input id="submit_button" type="submit" value="Enviar" />
</form>