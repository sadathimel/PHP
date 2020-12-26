<?php include 'header.php';?>



<?php 

class Person{
	public $name;
	public $age;
	public $id;

	public function __construct($num1,$age){
		$this->name = $num1;
		$this->age = $age;
	}

	public function setid($id){
		$this->id = $id;
	}

	public function __destruct(){
		if(! empty($this->id)){
			echo "saving person";
		}
	}
}

$personOne = new Person("sadat",28);
$personOne -> setid(13);

unset($personOne);






?>






























<?php include 'footer.php'; ?>