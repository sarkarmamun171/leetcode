<?php 
abstract class Car{
	public $name;
	public function __construct($name){
		$this->name=$name;
	}
}
class Audi extends Car{
	 public function hbhu(){
		return "Choose German quality! I'm an $this->name!";
	}
}


$obj = new Audi("Audi");
echo $obj->hbhu();
?>