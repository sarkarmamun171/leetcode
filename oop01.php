<?php 
class Friut{
	public $name;
	public $color;

	public function __construct($name,$color){
		$this->name  =$name;
		$this->color =$color;
	}

	public function intro(){
		echo "This is fruit {$this->name} and color {$this->color}";
	}
}
class Strawberry extends Friut{
	public function message(){
		echo "Mamun";
	}
}

$obj = new Friut('Banana','Yello');
// echo $obj ->message();
echo $obj->intro();
?>