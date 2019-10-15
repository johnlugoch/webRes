<?php

class Ninos1217{
	public $codigo;
	public $id;
	public $tipo_id;
	public $fecha_nac;
	public $sexo;
	public $pnombre;
	public $snombre;
	public $papellido;
	public $sapellido;
	public $etnia;
	public $fecha_atencion;
	public $finalidad_cons;
	public $codigo_cups;
	public $peso;
	public $talla;	
	public $fecha_toma_hemo;
	public $resultado_hemo;
	

	public function setValues($codigo,$id,$tipo_id,$fecha_nac,$sexo,$pnombre,$snombre,$papellido,$sapellido,$etnia,$fecha_atencion, $finalidad_cons,$codigo_cups,$peso,$talla,$fecha_toma_hemo, $resultado_hemo){
		$this->codigo=$codigo;
        $this->id=$id;
		$this->tipo_id=$tipo_id;
		$this->fecha_nac=$fecha_nac;
		$this->sexo=$sexo;
		$this->pnombre=$pnombre;
		$this->snombre=$snombre;
		$this->papellido=$papellido;
		$this->sapellido=$sapellido;
		$this->etnia=$etnia;
		$this->fecha_atencion=$fecha_atencion;
		$this->finalidad_cons=$finalidad_cons;
		$this->codigo_cups=$codigo_cups;
		$this->peso= $peso;
		$this->talla = $talla;			
		$this->fecha_toma_hemo = $fecha_toma_hemo;
		$this->resultado_hemo = $resultado_hemo;		

		return $this;

	}

	public function setValues1($id,$tipo_id,$fecha_nac,$sexo,$pnombre,$snombre,$papellido,$sapellido,$etnia,$fecha_atencion, $finalidad_cons,$codigo_cups,$peso,$talla, $fecha_toma_hemo, $resultado_hemo){
        $this->id=$id;
		$this->tipo_id=$tipo_id;
		$this->fecha_nac=$fecha_nac;
		$this->sexo=$sexo;
		$this->pnombre=$pnombre;
		$this->snombre=$snombre;
		$this->papellido=$papellido;
		$this->sapellido=$sapellido;
		$this->etnia=$etnia;
		$this->fecha_atencion=$fecha_atencion;
		$this->finalidad_cons=$finalidad_cons;
		$this->codigo_cups=$codigo_cups;
		$this->peso= $peso;
		$this->talla = $talla;			
		$this->fecha_toma_hemo = $fecha_toma_hemo;
		$this->resultado_hemo = $resultado_hemo;		

		return $this;

	}

}

?>
