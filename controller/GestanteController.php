<?php

$dir = explode("/", $_SERVER['PHP_SELF']);
$projectName = $dir[1];

require ($_SERVER['DOCUMENT_ROOT'].'/'.$projectName.'/dao/GestanteDAO.php');


class GestanteController{
	
	function getSelectValues(){
		$gestanteDao = new GestanteDAO;				
        $selectValues = $gestanteDao->getSelectValues();

        echo $selectValues;
	}

	function save($id,
		         $tipo_id,
		         
		         $papellido,
		         $sapellido,
		         $pnombre,
		         $snombre,
		         $fecha_nac,
		         $gestacional,
		         $etnia,
                
		         $fechaAtencion,
		         $finalidad,
		         $cups,
		          
		         $fechafolico,
		         $fechaSulfato,
		         $fechaCarbonato,
		         $fecha_antigeno,
		         $resultado_antigeno,

		         $fechaSerologia, 
		         $resultadoSerologia, 
		         $fechaAsesoria, 
		         $fechaTomaElisa, 
		         $resultadoElisa,
		         $fechaHemo, 
		         $hemo,
		         $fecha_lactancia){

		$gestDao = new GestanteDAO;
		$gestante = new Gestante;

		$gestante->setValues1($id,
						         $tipo_id,
						         
						         $papellido,
						         $sapellido,
						         $pnombre,
						         $snombre,
						         $fecha_nac,
						         $gestacional,
						         $etnia,
				                
						         $fechaAtencion,
						         $finalidad,
						         $cups,
						          
						         $fechafolico,
						         $fechaSulfato,
						         $fechaCarbonato,
						         $fecha_antigeno,
						         $resultado_antigeno,

						         $fechaSerologia, 
						         $resultadoSerologia, 
						         $fechaAsesoria, 
						         $fechaTomaElisa, 
						         $resultadoElisa,
						         $fechaHemo, 
						         $hemo,
						         $fecha_lactancia);
                             $save = $gestDao->saveGestante($gestante);

		echo $save;

	}

	function update($codigo, $id,
		         $tipo_id,
		         
		         $papellido,
		         $sapellido,
		         $pnombre,
		         $snombre,
		         $fecha_nac,
		         $gestacional,
		         $etnia,
                
		         $fechaAtencion,
		         $finalidad,
		         $cups,
		          
		         $fechafolico,
		         $fechaSulfato,
		         $fechaCarbonato,
		         $fecha_antigeno,
		         $resultado_antigeno,

		         $fechaSerologia, 
		         $resultadoSerologia, 
		         $fechaAsesoria, 
		         $fechaTomaElisa, 
		         $resultadoElisa,
		         $fechaHemo, 
		         $hemo,
		         $fecha_lactancia){

		$gestDao = new GestanteDAO;
		$gestante = new Gestante;

		$gestante->setValues($codigo, $id,
						         $tipo_id,
						         
						         $papellido,
						         $sapellido,
						         $pnombre,
						         $snombre,
						         $fecha_nac,
						         $gestacional,
						         $etnia,
				                
						         $fechaAtencion,
						         $finalidad,
						         $cups,
						          
						         $fechafolico,
						         $fechaSulfato,
						         $fechaCarbonato,
						         $fecha_antigeno,
						         $resultado_antigeno,

						         $fechaSerologia, 
						         $resultadoSerologia, 
						         $fechaAsesoria, 
						         $fechaTomaElisa, 
						         $resultadoElisa,
						         $fechaHemo, 
						         $hemo,
						         $fecha_lactancia);
                             $save = $gestDao->updateGestante($gestante);

		echo $save;

	}


	

    function getInfoGestante($id){
		$gestanteDao = new GestanteDAO;
		$info = $gestanteDao->getInfo($id);

		echo json_encode($info);
	}
}

?>