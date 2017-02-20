<?php
  session_start();

$idusuarios =$_GET['idusuarios'];
$nombre =$_GET['nombre'];
$correo =$_GET['correo'];
$tipo =$_GET['tipo'];
$usuario =$_GET['usuario'];
$pass =$_GET['pass'];

echo $idusuarios." ".$nombre." ".$tipo." ";

?>

<p>Actualizando Usuario:</p>

<form id="contact_form" action="update_usuarios.php" method="GET" enctype="multipart/form-data">
    
    <div class="row">
		<label for="idusuarios">idusuarios:</label>
		<input id="idusuarios" class="input" name="idusuarios" type="text" readonly="readonly" value="<?php print $idusuarios; ?> " size="5" />
	</div><br>
    
	<div class="row">
		<label for="descripcion">Nombre:</label><br>
		<textarea id="nombre" class="input" name="nombre"  value="" rows="10" cols="40" ></textarea><br>
	</div>
	
    <div class="row">
		<label for="correo">Correo:</label><br>
		<textarea id="correo" class="input" name="correo"  value="" rows="10" cols="40" ></textarea><br>
	</div>
    
    <div class="row">
		<label for="tipo">Tipo:</label><br>
		<textarea id="tipo" class="input" name="tipo"  value="" rows="10" cols="40" ></textarea><br>
	</div>
	
	  <div class="row">
		<label for="tipo">Usuario:</label><br>
		<textarea id="usuario" class="input" name="usuario"  value="" rows="10" cols="40" ></textarea><br>
	</div>

      <div class="row">
		<label for="tipo">Password:</label><br>
		<textarea id="pass" class="input" name="pass"  value="" rows="10" cols="40" ></textarea><br>
	</div>
	
	<input id="submit_button" type="submit" value="Enviar" />
</form>
