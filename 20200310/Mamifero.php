<?php
	include_once "Animal.php";
	class Mamifero extends Animal{
		
		public $velocidade_maxima;
		
		public function __construct($peso, $comprimento, $altura, $cor, $especie, $velocidade_maxima){
				parent::__construct($peso, $comprimento, $altura, $cor, $especie);
				$this->velocidade_maxima = $velocidade_maxima;
			}
			
			public function get_velocidade_maxima(){
				return ($this->velocidade_maxima);
			}	
		}
?>	
	
