<?php

$dir = explode("/", $_SERVER['PHP_SELF']);
$projectName = $dir[1];

require ($_SERVER['DOCUMENT_ROOT'].'/'.$projectName.'/dao/Ninos05DAO.php');


class Ninos05Controller{
	
	function getSelectValues(){
		$ninosDao = new Ninos05DAO;				
        $selectValues = $ninosDao->getSelectValues();

        echo $selectValues;
	}

	function save($tipo_id, $id, $fecha_nac,$sexo,$etnia,$papellido,$sapellido,$pnombre,$snombre,$fechaAtencion,$finalidad,$cups,$peso, $talla,$fechaSulfato, $fechaVitamina, $fechaMicro, $fechaHemo, $hemo){

		$ninosDao = new Ninos05DAO;
		$ninos05 = new Ninos05;

		$ninos05->setValues1($tipo_id, $id, $fecha_nac, $sexo, $etnia, $papellido, $sapellido, $pnombre, $snombre, $fechaAtencion, $finalidad, $cups, $peso, $talla, $fechaSulfato, $fechaVitamina, $fechaMicro, $fechaHemo, $hemo);

		echo $ninos05->tipo_id;

		$save = $ninosDao->saveNinos05($ninos05);

		echo $save;

	}

	function updateNinos05($codigo,$tipo_id,$id,$fecha_nac,$sexo,$etnia,$papellido,$sapellido,$pnombre,$snombre,$fechaAtencion,$finalidad,$cups,$peso, $talla,$fechaSulfato, $fechaVitamina, $fechaMicro, $fechaHemo, $hemo){

		$ninosDao = new Ninos05DAO;
		$ninos05 = new Ninos05;

		$ninos05->setValues($codigo,$tipo_id,$id,$fecha_nac,$sexo,$etnia,$papellido,$sapellido,$pnombre,$snombre,$fechaAtencion,$finalidad,$cups,$peso, $talla,$fechaSulfato, $fechaVitamina, $fechaMicro, $fechaHemo, $hemo);

		$save = $ninosDao->updateNinos05($ninos05);

		echo $save;

	}

	

    function getInfoNinos05($id){
		$ninosDao = new Ninos05DAO;
		$info = $ninosDao->getInfo($id);

		echo json_encode($info);
	}
}

?>