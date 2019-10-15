<?php

class Ninos05{
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
	public $fecha_atencion;
	public $finalidad_cons;
	public $codigo_cups;
	public $peso;
	public $talla;
	public $fecha_sum_sulf;
	public $fecha_sum_vit;
	public $fecha_sum_micro;
	public $fecha_toma_hemo;
	public $resultado_hemo;
	

	public function setValues($codigo,$tipo_id,$id,$fecha_nac,$sexo,$etnia,$papellido,$sapellido,$pnombre,$snombre,$fecha_atencion, $finalidad_cons,$codigo_cups,$peso,$talla,$fecha_sum_sulf,
		                      $fecha_sum_vit, $fecha_sum_micro, $fecha_toma_hemo, $resultado_hemo){
		$this->codigo=$codigo;
        $this->id=$id;
		$this->tipo_id=$tipo_id;
		$this->fecha_nac=$fecha_nac;
		$this->sexo=$sexo;
		$this->etnia=$etnia;
		$this->papellido=$papellido;
		$this->sapellido=$sapellido;
		$this->pnombre=$pnombre;
		$this->snombre=$snombre;		
		$this->fecha_atencion=$fecha_atencion;
		$this->finalidad_cons=$finalidad_cons;
		$this->codigo_cups=$codigo_cups;
		$this->peso= $peso;
		$this->talla = $talla;
		$this->fecha_sum_sulf = $fecha_sum_sulf;
		$this->fecha_sum_vit = $fecha_sum_vit;
		$this->fecha_sum_micro = $fecha_sum_micro;		
		$this->fecha_toma_hemo = $fecha_toma_hemo;
		$this->resultado_hemo = $resultado_hemo;		

		return $this;

	}

	public function setValues1($tipo_id,$id,$fecha_nac,$sexo,$etnia,$papellido,$sapellido,$pnombre,$snombre,$fecha_atencion, $finalidad_cons,$codigo_cups,$peso,$talla,$fecha_sum_sulf,$fecha_sum_vit, $fecha_sum_micro, $fecha_toma_hemo, $resultado_hemo){

    
        $this->id=$id;
		$this->tipo_id=$tipo_id;
		$this->fecha_nac=$fecha_nac;
		$this->sexo=$sexo;
		$this->etnia=$etnia;
		$this->papellido=$papellido;
		$this->sapellido=$sapellido;
		$this->pnombre=$pnombre;
		$this->snombre=$snombre;		
		$this->fecha_atencion=$fecha_atencion;
		$this->finalidad_cons=$finalidad_cons;
		$this->codigo_cups=$codigo_cups;
		$this->peso= $peso;
		$this->talla = $talla;
		$this->fecha_sum_sulf = $fecha_sum_sulf;
		$this->fecha_sum_vit = $fecha_sum_vit;
		$this->fecha_sum_micro = $fecha_sum_micro;		
		$this->fecha_toma_hemo = $fecha_toma_hemo;
		$this->resultado_hemo = $resultado_hemo;		

		return $this;

	}

}

?>
