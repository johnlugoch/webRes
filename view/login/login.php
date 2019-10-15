<?php

//require_once("../../db/db.php");

session_start();

$username = $_POST['username'];
//$password = ($_POST['password']);
$password = ($_POST['password']);
$ips = $_POST['ips'];
$centro ="";
if ($ips == 1){
  $centro = "Costa Hermosa";
}
else if ($ips == 2){
  $centro = "13 De Junio";
}
else if ($ips == 3){
  $centro = "Ciudadela Metropolitana";
}
else if ($ips == 4){
  $centro = "Salamanca";
}
else if ($ips == 5){
  $centro = "Manuela Beltran";
}
else if ($ips == 5){
  $centro = "Villa Estadio";
}
else if ($ips == 6){
  $centro = "La Esperanza";
}
else if ($ips == 6){
  $centro = "El Parque";
}
//echo $ips;
/*$conexion = mysqli_connect("localhost", "root", "", "resolucion2175");
$onsulta = "SELECT * FROM usuarios WHERE username='$username' AND passw='$password'";
$resultado = mysqli_query($conexion, $consulta);*/




$mysql_db_user = "root";//"root";//
$mysql_db_password = "";
$mysql_db_database = "resolucion2175";

$con = mysql_connect($mysql_db_hostname, $mysql_db_user, $mysql_db_password) or die("Could not connect database");
mysql_select_db($mysql_db_database, $con) or die("Could not select database");



$query = "SELECT * FROM usuarios WHERE username='$username' AND passw='$password'";
$result = mysql_query($query)or die(mysql_error());
$num_row = mysql_num_rows($result);

		$row=mysql_fetch_array($result);
		if( $num_row > 0 ) {

			
			$_SESSION['user_name']=$row['username'];
			$_SESSION['autenticado'] = 'SI';		
			$_SESSION['ips']=$centro;	
			echo 'true';
			
		}
		else{
			echo 'false';
		}

?>