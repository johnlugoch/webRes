<?php

$dir = explode("/", $_SERVER['PHP_SELF']);
$projectName = $dir[1];

require_once ($_SERVER['DOCUMENT_ROOT'].'/'.$projectName.'/dao/db.class.php');
require_once ($_SERVER['DOCUMENT_ROOT'].'/'.$projectName.'/model/Parto.php');

class PartoDAO extends Database {
	
	function getSelectValues(){

		$this->connect();
        $tipoId = $this->ejecutar("SELECT * FROM aux_tipo_identificacion");
		$this->disconnect();

        $json = '';

         $index = 1;
        if($this->num_rows($tipoId) > 0){
            $json = $json.'{"tipoId": [';
            while($temp = $this->to_array($tipoId)){
                if($index < $this->num_rows($tipoId)){
                    $json = $json.'{"codigo": "'.$temp['codigo'].'", "tipo": "'.$temp['tipo'].'"},';
                }else{
                    $json = $json.'{"codigo": "'.$temp['codigo'].'", "tipo": "'.$temp['tipo'].'"}]';
                }
                $index++;
            }
        }

        
        $json = $json."}";
        return $json;
	}

    function saveParto($parto){        
        $this->connect();               
        $query= "INSERT INTO parto (tipoide,numero,primer_apellido,segundo_apellido,primer_nombre,segundo_nombre,cod_etnia,fecha_atencion,finalidad_consulta,codigo_cups,toma_prueba_sifilis,fecha_toma_sifilis,resultado_serologia,asesoria_pre_elisa,fecha_asesoria_elisa,
        toma_prueba_vih,fecha_toma_vih,resultado_vih,sum_anticon_post,fecha_sum_anti )  VALUES (
             
             '$parto->tipo_id',
             '$parto->id',
             '$parto->papellido',
             '$parto->sapellido',                                    
             '$parto->pnombre',
             '$parto->snombre',
             '$parto->etnia',            
             '$parto->fecha_atencion',
             '$parto->finalidad_cons',
             '$parto->codigo_cups',
             '$parto->toma_prueba_sifi',
             '$parto->fecha_prueba_sifi', 
             '$parto->resultado_sero',
             '$parto->asesoria_pre_elisa',
             '$parto->fecha_ases_elisa',               
             '$parto->toma_rapida_vih', 
             '$parto->fecha_toma_vih',                      
             '$parto->resultado_vih',
             '$parto->sum_anticoncep',
             '$parto->fecha_anticoncep')";           
        $resultado = $this->ejecutar($query);        
        //$this->ejecutar_guardar($queryRecien);        
        $this->disconnect();        
        return $resultado;
    }

    function updateParto($parto){        
        $this->connect();               
        $query= "UPDATE  parto SET         
             
             tipoide= '$parto->tipo_id',
             numero='$parto->id',
             primer_apellido='$parto->papellido',
             segundo_apellido='$parto->sapellido',                                    
             primer_nombre='$parto->pnombre',
             segundo_nombre='$parto->snombre',
             cod_etnia= '$parto->etnia',            
             fecha_atencion='$parto->fecha_atencion',
             finalidad_consulta='$parto->finalidad_cons',
             codigo_cups='$parto->codigo_cups',
             toma_prueba_sifilis='$parto->toma_prueba_sifi',
             fecha_toma_sifilis='$parto->fecha_prueba_sifi', 
             resultado_serologia='$parto->resultado_sero',
             asesoria_pre_elisa='$parto->asesoria_pre_elisa',
             fecha_asesoria_elisa='$parto->fecha_ases_elisa',               
             toma_prueba_vih='$parto->toma_rapida_vih', 
             fecha_toma_vih='$parto->fecha_toma_vih',                      
             resultado_vih='$parto->resultado_vih',
             sum_anticon_post='$parto->sum_anticoncep',
             fecha_sum_anti='$parto->fecha_anticoncep'
             WHERE id = '$parto->codigo'";           
        $resultado = $this->ejecutar($query);        
        //$this->ejecutar_guardar($queryRecien);        
        $this->disconnect();        
        return $resultado;
    }

   

    function getParto($id){

        $query = "SELECT * FROM Parto where id = $id";
        $this->connect();
        $info = $this->ejecutar($query);

        $parto = new Parto;

        if($this->num_rows($info) > 0){
            while($temp = $this->to_array($info)){
                $persona->id =  $temp['id']; 
                $persona->tipo_id = $temp['tipo_id'];               
                $persona->pnombre = $temp['pnombre'];
                $persona->snombre = $temp['snombre'];
                $persona->papellido = $temp['papellido'];
                $persona->sapellido = $temp['sapellido'];               
                $persona->etnia =$temp['etnia'];               
                $persona->fecha_atencion = $temp['fecha_atencion'];
                $persona->finalidad_cons=$temp['finalidad_cons'];
                $persona->codigo_cups=$temp['codigo_cups'];
                $persona->toma_prueba_sifi=['toma_prueba_sifi'];
                $persona->fecha_prueba_sifi = $temp['fecha_prueba_sifi'];   
                $persona->resultado_sero=$temp['resultado_sero'];
                $persona->asesoria_pre_elisa=$temp['asesoria_pre_elisa'];
                $persona->fecha_ases_elisa=$temp['fecha_ases_elisa'];
                $persona->toma_rapida_vih=$temp['toma_rapida_vih'];
                $persona->fecha_toma_vih=$temp['fecha_toma_vih'];
                $persona->resultado_vih=$temp['resultado_vih'];
                $persona->sum_anticoncep=$temp['sum_anticoncep'];
                $persona->fecha_anticoncep=$temp['fecha_anticoncep'];            
            }
        }
        $this->disconnect();
        
        return $persona;

    }
    
}

?>