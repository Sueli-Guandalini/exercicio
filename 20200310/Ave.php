<?php
	include_once "Animal.php";
	
	class Ave extends Animal{
		public $altura_maxima;
		
		public function __construct($peso, $comprimento, $altura, $cor, $especie, $altura_maxima){
			parent::__construct($peso, $comprimento, $altura, $cor, $especie);
			$this->altura_maxima = $altura_maxima;
		}
		
		public function get_altura_maxima(){
			return ($this->altura_maxima);
		}
	}
?>