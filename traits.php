<?php
trait message1{
	public function mgs1(){
		echo "OOP is fun!";
	}
}

trait message2{
	public function mgs2(){
		echo "OOP is fun 2";
	}
}
class Welcome{
	use message1;
}
class Welcome2{
	use message1,message2;
}

$obj = new Welcome();
$obj->mgs1();
echo "<br/>";

$obj2 = new Welcome2();
$obj2->mgs1();
$obj2->mgs2();
?>