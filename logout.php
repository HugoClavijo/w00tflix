<?php
 session_start();


if (isset($_SESSION['carrera'])){    //si se ha creado la sesión,presenta
session_destroy();

//echo "<a href='index.php'>Volver al index</a>";
    
header('Location: index.php');

}

?>
