<?php

include_once './Mapping/mapping.php';

class ModelBase{
	
    protected $mapping;
	protected $tabla;
    protected $id;

	public function __construct()
	{
		$this->mapping = new mapping();	
	}

////////////////////////////////////////////////////////insertar////////////////////////////////////////////////////////

	function insertar(){
		$this->mapping->insertar($this->tabla, $this->arrayDatoValor);
	}

///////////////////////////////////////////////////////editar////////////////////////////////////////////////////////

	function editar(){
		$valoresCondition = array();
		foreach ($this->arrayDatoValor as $key => $value) { 
			foreach($this->id as $elementoId){
				if($key == $elementoId){
					array_push($valoresCondition, $value);
				}
			}
		} 

		foreach ($this->id as $value) { 
			foreach($this->arrayDatoValor as $dato => $valor){
				if($value == $dato){
					unset($this->arrayDatoValor[$value]);
				}
			}
		}

		$this->mapping->editar($this->tabla, $this->arrayDatoValor, $this->id, $valoresCondition);
	}

///////////////////////////////////////////////////////borrar/////////////////////////////////////////////////////////

	function borrar(){
		$this->mapping->borrar($this->tabla, $this->arrayDatoValor);
	}

//////////////////////////////////////////////////////buscar///////////////////////////////////////////////////////

	function buscar(){
		return $this->mapping->buscar($this->tabla, $this->arrayDatoValor, $this->foraneas, $this->orden, $this->tipoOrden);
	}

///////////////////////////////////////////////Funciones de apoyo/////////////////////////////////////////////////

	function getById($valoresQuery){
		return $this->mapping->getById($this->tabla, $this->id, $valoresQuery);
	}

	function seek_multiple($datosQuery,$valoresQuery){
		return $this->mapping->seek_multiple($this->tabla, $datosQuery, $valoresQuery);
	}

	function seek($datosQuery,$valoresQuery){
		return $this->mapping->seek($this->tabla, $datosQuery, $valoresQuery);
	}
	
	function max($datosQuery){
		return $this->mapping->max($this->tabla, $datosQuery);
	}

	function min($datosQuery){
		return $this->mapping->min($this->tabla, $datosQuery);
	}

}
?>