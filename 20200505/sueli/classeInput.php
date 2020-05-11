<?php

class Input{
	public $type;
	public $value;
	
	public function __construct($parametros){
		$this->type = $parametros["type"];
		$this->value = $parametros["value"];
	}
}
?>