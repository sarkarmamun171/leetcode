<?php 
abstract class Animal{
	abstract public function eat();
	abstract public function makeSound();
}

class Dog extends Animal{
	public function eat(){
		echo "Dog is Eatting for Meet";
	}
	public function makeSound(){
		echo " Dog sound gaw gaw";
	}
}
class Cat extends Animal{
	public function eat(){
		echo "Cat eatting Fish";
	}
	public function makeSound(){
		echo "Cat sound mew mew ";
	}
}
 
 $dog = new Dog();
 $dog->eat();
  echo "</br>";
 $dog->makeSound();

?>