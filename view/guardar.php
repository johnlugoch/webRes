<?php
	
if(isset($_POST["id"]))
{
	$id = $_POST["id"];
	$tipo_id = $_POST["tipoIdentificacion"];

	echo "tipo = ".$tipo_id;
	
	
	
	
	/*$consulta = "INSERT INTO recien_nacido (id, tipo_id)VALUES('$id','$tipo_id')";
	
	$conexion = new mysqli("localhost","root","","resolucion2175",3306);
	
	$respuesta = new stdClass();
	
	if($conexion->query($consulta)){
		$respuesta->mensaje = "Se guardo correctamente";
	}
	else {
		$respuesta->mensaje = "Ocurrio un error";
	}
	echo json_encode($respuesta);*/
	
}
else{
  echo "No se paso parametro de identificacion";
}

?>