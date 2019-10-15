<?php

$dir = explode("/", $_SERVER['PHP_SELF']);
$projectName = $dir[1];

require ($_SERVER['DOCUMENT_ROOT'].'/'.$projectName.'/dao/Ninos611DAO.php');


class Ninos611Controller{
	
	function getSelectValues(){
		$ninosDao = new Ninos611DAO;				
        $selectValues = $ninosDao->getSelectValues();

        echo $selectValues;
	}

	function save($id,$tipo_id,$fecha_nac,$sexo,$pnombre,$snombre,$papellido,$sapellido,$etnia,$fechaAtencion,$finalidad,$cups,$peso, $talla, $fechaHemo, $hemo){

		$ninosDao = new Ninos611DAO;
		$ninos = new Ninos611;

		$ninos->setValues1($id,$tipo_id,$fecha_nac,$sexo,$pnombre,$snombre,$papellido,$sapellido,$etnia,$fechaAtencion,$finalidad,$cups,$peso, $talla, $fechaHemo, $hemo);

		$save = $ninosDao->saveNinos611($ninos);

		echo $save;

	}

	function update($codigo, $id,$tipo_id,$fecha_nac,$sexo,$pnombre,$snombre,$papellido,$sapellido,$etnia,$fechaAtencion,$finalidad,$cups,$peso, $talla, $fechaHemo, $hemo){

		$ninosDao = new Ninos611DAO;
		$ninos = new Ninos611;

		$ninos->setValues($codigo, $id, $tipo_id,$fecha_nac,$sexo,$pnombre,$snombre,$papellido,$sapellido,$etnia,$fechaAtencion,$finalidad,$cups,$peso, $talla, $fechaHemo, $hemo);

		$save = $ninosDao->updateNinos611($ninos);

		echo $save;

	}

	

    function getInfoNinos611($id){
		$ninosDao = new Ninos611DAO;
		$info = $ninosDao->getInfo($id);

		echo json_encode($info);
	}
}

?>