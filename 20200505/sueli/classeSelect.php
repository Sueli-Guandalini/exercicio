<?php

class Select{
	public $name;
	public $value;
	
	public function __construct($parametros){
		$this->name = $parametros["name"];
		$this->value = $parametros["value"];
	}
}
?>