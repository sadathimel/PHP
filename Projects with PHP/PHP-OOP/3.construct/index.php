<?php include 'header.php';?>



<?php 


class Person {
	public $name;
	public $age;

	public function __construct($nam,$ag){
		$this -> name = $nam;
		$this -> age = $ag;
	}
	public function personDetails(){
		echo "Person name is {$this->name} and person age is {$this->age}";
	}
}

$personclass = new Person("himel",24);
$personclass -> personDetails()





?>






























<?php include 'footer.php'; ?>