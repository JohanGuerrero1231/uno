 <html>
 <head>
 <title>InsertarDatos.php</title>
 <meta http-equiv='content-type' content='text/html; charset=UTF-8'/>
 </head>
 <body>
 <BODY BACKGROUND="imagenDeFondo.jpg">

 <form action='InsertarDatos.php' method='post'>
	   <div>Cedula 1  : <input type='text' name='Cedula' value=" "/> </div>
	   <div>Nombre 2 :   <input type='text' name='Nombre' value=" "/> </div>
      <div>Apellido 3 :   <input type='text' name='Apellido' value=" "/> </div>
      <div>Edad 4:   <input type='text' name='Edad' value=" "/> </div>
      <div>Otro 5:   <input type='text' name='Otro' value=" "/> </div>  
	   <div><input type='submit' name='insert' value='Insertar registro'/></div>
 </form>

 <?php 
	$link = new mysqli("localhost", "root", "", "guardaruno");
	
	$sql = "INSERT INTO tabla (Cedula, Nombre, Apellido, Edad, Otro) VALUES ('$_POST[Cedula]', '$_POST[Nombre]', '$_POST[Apellido]', '$_POST[Edad]', '$_POST[Otro]')";


 if ($link->query($sql) === TRUE) {
    echo "New record created successfully";
 } else {
    echo "Error: " . $sql . "<br>" . $link->error;
 }


 ?>

 </body>
 </html>