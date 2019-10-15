<?php

$dir = explode("/", $_SERVER['PHP_SELF']);
$projectName = $dir[1];

require ($_SERVER['DOCUMENT_ROOT'].'/'.$projectName.'/dao/PartoDAO.php');


class PartoController{
	
	function getSelectValues(){
		$partoDao = new PartoDAO;				
        $selectValues = $partoDao->getSelectValues();

        echo $selectValues;
	}

	function save(
							  $tipo_id,
							  $id,
							  $papellido,
							  $sapellido,							  
							  $pnombre,
							  $snombre,
							  
							  $etnia,            
		                      $fecha_atencion, 
		                      $finalidad_cons,
		                      $codigo_cups,
		                      $toma_prueba_sifi,
		                      $fecha_prueba_sifi,
		                      $resultado_sero,
		                      $asesoria_pre_elisa,
		                      $fecha_ases_elisa, 
		                      $toma_rapida_vih, 
		                      $fecha_toma_vih, 
		                      $resultado_vih, 
		                      $sum_anticoncep, 
		                      $fecha_anticoncep){

		$partoDao = new PartoDAO;
		$parto = new Parto;

		$parto->setValues1(
							  $tipo_id,	
							  $id,
							  $papellido,
							  $sapellido,						  
							  $pnombre,
							  $snombre,
							  
							  $etnia,            
		                      $fecha_atencion, 
		                      $finalidad_cons,
		                      $codigo_cups,
		                      $toma_prueba_sifi,
		                      $fecha_prueba_sifi,
		                      $resultado_sero,
		                      $asesoria_pre_elisa,
		                      $fecha_ases_elisa, 
		                      $toma_rapida_vih, 
		                      $fecha_toma_vih, 
		                      $resultado_vih, 
		                      $sum_anticoncep, 
		                      $fecha_anticoncep);
                             $save = $partoDao->saveParto($parto);
		echo $save;
	}

	function update($codigo,
							  $tipo_id,
							  $id,
							  $papellido,
							  $sapellido,							  
							  $pnombre,
							  $snombre,
							  
							  $etnia,            
		                      $fecha_atencion, 
		                      $finalidad_cons,
		                      $codigo_cups,
		                      $toma_prueba_sifi,
		                      $fecha_prueba_sifi,
		                      $resultado_sero,
		                      $asesoria_pre_elisa,
		                      $fecha_ases_elisa, 
		                      $toma_rapida_vih, 
		                      $fecha_toma_vih, 
		                      $resultado_vih, 
		                      $sum_anticoncep, 
		                      $fecha_anticoncep){

		$partoDao = new PartoDAO;
		$parto = new Parto;

		$parto->setValues($codigo,
							  $tipo_id,	
							  $id,
							  $papellido,
							  $sapellido,						  
							  $pnombre,
							  $snombre,
							  
							  $etnia,            
		                      $fecha_atencion, 
		                      $finalidad_cons,
		                      $codigo_cups,
		                      $toma_prueba_sifi,
		                      $fecha_prueba_sifi,
		                      $resultado_sero,
		                      $asesoria_pre_elisa,
		                      $fecha_ases_elisa, 
		                      $toma_rapida_vih, 
		                      $fecha_toma_vih, 
		                      $resultado_vih, 
		                      $sum_anticoncep, 
		                      $fecha_anticoncep);
                             $save = $partoDao->updateParto($parto);
		echo $save;
	}

    function getInfoParto($id){
		$partoDao = new PartoDAO;
		$info = $partoDao->getInfo($id);

		echo json_encode($info);
	}
}

?>