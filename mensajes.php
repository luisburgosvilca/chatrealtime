<?php
include("clases/conect.php");
$q = "SELECT * FROM mensajes";
echo $res = mysqli_query($q) or die (mysqli_error());
while($timi = mysqli_fetch_array($res))
{
	echo "Mensaje: ".$timi['mensaje'];
	echo "<br>";
}
?>