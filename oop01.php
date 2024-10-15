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
	public $weight;
	function __construct($name,$color,$weight){
		$this->name  =$name;
		$this->color =$color;
		$this->weight=$weight;
	}
	public function introduction(){
		echo "This is fruit {$this->name} and color {$this->color} and Weight {$this->weight}";
	}
}

$obj = new Friut('Banana','Yello');
$obj1 = new Strawberry('Banana','Yello',50);
// echo $obj ->message();
 echo $obj->intro();
echo $obj1->introduction();
?>