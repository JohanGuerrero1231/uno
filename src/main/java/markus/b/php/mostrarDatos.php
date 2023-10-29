<html>
<head><meta charset="utf-8"> 
</head>
<body>



<?php

function mostrarDatos ($resultados) {
if ($resultados !=NULL) {
echo "- Cedula: ".$resultados['Cedula']."<br/> ";
echo "- Nombre: ".$resultados['Nombre']."<br/>";
echo "- Apellido: ".$resultados['Apellido']."<br/>";
echo "- Edad: ".$resultados['Edad']."<br/>";
echo "- Otro: ".$resultados['Otro']."<br/>";}
else {echo "<br/>No hay m�s datos: <br/>".$resultados;}
}

$link = mysqli_connect("localhost", "root", "");

mysqli_select_db($link, "guardaruno");
$tildes = $link->query("SET NAMES 'utf8'"); 
$result = mysqli_query($link, "SELECT * FROM tabla");
$extraido1= mysqli_fetch_array($result);
mostrarDatos($extraido1);
$extraido2= mysqli_fetch_array($result);
mostrarDatos($extraido2);
$extraido3= mysqli_fetch_array($result);
mostrarDatos($extraido3);
$extraido4= mysqli_fetch_array($result);
mostrarDatos($extraido4);
$extraido5= mysqli_fetch_array($result);
mostrarDatos($extraido5);
$extraido6= mysqli_fetch_array($result);
mostrarDatos($extraido6);
mysqli_free_result($result);
mysqli_close($link);
?>


</body>
</html>