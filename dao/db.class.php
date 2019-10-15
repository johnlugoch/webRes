<?php
/*
CLASE PARA LA CONEXION Y LA GESTION DE LA BASE DE DATOS Y LA PAGINA WEB
*/
class Database {

 private $conexion;
 private $conn;

	public function connect()
	{
		if(!isset($this->conexion))
		{
		   //$this->conexion = (mysql_connect("localhost","root","")) or die(mysql_error());
            $conn = new mysqli("localhost","root","","analisis");
            $this->conexion = $conn;
		   //$this->conexion = (mysql_connect("localhost","sig","sigan")) or die(mysql_error());
		   //mysql_select_db("sig",$this->conexion) or die(mysql_error());
		   //$conexion = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
		}
	}	
        
	public function ejecutar($sql)
	{
		  $resultado = $this->conexion->query($sql);

		  if(!$resultado){
			  echo 'MySQL Error: '.$resultado->error();
			  exit;
		  }
  		return $resultado; 
	}
	public function ejecutar_guardar($sql)
	{		  
		  $resultado = $this->conexion->query($sql);		  
		  if(!$resultado){
			  echo 'MySQL Error: '.$resultado->error();
			  exit;
		  }
  		return $resultado; 
	}
	
	function num_rows($result){
		//if(!is_resource($result)) return false;
		return $result->num_rows;
	}
        
	function to_array($result){
		//if(!is_resource($result)) return false;
			return $result->fetch_assoc();
	}
	
    /*function to_object($query){
        return @mysqli_fetch_object($query);
    }*/
    
	public function disconnect()
	{
		$this->conexion->close();
	}


	function obtenerConexion() {
        $db = new mysqli('localhost', 'root', '', 'analisis');

        if($db->connect_errno > 0){
            die('Unable to connect to database [' . $db->connect_error . ']');
        }

        return $db; 
    }

    function cerrarConexion($db, $query) {
        $query->free();
        $db->close();
    }

    function ejecutarQuery($db, $sql) {
        if(!$resultado = $db->query($sql)){
            die('There was an error running the query [' . $db->error . ']');
        }

        return $resultado;
    }
	
}
?>