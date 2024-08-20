<?php 
 class Student{
 	public $name;
 	public $age;
 	public $grade;

 	public function displayInfo(){
 		 echo "Name: " . $this->name . "</br>";
        echo "Age: " . $this->age . "</br>";
        echo "Grade: " . $this->grade . "</br>";
 	}
 }

 $student = new Student();
 $student->name ="Mamun";
 $student->age =18;
 $student->grade=3.14;

$student->displayInfo();
?>