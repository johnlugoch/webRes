<?php

class Gestante{
	public $codigo;
	public $id;
	public $tipo_id;
	public $fecha_nac;
	public $pnombre;
	public $snombre;
	public $papellido;
	public $sapellido;
	public $etnia;
	public $edad_gestacional;
	public $fecha_atencion;
	public $finalidad_cons;
	public $codigo_cups;
	public $fecha_acido_folico;
	public $fecha_carbonato;
	public $fecha_antigeno;
	public $resultado_antigeno;
	public $fecha_sero;
	public $resultado_sero;
	public $fecha_asesoria_eli;
	public $fecha_toma_eli;
	public $resultado_eli;
	public $fecha_toma_hemo;
	public $resultado_hemo;
	public $fecha_lactancia;
	 
	public function setValues(
		$codigo,
		$id,
		$tipo_id,
		
		$papellido,
		$sapellido,
		$pnombre,
		$snombre,
		$fecha_nac,
		
		$edad_gestacional, 
		$etnia,           
		$fecha_atencion, 
		$finalidad_cons,
		$codigo_cups,
		
		$fecha_acido_folico,
		$fecha_sulfato,
		$fecha_carbonato,
		$fecha_antigeno,
		$resultado_antigeno,

		$fecha_sero,
		$resultado_sero,
		$fecha_asesoria_eli,
		$fecha_toma_eli,
		$resultado_eli, 
		$fecha_toma_hemo, 
		$resultado_hemo, 
		$fecha_lactancia){   

		$this->codigo=$codigo;
		$this->id=$id;
		$this->tipo_id=$tipo_id;
		$this->fecha_nac=$fecha_nac;		
		$this->pnombre=$pnombre;
		$this->snombre=$snombre;
		$this->papellido=$papellido;
		$this->sapellido=$sapellido;
		$this->etnia=$etnia;
		$this->edad_gestacional=$edad_gestacional;
		$this->fecha_atencion=$fecha_atencion;
		$this->finalidad_cons=$finalidad_cons;
		$this->codigo_cups=$codigo_cups;

		$this->fecha_acido_folico=$fecha_acido_folico;
		$this->fecha_sulfato=$fecha_sulfato;
		$this->fecha_carbonato=$fecha_carbonato;
		$this->fecha_antigeno=$fecha_antigeno;
		$this->resultado_antigeno=$resultado_antigeno;
		
		$this->fecha_sero=$fecha_sero;
		$this->resultado_sero=$resultado_sero;
		$this->fecha_asesoria_eli=$fecha_asesoria_eli;
		$this->fecha_toma_eli=$fecha_toma_eli;
		$this->resultado_eli=$resultado_eli;		
		$this->fecha_toma_hemo = $fecha_toma_hemo;
		$this->resultado_hemo = $resultado_hemo;
		$this->fecha_cons_lact=$fecha_lactancia;		

		return $this;

	}

	public function setValues1(
		$id,
		$tipo_id,
		$papellido,
		$sapellido,
		$pnombre,
		$snombre,
		$fecha_nac,
		$edad_gestacional,		
		$etnia,
		            
		$fecha_atencion, 
		$finalidad_cons,
		$codigo_cups,
		
		$fecha_acido_folico,
		$fecha_sulfato,
		$fecha_carbonato,
		$fecha_antigeno,
		$resultado_antigeno,

		$fecha_sero,
		$resultado_sero,
		$fecha_asesoria_eli,
		$fecha_toma_eli,
		$resultado_eli, 
		$fecha_toma_hemo, 
		$resultado_hemo, 
		$fecha_lactancia){   

		$this->id=$id;
		$this->tipo_id=$tipo_id;
		$this->fecha_nac=$fecha_nac;		
		$this->pnombre=$pnombre;
		$this->snombre=$snombre;
		$this->papellido=$papellido;
		$this->sapellido=$sapellido;
		$this->etnia=$etnia;
		$this->edad_gestacional=$edad_gestacional;
		$this->fecha_atencion=$fecha_atencion;
		$this->finalidad_cons=$finalidad_cons;
		$this->codigo_cups=$codigo_cups;

		$this->fecha_acido_folico=$fecha_acido_folico;
		$this->fecha_sulfato=$fecha_sulfato;
		$this->fecha_carbonato=$fecha_carbonato;
		$this->fecha_antigeno=$fecha_antigeno;
		$this->resultado_antigeno=$resultado_antigeno;
		
		$this->fecha_sero=$fecha_sero;
		$this->resultado_sero=$resultado_sero;
		$this->fecha_asesoria_eli=$fecha_asesoria_eli;
		$this->fecha_toma_eli=$fecha_toma_eli;
		$this->resultado_eli=$resultado_eli;		
		$this->fecha_toma_hemo = $fecha_toma_hemo;
		$this->resultado_hemo = $resultado_hemo;
		$this->fecha_cons_lact=$fecha_lactancia;		

		return $this;

	}

}

?>
