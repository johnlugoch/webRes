<?php

$dir = explode("/", $_SERVER['PHP_SELF']);
$projectName = $dir[1];

require_once ($_SERVER['DOCUMENT_ROOT'].'/'.$projectName.'/dao/db.class.php');
require_once ($_SERVER['DOCUMENT_ROOT'].'/'.$projectName.'/model/Ninos05.php');

class Ninos05DAO extends Database {
	
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

    function saveNinos05($ninos){
        
        $this->connect();
        
               
        $queryNino = "INSERT INTO ninos05 (tipoide, numero, fecha_nac, sexo, cod_etnia, primer_apellido, segundo_apellido, primer_nombre, segundo_nombre, fecha_atencion, finalidad_consulta, codigo_cups, peso, talla, fecha_sum_sulfato, fecha_sum_vitamina, fecha_sum_micronut, fecha_hemoglobina, resulado_hemoglobina ) VALUES ('$ninos->tipo_id','$ninos->id','$ninos->fecha_nac','$ninos->sexo','$ninos->etnia','$ninos->papellido','$ninos->sapellido','$ninos->pnombre','$ninos->snombre','$ninos->fecha_atencion',
        '$ninos->finalidad_cons','$ninos->codigo_cups','$ninos->peso', '$ninos->talla','$ninos->fecha_sum_sulf','$ninos->fecha_sum_vit', 
        '$ninos->fecha_sum_micro','$ninos->fecha_toma_hemo','$ninos->resultado_hemo')";
           
        $resultado = $this->ejecutar($queryNino);        
        //$this->ejecutar_guardar($queryRecien);        
        $this->disconnect();        
        return $resultado;
    }

    function updateNinos05($ninos){
        
        $this->connect();
        //echo "etnia ".$recien->etnia. " etnia";    
        $queryNino = "UPDATE  ninos05  SET    tipoide = '$ninos->tipo_id',  
                                                numero =  '$ninos->id', 
                                                fecha_nac = '$ninos->fecha_nac',
                                                sexo = '$ninos->sexo',
                                                cod_etnia = '$ninos->etnia', 
                                                primer_apellido = '$ninos->papellido',
                                                segundo_apellido = '$ninos->sapellido',
                                                primer_nombre = '$ninos->pnombre',
                                                segundo_nombre= '$ninos->snombre',
                                                fecha_atencion='$ninos->fecha_atencion',
                                                finalidad_consulta='$ninos->finalidad_cons',
                                                codigo_cups= '$ninos->codigo_cups',
                                                peso= '$ninos->peso', 
                                                talla= '$ninos->talla',
                                                fecha_sum_sulfato= '$ninos->fecha_sum_sulf',  
                                                fecha_sum_vitamina = '$ninos->fecha_sum_vit', 
                                                fecha_sum_micronut = '$ninos->fecha_sum_micro', 
                                                fecha_hemoglobina= '$ninos->fecha_toma_hemo', 
                                                resulado_hemoglobina= '$ninos->resultado_hemo'
                                                    
                                                WHERE id = '$ninos->codigo' ";
                                                                   
        $resultado = $this->ejecutar($queryNino);        
        //$this->ejecutar_guardar($queryRecien);        

        $this->disconnect();

        
        return $resultado;
    }

   

    function getInfoNinos05($id){

        $query = "SELECT * FROM ninos05 where id = $id";
        $this->connect();
        $info = $this->ejecutar($query);

        $persona = new Ninos05;

        if($this->num_rows($infoRecien) > 0){
            while($temp = $this->to_array($info)){
                $persona->id =  $temp['id']; 
                $persona->tipo_id = $temp['tipo_id'];               
                $persona->pnombre = $temp['pnombre'];
                $persona->snombre = $temp['snombre'];
                $persona->papellido = $temp['papellido'];
                $persona->sapellido = $temp['sapellido'];
                $persona->fecha_nac = $temp['fecha_nac'];
                $persona->sexo =$temp['sexo'];
                $persona->etnia =$temp['etnia'];               
                $persona->fecha_atencion = $temp['fecha_atencion'];
                $persona->finalidad_cons = $temp['finalidad_cons'];
                $persona->codigo_cups = $temp['codigo_cups'];
                $persona->peso = $temp['peso'];
                $persona->talla = $temp['talla'];
                $persona->fecha_sum_sulf = $temp['fecha_sum_sulf'];
                $persona->fecha_sum_vit = $temp['fecha_sum_vit'];
                $persona->fecha_sum_micro = $temp['fecha_sum_micro'];
                $persona->fecha_toma_hemo = $temp['fecha_toma_hemo'];
                $persona->resultado_hemo = $temp['resultado_hemo'];                
            }
        }
        $this->disconnect();
        
        return $persona;

    }
    
}

?>