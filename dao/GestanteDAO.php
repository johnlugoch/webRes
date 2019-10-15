<?php

$dir = explode("/", $_SERVER['PHP_SELF']);
$projectName = $dir[1];

require_once ($_SERVER['DOCUMENT_ROOT'].'/'.$projectName.'/dao/db.class.php');
require_once ($_SERVER['DOCUMENT_ROOT'].'/'.$projectName.'/model/Gestante.php');

class GestanteDAO extends Database {
	
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

    function saveGestante($gestante){        
        $this->connect();               
        $query= "INSERT INTO gestante (tipoide, numero, primer_apellido, segundo_apellido, primer_nombre, segundo_nombre, fecha_nac,
                            edad_gestacional, cod_etnia, fecha_atencion, finalidad_consulta, codigo_cups, fecha_sum_acido_fol,
                            fecha_sum_sulf_ferr, fecha_sum_carb_cal, fecha_toma_anti_hep, resultado_anti_hep,
                            fecha_toma_serologia, resultado_serologia, fecha_asesoria_elisa, fecha_toma_elisa, resultdo_elisa, 
                            fecha_hemoglobina, resultado_hemoglobina, fecha_cons_lactancia  ) VALUES (
             
             '$gestante->tipo_id', 
             '$gestante->id',             
             '$gestante->papellido',
             '$gestante->sapellido',             
             '$gestante->pnombre',
             '$gestante->snombre',
             '$gestante->fecha_nac',
             '$gestante->edad_gestacional',
             '$gestante->etnia',                        
             '$gestante->fecha_atencion',

             '$gestante->finalidad_cons',
             '$gestante->codigo_cups',
             '$gestante->fecha_acido_folico',
             '$gestante->fecha_sulfato', 
             '$gestante->fecha_carbonato',

             '$gestante->fecha_antigeno',
             '$gestante->resultado_antigeno',  
             
             '$gestante->fecha_sero', 
             '$gestante->resultado_sero', 

             '$gestante->fecha_asesoria_eli', 
             '$gestante->fecha_toma_eli',
             '$gestante->resultado_eli',
             '$gestante->fecha_toma_hemo',
             '$gestante->resultado_hemo',
             '$gestante->fecha_cons_lact')";           
        $resultado = $this->ejecutar($query);        
        //$this->ejecutar_guardar($queryRecien);        
        $this->disconnect();        
        return $resultado;
    }

    function updateGestante($gestante){
        
        $this->connect();
        //echo "etnia ".$recien->etnia. " etnia";    
                    $query = "UPDATE  gestante  SET 
                                                        tipoide ='$gestante->tipo_id', 
                                                        numero ='$gestante->id',             
                                                        primer_apellido = '$gestante->papellido',
                                                        segundo_apellido = '$gestante->sapellido',             
                                                        primer_nombre = '$gestante->pnombre',
                                                        segundo_nombre = '$gestante->snombre',
                                                        fecha_nac = '$gestante->fecha_nac',
                                                        edad_gestacional= '$gestante->edad_gestacional',
                                                        cod_etnia='$gestante->etnia',                        
                                                        fecha_atencion='$gestante->fecha_atencion',

                                                        finalidad_consulta= '$gestante->finalidad_cons',
                                                        codigo_cups= '$gestante->codigo_cups',
                                                        fecha_sum_acido_fol= '$gestante->fecha_acido_folico',
                                                        fecha_sum_sulf_ferr= '$gestante->fecha_sulfato', 
                                                        fecha_sum_carb_cal ='$gestante->fecha_carbonato',

                                                        fecha_toma_anti_hep='$gestante->fecha_antigeno',
                                                        resultado_anti_hep='$gestante->resultado_antigeno',  
                                                     
                                                        fecha_toma_serologia= '$gestante->fecha_sero', 
                                                        resultado_serologia= '$gestante->resultado_sero', 

                                                        fecha_asesoria_elisa='$gestante->fecha_asesoria_eli', 
                                                        fecha_toma_elisa='$gestante->fecha_toma_eli',
                                                        resultdo_elisa='$gestante->resultado_eli',
                                                        fecha_hemoglobina='$gestante->fecha_toma_hemo',
                                                        resultado_hemoglobina='$gestante->resultado_hemo',
                                                        fecha_cons_lactancia='$gestante->fecha_cons_lact'  
                                                     
                                                     WHERE id = '$gestante->codigo' "; 

        $resultado = $this->ejecutar($query);        
        //$this->ejecutar_guardar($queryRecien);        
        $this->disconnect();
        
        return $resultado;
    }


   

    function getGestante($id){

        $query = "SELECT * FROM Gestante where id = $id";
        $this->connect();
        $info = $this->ejecutar($query);

        $gestante = new Gestante;

        if($this->num_rows($info) > 0){
            while($temp = $this->to_array($info)){
                $persona->id =  $temp['id']; 
                $persona->tipo_id = $temp['tipo_id'];               
                $persona->pnombre = $temp['pnombre'];
                $persona->snombre = $temp['snombre'];
                $persona->papellido = $temp['papellido'];
                $persona->sapellido = $temp['sapellido'];
                $persona->fecha_nac = $temp['fecha_nac'];                
                $persona->etnia =$temp['etnia'];               
                $persona->fecha_atencion = $temp['fecha_atencion'];
                $persona->edad_gestacional = $temp['edad_gestacional'];
                $persona->finalidad_cons = $temp['finalidad_cons'];
                $persona->codigo_cups = $temp['codigo_cups'];
                
                $persona->fecha_acido_folico = $temp['fecha_sum_af'];
                $persona->fecha_carbonato = $temp['fecha_sum_car'];
                $persona->fecha_antigeno = $temp['fecha_toma_antig'];
                $persona->resultado_antigeno = $temp['resultado_antig'];

                $persona->fecha_sero = $temp['fecha_sero'];
                $persona->resultado_sero = $temp['resultado_sero'];
                $persona->fecha_asesoria_eli = $temp['fecha_ases_elisa'];
                $persona->fecha_toma_eli= $temp['fecha_toma_elisa'];
                $persona->resultado_eli= $temp['resultado_elisa'];
                $persona->fecha_toma_hemo = $temp['fecha_toma_hemo'];
                $persona->resultado_hemo = $temp['resultado_hemo'];                
                $persona->fecha_lactancia =$temp['fecha_cons_lact'];
            }
        }
        $this->disconnect();
        
        return $persona;

    }
    
}

?>