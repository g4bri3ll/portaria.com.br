<?php

class Departamento{
	
	private $id;
	private $nome;
	private $ramais;
	private $supervisor;
	private $idVisitantes;
	
	//Atribuir o set a todos os atributos
	public function __set($atrib, $value){
		$this->$atrib = $value;
	}
	
	//Atribuir o get a todos os atributos
	public function __get($atrib){
		return $this->$atrib;
	}
	
}