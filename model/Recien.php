<?php

class Recien{
	public $codigo;	
	public $tipo_id;
	public $id;
	public $fecha_nac;
	public $sexo;
	public $etnia;
	public $papellido;
	public $sapellido;
	public $pnombre;
	public $snombre;
	public $tamizaje;
	public $fecha_tam;
	

	public function setValues($codigo,$tipo_id,$id,$fecha_nac,$sexo,$etnia,$papellido,$sapellido,$pnombre,$snombre,$tamizaje,$fechatam){       
		$this->codigo=$codigo;
		$this->tipo_id=$tipo_id;
		$this->id=$id;
		$this->fecha_nac=$fecha_nac;
		$this->sexo=$sexo;
		$this->etnia=$etnia;
		$this->papellido=$papellido;
		$this->sapellido=$sapellido;
		$this->pnombre=$pnombre;
		$this->snombre=$snombre;				
		$this->tamizaje=$tamizaje;
		$this->fecha_tam=$fechatam;
		return $this;

	}

	public function setValues1($tipo_id,$id,$fecha_nac,$sexo,$etnia,$papellido,$sapellido,$pnombre,$snombre,$tamizaje,$fechatam){       		
		$this->tipo_id=$tipo_id;
		$this->id=$id;
		$this->fecha_nac=$fecha_nac;
		$this->sexo=$sexo;
		$this->etnia=$etnia;
		$this->papellido=$papellido;
		$this->sapellido=$sapellido;
		$this->pnombre=$pnombre;
		$this->snombre=$snombre;				
		$this->tamizaje=$tamizaje;
		$this->fecha_tam=$fechatam;
		return $this;

	}

}

?>