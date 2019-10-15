<?php

$dir = explode("/", $_SERVER['PHP_SELF']);
$projectName = $dir[1];

require ($_SERVER['DOCUMENT_ROOT'].'/'.$projectName.'/dao/Ninos1217DAO.php');


class Ninos1217Controller{
	
	function getSelectValues(){
		$ninosDao = new Ninos1217DAO;				
        $selectValues = $ninosDao->getSelectValues();

        echo $selectValues;
	}

	function save($id,$tipo_id,$fecha_nac,$sexo,$pnombre,$snombre,$papellido,$sapellido,$etnia,$fechaAtencion,$finalidad,$cups,$peso, $talla, $fechaHemo, $hemo){

		$ninosDao = new Ninos1217DAO;
		$ninos = new Ninos1217;

		$ninos->setValues1($id,$tipo_id,$fecha_nac,$sexo,$pnombre,$snombre,$papellido,$sapellido,$etnia,$fechaAtencion,$finalidad,$cups,$peso, $talla, $fechaHemo, $hemo);

		$save = $ninosDao->saveNinos1217($ninos);

		echo $save;

	}

    function update($codigo, $id,$tipo_id,$fecha_nac,$sexo,$etnia,$pnombre,$snombre,$papellido,$sapellido,$fechaAtencion,$finalidad,$cups,$peso, $talla, $fechaHemo, $hemo){

		$ninosDao = new Ninos1217DAO;
		$ninos = new Ninos1217;

		$ninos->setValues($codigo, $id, $tipo_id,$fecha_nac,$sexo,$pnombre,$snombre,$papellido,$sapellido,$etnia,$fechaAtencion,$finalidad,$cups,$peso, $talla, $fechaHemo, $hemo);

		$save = $ninosDao->updateNinos1217($ninos);

		echo $save;

	}
	

    function getInfoNinos611($id){
		$ninosDao = new Ninos611DAO;
		$info = $ninosDao->getInfo($id);

		echo json_encode($info);
	}
}

?>