<?php
	include_once "Animal.php";
	
	class Peixe extends Animal{
		public $temperatura_media;
		
		public function __construct($peso, $comprimento, $altura, $cor, $especie, $temperatua_media){
			parent::__construct($peso, $comprimento, $altura, $cor, $especie);
			$this->temperatua_media = $temperatua_media;
		}
		
		public function get_temperatua_media(){
			return ($this->temperatua_media);
		}
	}
?>