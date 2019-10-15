<?php

$dir = explode("/", $_SERVER['PHP_SELF']);
$projectName = $dir[1];

require ($_SERVER['DOCUMENT_ROOT'].'/'.$projectName.'/dao/RecienDAO.php');

class RecienController{
	
	function getSelectValues(){
		$recienDao = new RecienDAO;				
        $selectValues = $recienDao->getSelectValues();

        echo $selectValues;
	}

	function saveRecien($tipo_id,$id,$fecha_nac,$sexo,$et,$pnombre,$snombre,$papellido,$sapellido,$etnia,$tamizaje,$fechatamizaje){

		$recienDao = new RecienDAO;
		$recien = new Recien;		

		$recien->setValues1($tipo_id,$id,$fecha_nac,$sexo,$et,$pnombre,$snombre,$papellido,$sapellido,$etnia,$tamizaje,$fechatamizaje);

		$saveRecien = $recienDao->saveRecien($recien);

		echo $saveRecien;

	}

	function updateRecien($codigo,$tipo_id,$id,$fecha_nac,$sexo,$et,$pnombre,$snombre,$papellido,$sapellido,$etnia,$tamizaje,$fechatamizaje){

		$recienDao = new RecienDAO;
		$recien = new Recien;		

		$recien->setValues($codigo,$tipo_id,$id,$fecha_nac,$sexo,$et,$pnombre,$snombre,$papellido,$sapellido,$etnia,$tamizaje,$fechatamizaje);

		$saveRecien = $recienDao->updateRecien($recien);

		echo $saveRecien;

	}


	function guardarRecien($id,$tipo_id){
	    $recienDao = new RecienDAO;	
	    $resultado = $recienDao->guardar_recien_nacido($id,$tipo_id);
	    echo $resultado;
    }

    function getMeta($id){
		$recienDao = new RecienDAO;
		$infoRecien = $recienDao->getMeta($id);

		echo $infoRecien;
	}

    function getInfoRecien($id){
		$recienDao = new RecienDAO;
		$infoRecien = $recienDao->getInfoRecien($id);

		echo $infoRecien;
	}

	function getInfoNinos05($id){
		$recienDao = new RecienDAO;
		$infoRecien = $recienDao->getInfoNinos05($id);

		echo $infoRecien;
	}

	function getInfoNinos611($id){
		$recienDao = new RecienDAO;
		$infoRecien = $recienDao->getInfoNinos611($id);

		echo $infoRecien;
	}

	function getInfoNinos1217($id){
		$recienDao = new RecienDAO;
		$infoRecien = $recienDao->getInfoNinos1217($id);

		echo $infoRecien;
	}

	function getInfoGestante($id){
		$recienDao = new RecienDAO;
		$infoRecien = $recienDao->getInfoGestante($id);

		echo $infoRecien;
	}

	function getInfoParto($id){
		$recienDao = new RecienDAO;
		$infoRecien = $recienDao->getInfoParto($id);

		echo $infoRecien;
	}

	function getListaPersona($tipo, $id){
		$recienDao = new RecienDAO;
		$infoRecien = $recienDao->getListaPersona($tipo, $id);

		echo $infoRecien;
	}
}

?>