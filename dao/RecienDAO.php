<?php

$dir = explode("/", $_SERVER['PHP_SELF']);
$projectName = $dir[1];

require_once ($_SERVER['DOCUMENT_ROOT'].'/'.$projectName.'/dao/db.class.php');
require_once ($_SERVER['DOCUMENT_ROOT'].'/'.$projectName.'/model/Recien.php');

class RecienDAO extends Database {
	
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

    function saveRecien($recien){
        
        $this->connect();
        
       
        $queryRecien = "INSERT INTO  recien_nacido (tipoide,numero,fecha_nac,sexo,cod_etnia,primer_apellido,segundo_apellido,primer_nombre,segundo_nombre,tamizaje_neonatal,fecha_tamizaje) VALUES ( '$recien->tipo_id','$recien->id','$recien->fecha_nac','$recien->sexo','$recien->etnia', '$recien->papellido','$recien->sapellido','$recien->pnombre','$recien->snombre','$recien->tamizaje','$recien->fecha_tam')";
        //$queryRecien = "INSERT INTO recien_nacido (id, tipo_id) VALUES ('5','CC')";
            
        $resultado = $this->ejecutar($queryRecien);        
        //$this->ejecutar_guardar($queryRecien);        

        $this->disconnect();
        
        return $resultado;
    }

    function updateRecien($recien){
        
        $this->connect();
        //echo "etnia ".$recien->etnia. " etnia";    
        $queryRecien = "UPDATE  recien_nacido  SET  tipoide = '$recien->tipo_id',  
                                                    numero =  '$recien->id', 
                                                    fecha_nac = '$recien->fecha_nac',
                                                    sexo = '$recien->sexo',
                                                    cod_etnia = '$recien->etnia', 
                                                    primer_apellido = '$recien->papellido',
                                                    segundo_apellido = '$recien->sapellido',
                                                    primer_nombre = '$recien->pnombre',
                                                    segundo_nombre= '$recien->snombre',
                                                    tamizaje_neonatal = '$recien->tamizaje',
                                                    fecha_tamizaje = '$recien->fecha_tam' 
                                                    WHERE id = '$recien->codigo' ";
                                                                   
        $resultado = $this->ejecutar($queryRecien);        
        //$this->ejecutar_guardar($queryRecien);        

        $this->disconnect();

        
        return $resultado;
    }


    function guardar_recien_nacido($id,$tipo_id){
        
        $this->connect();
        
       
        $queryRecien = "INSERT INTO recien_nacido  VALUES ('$id','$tipo_id')";
        //$queryRecien = "INSERT INTO recien_nacido (id, tipo_id) VALUES ('5','CC')";
            
        $resultado = $this->ejecutar($queryRecien);        
        //$this->ejecutar_guardar($queryRecien);        

        $this->disconnect();

        
        return $resultado;
    }

    function getMeta($id){
        //$id = "ESS207";
        $this->connect();    
        $json = '';
        $metas = $this->ejecutar("SELECT * FROM metas where cod_eps = '".$id."'");            
        $index = 1; 
        if($this->num_rows($metas) > 0){ 
            $json = $json.'{"metas": [';
            while($temp = $this->to_array($metas)){
                if($index < $this->num_rows($metas)){
                    $json = $json.'{"m1_cyd": "'.$temp['m1_cyd'].'","m2_joven_10_13": "'.$temp['m2_joven_10_13'].'","m3_joven_14_16": "'.$temp['m3_joven_14_16'].'", "m4_joven_17_21": "'.$temp['m4_joven_17_21'].'", "m5_joven_22_24": "'.$temp['m5_joven_22_24'].'","m6_joven_25_29": "'.$temp['m6_joven_25_29'].'","m7_joven_hemoglo": "'.$temp['m7_joven_hemoglo'].'","m8_adulto": "'.$temp['m8_adulto'].'","m9_adulto_glic": "'.$temp['m9_adulto_glic'].'","m10_adulto_crea": "'.$temp['m10_adulto_crea'].'","m11_adulto_hdl": "'.$temp['m11_adulto_hdl'].'","m12_cito": "'.$temp['m12_cito'].'","m13_agudeza": "'.$temp['m13_agudeza'].'","m14_oftal": "'.$temp['m14_oftal'].'","m15_controlp": "'.$temp['m15_controlp'].'"},'; 
                }
                else{
                    $json = $json.'{"m1_cyd": "'.$temp['m1_cyd'].'","m2_joven_10_13": "'.$temp['m2_joven_10_13'].'","m3_joven_14_16": "'.$temp['m3_joven_14_16'].'", "m4_joven_17_21": "'.$temp['m4_joven_17_21'].'", "m5_joven_22_24": "'.$temp['m5_joven_22_24'].'","m6_joven_25_29": "'.$temp['m6_joven_25_29'].'","m7_joven_hemoglo": "'.$temp['m7_joven_hemoglo'].'","m8_adulto": "'.$temp['m8_adulto'].'","m9_adulto_glic": "'.$temp['m9_adulto_glic'].'","m10_adulto_crea": "'.$temp['m10_adulto_crea'].'","m11_adulto_hdl": "'.$temp['m11_adulto_hdl'].'","m12_cito": "'.$temp['m12_cito'].'","m13_agudeza": "'.$temp['m13_agudeza'].'","m14_oftal": "'.$temp['m14_oftal'].'","m15_controlp": "'.$temp['m15_controlp'].'"}]';
                }
                $index++;
            } 
        }
        $json = $json.'}';  
        $this->disconnect();
        return $json;          
    }


    function getInfoRecien($id){

        $this->connect();    
        $json = '';
        $persona = $this->ejecutar("SELECT * FROM recien_nacido where id = '".$id."'");            
        $index = 1; 
        if($this->num_rows($persona) > 0){ 
            $json = $json.'{"personas": [';
            while($temp = $this->to_array($persona)){
                if($index < $this->num_rows($persona)){
                    $json = $json.'{"id": "'.$temp['id'].'","numero": "'.$temp['numero'].'","tipoide": "'.$temp['tipoide'].'", "primer_nombre": "'.$temp['primer_nombre'].'", "segundo_nombre": "'.$temp['segundo_nombre'].'","primer_apellido": "'.$temp['primer_apellido'].'","segundo_apellido": "'.$temp['segundo_apellido'].'","fechatamizaje": "'.$temp['fecha_tamizaje'].'","fecha_nac": "'.$temp['fecha_nac'].'","sexo": "'.$temp['sexo'].'","etnia": "'.$temp['cod_etnia'].'","tamizaje": "'.$temp['tamizaje_neonatal'].'"},'; 
                }
                else{
                    $json = $json.'{"id": "'.$temp['id'].'","numero": "'.$temp['numero'].'","tipoide": "'.$temp['tipoide'].'", "primer_nombre": "'.$temp['primer_nombre'].'", "segundo_nombre": "'.$temp['segundo_nombre'].'","primer_apellido": "'.$temp['primer_apellido'].'", "segundo_apellido": "'.$temp['segundo_apellido'].'","fechatamizaje": "'.$temp['fecha_tamizaje'].'","fecha_nac": "'.$temp['fecha_nac'].'","sexo": "'.$temp['sexo'].'","etnia": "'.$temp['cod_etnia'].'","tamizaje": "'.$temp['tamizaje_neonatal'].'" }]';
                }
                $index++;
            } 
        }
        $json = $json.'}';  
        $this->disconnect();
        return $json;          
    }

    function getInfoNinos05($id){
        //$id=1;
        $this->connect();    
        $json = '';
        $persona = $this->ejecutar("SELECT * FROM ninos05 where id = '".$id."'");            
        $index = 1; 
        if($this->num_rows($persona) > 0){ 
            $json = $json.'{"personas": [';
            while($temp = $this->to_array($persona)){
                if($index < $this->num_rows($persona)){
                    $json = $json.'{"id": "'.$temp['id'].'","numero": "'.$temp['numero'].'","tipoide": "'.$temp['tipoide'].'", "primer_nombre": "'.$temp['primer_nombre'].'", "segundo_nombre": "'.$temp['segundo_nombre'].'","primer_apellido": "'.$temp['primer_apellido'].'","segundo_apellido": "'.$temp['segundo_apellido'].'","fecha_atencion": "'.$temp['fecha_atencion'].'","fecha_nac": "'.$temp['fecha_nac'].'","sexo": "'.$temp['sexo'].'","etnia": "'.$temp['cod_etnia'].'","finalidad_consulta": "'.$temp['finalidad_consulta'].'","codigo_cups": "'.$temp['codigo_cups'].'","peso": "'.$temp['peso'].'","talla": "'.$temp['talla'].'","fecha_sum_sulfato": "'.$temp['fecha_sum_sulfato'].'","fecha_sum_vitamina": "'.$temp['fecha_sum_vitamina'].'","fecha_sum_micronut": "'.$temp['fecha_sum_micronut'].'","fecha_hemoglobina": "'.$temp['fecha_hemoglobina'].'","resulado_hemoglobina": "'.$temp['resulado_hemoglobina'].'"},'; 
                }
                else{
                    $json = $json.'{"id": "'.$temp['id'].'","numero": "'.$temp['numero'].'","tipoide": "'.$temp['tipoide'].'", "primer_nombre": "'.$temp['primer_nombre'].'", "segundo_nombre": "'.$temp['segundo_nombre'].'","primer_apellido": "'.$temp['primer_apellido'].'", "segundo_apellido": "'.$temp['segundo_apellido'].'","fecha_atencion": "'.$temp['fecha_atencion'].'","fecha_nac": "'.$temp['fecha_nac'].'","sexo": "'.$temp['sexo'].'","etnia": "'.$temp['cod_etnia'].'","finalidad_consulta": "'.$temp['finalidad_consulta'].'","codigo_cups": "'.$temp['codigo_cups'].'","peso": "'.$temp['peso'].'","talla": "'.$temp['talla'].'","fecha_sum_sulfato": "'.$temp['fecha_sum_sulfato'].'","fecha_sum_vitamina": "'.$temp['fecha_sum_vitamina'].'","fecha_sum_micronut": "'.$temp['fecha_sum_micronut'].'","fecha_hemoglobina": "'.$temp['fecha_hemoglobina'].'","resulado_hemoglobina": "'.$temp['resulado_hemoglobina'].'" }]';
                }
                $index++;
            } 
        }
        $json = $json.'}';  
        $this->disconnect();
        return $json;          
    }

    function getInfoNinos611($id){
        //$id=1;
        $this->connect();    
        $json = '';
        $persona = $this->ejecutar("SELECT * FROM ninos611 where id = '".$id."'");            
        $index = 1; 
        if($this->num_rows($persona) > 0){ 
            $json = $json.'{"personas": [';
            while($temp = $this->to_array($persona)){
                if($index < $this->num_rows($persona)){
                    $json = $json.'{"id": "'.$temp['id'].'","numero": "'.$temp['numero'].'","tipoide": "'.$temp['tipoide'].'", "primer_nombre": "'.$temp['primer_nombre'].'", "segundo_nombre": "'.$temp['segundo_nombre'].'","primer_apellido": "'.$temp['primer_apellido'].'","segundo_apellido": "'.$temp['segundo_apellido'].'","fecha_atencion": "'.$temp['fecha_atencion'].'","fecha_nac": "'.$temp['fecha_nac'].'","sexo": "'.$temp['sexo'].'","etnia": "'.$temp['cod_etnia'].'","finalidad_consulta": "'.$temp['finalidad_consulta'].'","codigo_cups": "'.$temp['codigo_cups'].'","peso": "'.$temp['peso'].'","talla": "'.$temp['talla'].'","fecha_hemoglobina": "'.$temp['fecha_hemoglobina'].'","resulado_hemoglobina": "'.$temp['resulado_hemoglobina'].'"},'; 
                }
                else{
                    $json = $json.'{"id": "'.$temp['id'].'","numero": "'.$temp['numero'].'","tipoide": "'.$temp['tipoide'].'", "primer_nombre": "'.$temp['primer_nombre'].'", "segundo_nombre": "'.$temp['segundo_nombre'].'","primer_apellido": "'.$temp['primer_apellido'].'", "segundo_apellido": "'.$temp['segundo_apellido'].'","fecha_atencion": "'.$temp['fecha_atencion'].'","fecha_nac": "'.$temp['fecha_nac'].'","sexo": "'.$temp['sexo'].'","etnia": "'.$temp['cod_etnia'].'","finalidad_consulta": "'.$temp['finalidad_consulta'].'","codigo_cups": "'.$temp['codigo_cups'].'","peso": "'.$temp['peso'].'","talla": "'.$temp['talla'].'","fecha_hemoglobina": "'.$temp['fecha_hemoglobina'].'","resulado_hemoglobina": "'.$temp['resulado_hemoglobina'].'" }]';
                }
                $index++;
            } 
        }
        $json = $json.'}';  
        $this->disconnect();
        return $json;          
    }

    function getInfoNinos1217($id){
        //$id=1;
        $this->connect();    
        $json = '';
        $persona = $this->ejecutar("SELECT * FROM persona1217 where id = '".$id."'");            
        $index = 1; 
        if($this->num_rows($persona) > 0){ 
            $json = $json.'{"personas": [';
            while($temp = $this->to_array($persona)){
                if($index < $this->num_rows($persona)){
                    $json = $json.'{"id": "'.$temp['id'].'","numero": "'.$temp['numero'].'","tipoide": "'.$temp['tipoide'].'", "primer_nombre": "'.$temp['primer_nombre'].'", "segundo_nombre": "'.$temp['segundo_nombre'].'","primer_apellido": "'.$temp['primer_apellido'].'","segundo_apellido": "'.$temp['segundo_apellido'].'","fecha_atencion": "'.$temp['fecha_atencion'].'","fecha_nac": "'.$temp['fecha_nac'].'","sexo": "'.$temp['sexo'].'","etnia": "'.$temp['cod_etnia'].'","finalidad_consulta": "'.$temp['finalidad_consulta'].'","codigo_cups": "'.$temp['codigo_cups'].'","peso": "'.$temp['peso'].'","talla": "'.$temp['talla'].'","fecha_hemoglobina": "'.$temp['fecha_hemoglobina'].'","resulado_hemoglobina": "'.$temp['resulado_hemoglobina'].'"},'; 
                }
                else{
                    $json = $json.'{"id": "'.$temp['id'].'","numero": "'.$temp['numero'].'","tipoide": "'.$temp['tipoide'].'", "primer_nombre": "'.$temp['primer_nombre'].'", "segundo_nombre": "'.$temp['segundo_nombre'].'","primer_apellido": "'.$temp['primer_apellido'].'", "segundo_apellido": "'.$temp['segundo_apellido'].'","fecha_atencion": "'.$temp['fecha_atencion'].'","fecha_nac": "'.$temp['fecha_nac'].'","sexo": "'.$temp['sexo'].'","etnia": "'.$temp['cod_etnia'].'","finalidad_consulta": "'.$temp['finalidad_consulta'].'","codigo_cups": "'.$temp['codigo_cups'].'","peso": "'.$temp['peso'].'","talla": "'.$temp['talla'].'","fecha_hemoglobina": "'.$temp['fecha_hemoglobina'].'","resulado_hemoglobina": "'.$temp['resulado_hemoglobina'].'" }]';
                }
                $index++;
            } 
        }
        $json = $json.'}';  
        $this->disconnect();
        return $json;          
    }

    function getInfoGestante($id){
        //$id=1;
        $this->connect();    
        $json = '';
        $persona = $this->ejecutar("SELECT * FROM gestante where id = '".$id."'");            
        $index = 1; 
        if($this->num_rows($persona) > 0){ 
            $json = $json.'{"personas": [';
            while($temp = $this->to_array($persona)){
                if($index < $this->num_rows($persona)){
                    $json = $json.'{"id": "'.$temp['id'].'","numero": "'.$temp['numero'].'","tipoide": "'.$temp['tipoide'].'", "primer_nombre": "'.$temp['primer_nombre'].'", "segundo_nombre": "'.$temp['segundo_nombre'].'","primer_apellido": "'.$temp['primer_apellido'].'","segundo_apellido": "'.$temp['segundo_apellido'].'","fecha_atencion": "'.$temp['fecha_atencion'].'","fecha_nac": "'.$temp['fecha_nac'].'","edad_gestacional": "'.$temp['edad_gestacional'].'","etnia": "'.$temp['cod_etnia'].'","finalidad_consulta": "'.$temp['finalidad_consulta'].'","codigo_cups": "'.$temp['codigo_cups'].'","fecha_sum_acido_fol": "'.$temp['fecha_sum_acido_fol'].'","fecha_sum_sulf_ferr": "'.$temp['fecha_sum_sulf_ferr'].'","fecha_hemoglobina": "'.$temp['fecha_hemoglobina'].'","resultado_hemoglobina": "'.$temp['resultado_hemoglobina'].'","fecha_sum_carb_cal": "'.$temp['fecha_sum_carb_cal'].'","fecha_toma_anti_hep": "'.$temp['fecha_toma_anti_hep'].'","resultado_anti_hep": "'.$temp['resultado_anti_hep'].'","fecha_toma_serologia": "'.$temp['fecha_toma_serologia'].'","resultado_serologia": "'.$temp['resultado_serologia'].'","fecha_asesoria_elisa": "'.$temp['fecha_asesoria_elisa'].'","fecha_toma_elisa": "'.$temp['fecha_toma_elisa'].'","resultado_elisa": "'.$temp['resultdo_elisa'].'","fecha_cons_lactancia": "'.$temp['fecha_cons_lactancia'].'"},'; 
                }
                else{
                    $json = $json.'{"id": "'.$temp['id'].'","numero": "'.$temp['numero'].'","tipoide": "'.$temp['tipoide'].'", "primer_nombre": "'.$temp['primer_nombre'].'", "segundo_nombre": "'.$temp['segundo_nombre'].'","primer_apellido": "'.$temp['primer_apellido'].'","segundo_apellido": "'.$temp['segundo_apellido'].'","fecha_atencion": "'.$temp['fecha_atencion'].'","fecha_nac": "'.$temp['fecha_nac'].'","edad_gestacional": "'.$temp['edad_gestacional'].'","etnia": "'.$temp['cod_etnia'].'","finalidad_consulta": "'.$temp['finalidad_consulta'].'","codigo_cups": "'.$temp['codigo_cups'].'","fecha_sum_acido_fol": "'.$temp['fecha_sum_acido_fol'].'","fecha_sum_sulf_ferr": "'.$temp['fecha_sum_sulf_ferr'].'","fecha_hemoglobina": "'.$temp['fecha_hemoglobina'].'","resultado_hemoglobina": "'.$temp['resultado_hemoglobina'].'","fecha_sum_carb_cal": "'.$temp['fecha_sum_carb_cal'].'","fecha_toma_anti_hep": "'.$temp['fecha_toma_anti_hep'].'","resultado_anti_hep": "'.$temp['resultado_anti_hep'].'","fecha_toma_serologia": "'.$temp['fecha_toma_serologia'].'","resultado_serologia": "'.$temp['resultado_serologia'].'","fecha_asesoria_elisa": "'.$temp['fecha_asesoria_elisa'].'","fecha_toma_elisa": "'.$temp['fecha_toma_elisa'].'","resultado_elisa": "'.$temp['resultdo_elisa'].'","fecha_cons_lactancia": "'.$temp['fecha_cons_lactancia'].'"}]';
                }
                $index++;
            } 
        }
        $json = $json.'}';  
        $this->disconnect();
        return $json;          
    }

    function getInfoParto($id){
        //$id=1;
        $this->connect();    
        $json = '';
        $persona = $this->ejecutar("SELECT * FROM parto where id = '".$id."'");            
        $index = 1; 
        if($this->num_rows($persona) > 0){ 
            $json = $json.'{"personas": [';
            while($temp = $this->to_array($persona)){
                if($index < $this->num_rows($persona)){
                    $json = $json.'{"id": "'.$temp['id'].'","numero": "'.$temp['numero'].'","tipoide": "'.$temp['tipoide'].'", "primer_nombre": "'.$temp['primer_nombre'].'", "segundo_nombre": "'.$temp['segundo_nombre'].'","primer_apellido": "'.$temp['primer_apellido'].'","segundo_apellido": "'.$temp['segundo_apellido'].'","fecha_atencion": "'.$temp['fecha_atencion'].'","etnia": "'.$temp['cod_etnia'].'","finalidad_consulta": "'.$temp['finalidad_consulta'].'","codigo_cups": "'.$temp['codigo_cups'].'","toma_prueba_sifilis": "'.$temp['toma_prueba_sifilis'].'","fecha_toma_sifilis": "'.$temp['fecha_toma_sifilis'].'","resultado_serologia": "'.$temp['resultado_serologia'].'","asesoria_pre_elisa": "'.$temp['asesoria_pre_elisa'].'","fecha_asesoria_elisa": "'.$temp['fecha_asesoria_elisa'].'","toma_prueba_vih": "'.$temp['toma_prueba_vih'].'","fecha_toma_vih": "'.$temp['fecha_toma_vih'].'","resultado_vih": "'.$temp['resultado_vih'].'","sum_anticon_post": "'.$temp['sum_anticon_post'].'","fecha_sum_anti": "'.$temp['fecha_sum_anti'].'"},'; 
                }
                else{
                    $json = $json.'{"id": "'.$temp['id'].'","numero": "'.$temp['numero'].'","tipoide": "'.$temp['tipoide'].'", "primer_nombre": "'.$temp['primer_nombre'].'", "segundo_nombre": "'.$temp['segundo_nombre'].'","primer_apellido": "'.$temp['primer_apellido'].'","segundo_apellido": "'.$temp['segundo_apellido'].'","fecha_atencion": "'.$temp['fecha_atencion'].'","etnia": "'.$temp['cod_etnia'].'","finalidad_consulta": "'.$temp['finalidad_consulta'].'","codigo_cups": "'.$temp['codigo_cups'].'","toma_prueba_sifilis": "'.$temp['toma_prueba_sifilis'].'","fecha_toma_sifilis": "'.$temp['fecha_toma_sifilis'].'","resultado_serologia": "'.$temp['resultado_serologia'].'","asesoria_pre_elisa": "'.$temp['asesoria_pre_elisa'].'","fecha_asesoria_elisa": "'.$temp['fecha_asesoria_elisa'].'","toma_prueba_vih": "'.$temp['toma_prueba_vih'].'","fecha_toma_vih": "'.$temp['fecha_toma_vih'].'","resultado_vih": "'.$temp['resultado_vih'].'","sum_anticon_post": "'.$temp['sum_anticon_post'].'","fecha_sum_anti": "'.$temp['fecha_sum_anti'].'"}]';
                }
                $index++;
            } 
        }
        $json = $json.'}';  
        $this->disconnect();
        return $json;          
    }


    function getListaPersona($tipo, $id){
        
        $this->connect();
        $json = '';
        if ($tipo == 1){
            $persona = $this->ejecutar("SELECT * FROM recien_nacido where numero = '".$id."'");            
            $index = 1; 
            if($this->num_rows($persona) > 0){ 
                $json = $json.'{"personas": [';
                 while($temp = $this->to_array($persona)){
                    if($index < $this->num_rows($persona)){
                        $json = $json.'{"id": "'.$temp['id'].'","numero": "'.$temp['numero'].'", "primer_nombre": "'.$temp['primer_nombre'].'","primer_apellido": "'.$temp['primer_apellido'].'","segundo_apellido": "'.$temp['segundo_apellido'].'","fechatamizaje": "'.$temp['fecha_tamizaje'].'"},'; 
                    }
                    else{
                        $json = $json.'{"id": "'.$temp['id'].'","numero": "'.$temp['numero'].'", "primer_nombre": "'.$temp['primer_nombre'].'","primer_apellido": "'.$temp['primer_apellido'].'", "segundo_apellido": "'.$temp['segundo_apellido'].'","fechatamizaje": "'.$temp['fecha_tamizaje'].'" }]';
                    }
                    $index++;

                } 
            }
            $json = $json.'}';  
            $this->disconnect();        
        }
        else if ($tipo == 2){
            $persona = $this->ejecutar("SELECT * FROM ninos05 where numero = '".$id."'");            
            $index = 1; 
            if($this->num_rows($persona) > 0){ 
                $json = $json.'{"personas": [';
                 while($temp = $this->to_array($persona)){
                    if($index < $this->num_rows($persona)){
                        $json = $json.'{"id": "'.$temp['id'].'","numero": "'.$temp['numero'].'", "primer_nombre": "'.$temp['primer_nombre'].'","primer_apellido": "'.$temp['primer_apellido'].'","segundo_apellido": "'.$temp['segundo_apellido'].'","fecha_atencion": "'.$temp['fecha_atencion'].'"},'; 
                    }
                    else{
                        $json = $json.'{"id": "'.$temp['id'].'","numero": "'.$temp['numero'].'", "primer_nombre": "'.$temp['primer_nombre'].'","primer_apellido": "'.$temp['primer_apellido'].'", "segundo_apellido": "'.$temp['segundo_apellido'].'","fecha_atencion": "'.$temp['fecha_atencion'].'" }]';
                    }
                    $index++;

                } 
            }
            $json = $json.'}';  
            $this->disconnect();        
        }
        else if ($tipo == 3){
            $persona = $this->ejecutar("SELECT * FROM ninos611 where numero = '".$id."'");            
            $index = 1; 
            if($this->num_rows($persona) > 0){ 
                $json = $json.'{"personas": [';
                 while($temp = $this->to_array($persona)){
                    if($index < $this->num_rows($persona)){
                        $json = $json.'{"id": "'.$temp['id'].'","numero": "'.$temp['numero'].'", "primer_nombre": "'.$temp['primer_nombre'].'","primer_apellido": "'.$temp['primer_apellido'].'","segundo_apellido": "'.$temp['segundo_apellido'].'","fecha_atencion": "'.$temp['fecha_atencion'].'"},'; 
                    }
                    else{
                        $json = $json.'{"id": "'.$temp['id'].'","numero": "'.$temp['numero'].'", "primer_nombre": "'.$temp['primer_nombre'].'","primer_apellido": "'.$temp['primer_apellido'].'", "segundo_apellido": "'.$temp['segundo_apellido'].'","fecha_atencion": "'.$temp['fecha_atencion'].'" }]';
                    }
                    $index++;

                } 
            }
            $json = $json.'}';  
            $this->disconnect();        
        }
        else if ($tipo == 4){
            $persona = $this->ejecutar("SELECT * FROM persona1217 where numero = '".$id."'");            
            $index = 1; 
            if($this->num_rows($persona) > 0){ 
                $json = $json.'{"personas": [';
                 while($temp = $this->to_array($persona)){
                    if($index < $this->num_rows($persona)){
                        $json = $json.'{"id": "'.$temp['id'].'","numero": "'.$temp['numero'].'", "primer_nombre": "'.$temp['primer_nombre'].'","primer_apellido": "'.$temp['primer_apellido'].'","segundo_apellido": "'.$temp['segundo_apellido'].'","fecha_atencion": "'.$temp['fecha_atencion'].'"},'; 
                    }
                    else{
                        $json = $json.'{"id": "'.$temp['id'].'","numero": "'.$temp['numero'].'", "primer_nombre": "'.$temp['primer_nombre'].'","primer_apellido": "'.$temp['primer_apellido'].'", "segundo_apellido": "'.$temp['segundo_apellido'].'","fecha_atencion": "'.$temp['fecha_atencion'].'" }]';
                    }
                    $index++;

                } 
            }
            $json = $json.'}';  
            $this->disconnect();        
        }

        else if ($tipo == 5){
            $persona = $this->ejecutar("SELECT * FROM gestante where numero = '".$id."'");            
            $index = 1; 
            if($this->num_rows($persona) > 0){ 
                $json = $json.'{"personas": [';
                 while($temp = $this->to_array($persona)){
                    if($index < $this->num_rows($persona)){
                        $json = $json.'{"id": "'.$temp['id'].'","numero": "'.$temp['numero'].'", "primer_nombre": "'.$temp['primer_nombre'].'","primer_apellido": "'.$temp['primer_apellido'].'","segundo_apellido": "'.$temp['segundo_apellido'].'","fecha_atencion": "'.$temp['fecha_atencion'].'"},'; 
                    }
                    else{
                        $json = $json.'{"id": "'.$temp['id'].'","numero": "'.$temp['numero'].'", "primer_nombre": "'.$temp['primer_nombre'].'","primer_apellido": "'.$temp['primer_apellido'].'", "segundo_apellido": "'.$temp['segundo_apellido'].'","fecha_atencion": "'.$temp['fecha_atencion'].'" }]';
                    }
                    $index++;

                } 
            }
            $json = $json.'}';  
            $this->disconnect();        
        }

        else if ($tipo == 6){
            $persona = $this->ejecutar("SELECT * FROM parto where numero = '".$id."'");            
            $index = 1; 
            if($this->num_rows($persona) > 0){ 
                $json = $json.'{"personas": [';
                 while($temp = $this->to_array($persona)){
                    if($index < $this->num_rows($persona)){
                        $json = $json.'{"id": "'.$temp['id'].'","numero": "'.$temp['numero'].'", "primer_nombre": "'.$temp['primer_nombre'].'","primer_apellido": "'.$temp['primer_apellido'].'","segundo_apellido": "'.$temp['segundo_apellido'].'","fecha_atencion": "'.$temp['fecha_atencion'].'"},'; 
                    }
                    else{
                        $json = $json.'{"id": "'.$temp['id'].'","numero": "'.$temp['numero'].'", "primer_nombre": "'.$temp['primer_nombre'].'","primer_apellido": "'.$temp['primer_apellido'].'", "segundo_apellido": "'.$temp['segundo_apellido'].'","fecha_atencion": "'.$temp['fecha_atencion'].'" }]';
                    }
                    $index++;

                } 
            }
            $json = $json.'}';  
            $this->disconnect();        
        }
        


        return $json; 

        /*else if ($tipo == 2){
            $query = "SELECT * FROM ninos05 where id = $id";
        }
        else if ($tipo == 3){
            $query = "SELECT * FROM ninos611 where id = $id";
        }
        else if ($tipo == 4){
            $query = "SELECT * FROM persona1217 where id = $id";
        }
        else if ($tipo == 5){
            $query = "SELECT * FROM gestante where id = $id";
        }
        else if ($tipo == 6){
            $query = "SELECT * FROM parto where id = $id";
        }*/
        
       
        
                           

    }
    
}

?>