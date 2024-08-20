<?php 
class Person{
	private $name;
	private $age;

	public function __construct($name,$age){
		$this->name = $name;
		$this->age =$age;
	}
	public function __toString(){
		return "Name :".$this->name."</br>"."Age :".$this->age ."</br>";
	}
}

$person =new Person("Mamun",18);
echo $person;

?>