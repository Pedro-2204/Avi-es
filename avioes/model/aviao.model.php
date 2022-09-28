<?php

class Aviao{
	private $modelo;
	private $prefixo;
	private $marca;
	private $classificacao;
	
	public function __set($atributo, $valor){

		$this->$atributo =$valor;		
	}
	
	public function __get($atributo){
		
		return $this->$atributo;
	}
	
	
}

#$med = new Aviao();
#$med->__set('nome', 'Manoel');
#echo $med->__get('nome');
