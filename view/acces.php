
<?php

/*LOGIN*/
if(isset($_REQUEST["usuario"]))
{
  $usuario = $_REQUEST['usuario'];
}
else  
{
  $usuario = "";
}
if(isset($_REQUEST["password"]))
{  
  $passw = $_REQUEST['password'];
}
else  
{
  $passw = "";
}

	require_once 'funciones_bd.php';
	$db = new funciones_BD();

		if($db->login($usuario,$passw)){

		  $resultado=array("estado"=>"0","url"=>"Usuario o contraseña incorrecto");

		}else{
		  $resultado=array("estado"=>"1","url"=>"captura.php");		 
		}

	echo json_encode($resultado);



?>
