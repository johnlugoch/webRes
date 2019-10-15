<?php

$username = $_POST['username'];
$password = md5($_POST['password']);
$nombre = $_POST['nombre'];


//Para la conexión deberás introducir el usuario y password de tu base de datos
$mysql_db_hostname = "localhost";
$mysql_db_user = "root";
$mysql_db_password = "";
$mysql_db_database = "resolucion2175";

$con = mysql_connect($mysql_db_hostname, $mysql_db_user, $mysql_db_password) or die("Could not connect database");
mysql_select_db($mysql_db_database, $con) or die("Could not select database");


$consulta="select * from usuarios where username="."'$username'";  
$resultado=mysql_query($consulta) or die (mysql_error());  
if (mysql_num_rows($resultado) == 0)  
{  
//echo "No existen registros en la base de datos.";  
	$insert = "INSERT INTO usuarios (username, passw, nombre) VALUES ('$username', '$password', '$nombre')";
    mysql_query($insert);
    echo "<span style='font-weight:bold;color:#CDEB8B;'>Registrado Exitosamente.</span>";
}
else{
  echo "<span style='font-weight:bold;color:#D01F3C;'>El nombre de usuario ya existe.</span>";
}

?>


