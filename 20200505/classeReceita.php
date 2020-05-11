<?php

class Receita{
	public $tipo;
	public $ingredientes;
	public $preparo;
	public $nome;
	
	public function __construct($vetor_post){
		$this->tipo = $vetor_post["tipo"];
		$this->ingredientes = $vetor_post["ingredientes"];
		$this->preparo = $vetor_post["preparo"];
		$this->nome = $vetor_post["nome"];
	}		
	
}
		
?>