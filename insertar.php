<?php
include("clases/conect.php");
$mensaje = $_POST['mensaje'];
//$tipo = $_POST['tipo'];

$timestamp = date("Y-m-d H:i:s");

$q = "INSERT INTO mensajes(mensaje, timestamp, status) values ('$mensaje','$timestamp','1')";
$res = mysql_query($q) or die (mysql_error());
header("Location: form.php");
?>