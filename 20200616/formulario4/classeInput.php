<?php
require_once "classeEntrada.php";

class Input extends Entrada{
    public $type; //null
    
    /*input type: text, email, number, date, hidden, radio, checkbox, submit, button  

        text: name, placeholder, [value, id, class]
        email: name, placeholder, [value]
        number: name, placeholder, [value, min, max, step, id, class]
        date: name, label, [id, class]
        hidden: name, value, [id, class]
        submit: value, [id, class]
        button: value, [id, class] */


    public function __construct($valores){

        $this->type = $valores["type"];
        // is sey -> Está "setado" ou preenchido, ou existe a variável.
        if(isset($valores["name"])){
            $this->name = $valores["name"];
        }
        if(isset($valores["placeholder"])){
            $this->placeholder = $valores["placeholder"];
        }
        if(isset($valores["value"])){
            $this->value = $valores["value"];
        }
        if(isset($valores["required"])){
            $this->required = $valores["required"];
        }
        if(isset($valores["class"])){
            $this->class = $valores["class"];
        }
        if(isset($valores["label"])){
            $this->label = $valores["label"];
        }
    }  

    public function exibir(){
        if($this->label!= null){
            echo "<label>$this->label</label>: ";
        }

        echo "<input type='$this->type' ";

        if($this->name!=null){
            echo "name='$this->name' ";
        }
        if($this->placeholder!=null){
            echo "placeholder='$this->placeholder' ";
        }
        if($this->value!=null){
            echo "value='$this->value' ";
        }
        if($this->class!=null){
            echo "class='$this->class' ";
        }
        if($this->required!=null){
            echo "required";
        }
        echo "/>";
        echo "<br />";
    }
}
?>