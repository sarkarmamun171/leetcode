<?php 
    public $name;
	public function __construct($name){
		$this->name=$name;
	}
interface Animal{
	public function makeSound();
}
class Cat implements Animal{
	public function makeSound(){
		return "Choose German quality! I'm an $this->name!";
	}
}
$obj = new Cat('Mew');
echo $obj->makeSound();
?>