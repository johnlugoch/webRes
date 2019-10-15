<?php

class Parto{
	public $codigo;
	public $id;
	public $tipo_id;	
	public $pnombre;
	public $snombre;
	public $papellido;
	public $sapellido;
	public $etnia;
	public $fecha_atencion;
	public $finalidad_cons;
	public $codigo_cups;
    public $toma_prueba_sifi;
	public $fecha_prueba_sifi;
	public $resultado_sero;
	public $asesoria_pre_elisa;
	public $fecha_ases_elisa;
    public $toma_rapida_vih;
    public $fecha_toma_vih;
    public $resultado_vih;
    public $sum_anticoncep;
    public $fecha_anticoncep;

 
	public function setValues($codigo,
							  $tipo_id,	
							  $id,						  
							  $pnombre,
							  $snombre,
							  $papellido,
							  $sapellido,
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

        $this->codigo=$codigo;
		$this->id=$id;
		$this->tipo_id=$tipo_id;		
		$this->pnombre=$pnombre;
		$this->snombre=$snombre;
		$this->papellido=$papellido;
		$this->sapellido=$sapellido;
		$this->etnia=$etnia;	
		$this->fecha_atencion=$fecha_atencion;
		$this->finalidad_cons=$finalidad_cons;
		$this->codigo_cups=$codigo_cups;
		$this->toma_prueba_sifi=$toma_prueba_sifi;
        $this->fecha_prueba_sifi = $fecha_prueba_sifi;   
        $this->resultado_sero=$resultado_sero;
        $this->asesoria_pre_elisa=$asesoria_pre_elisa;
        $this->fecha_ases_elisa=$fecha_ases_elisa;
        $this->toma_rapida_vih=$toma_rapida_vih;
        $this->fecha_toma_vih=$fecha_toma_vih;
        $this->resultado_vih=$resultado_vih;
        $this->sum_anticoncep=$sum_anticoncep;
        $this->fecha_anticoncep=$fecha_anticoncep;

		return $this;

	}

	public function setValues1(
							  $tipo_id,	
							  $id,						  
							  $pnombre,
							  $snombre,
							  $papellido,
							  $sapellido,
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

		
		$this->tipo_id=$tipo_id;	
		$this->id=$id;	
		$this->pnombre=$pnombre;
		$this->snombre=$snombre;
		$this->papellido=$papellido;
		$this->sapellido=$sapellido;
		$this->etnia=$etnia;	
		$this->fecha_atencion=$fecha_atencion;
		$this->finalidad_cons=$finalidad_cons;
		$this->codigo_cups=$codigo_cups;
		$this->toma_prueba_sifi=$toma_prueba_sifi;
        $this->fecha_prueba_sifi = $fecha_prueba_sifi;   
        $this->resultado_sero=$resultado_sero;
        $this->asesoria_pre_elisa=$asesoria_pre_elisa;
        $this->fecha_ases_elisa=$fecha_ases_elisa;
        $this->toma_rapida_vih=$toma_rapida_vih;
        $this->fecha_toma_vih=$fecha_toma_vih;
        $this->resultado_vih=$resultado_vih;
        $this->sum_anticoncep=$sum_anticoncep;
        $this->fecha_anticoncep=$fecha_anticoncep;

		return $this;

	}

}

?>
