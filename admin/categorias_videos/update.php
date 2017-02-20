<?php
  session_start();

$idcategorias =$_GET['idcategoria'];
$nombre =$_GET['nombre'];
$descripcion =$_GET['descripcion'];
echo $idcategorias." ".$nombre." ".$descripcion."";
?>

<p>Actualizando Categoria:</p>

<form id="contact_form" action="update_categorias_videos.php" method="GET" enctype="multipart/form-data">
    
    <div class="row">
		<label for="idcategoria">idcategoria:</label>
		<input id="idcategoria" class="input" name="idcategoria" type="text" readonly="readonly" value="<?php print $idcategorias; ?> " size="5" />
	</div><br>
    
    <div class="row">
		<label for="nombre">Nombre:</label><br>
		<textarea id="nombre" class="input" name="nombre"  value="" rows="10" cols="40" ></textarea><br>
	</div>
    
	<div class="row">
		<label for="descripcion">Descripción:</label><br>
		<textarea id="descripcion" class="input" name="descripcion"  value="" rows="10" cols="40" ></textarea><br>
	</div>
	
	<input id="submit_button" type="submit" value="Enviar" />
</form>
