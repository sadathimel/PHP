<?php include 'header.php';?>



<?php 


class Person{
    public $name ;
    public $age;

    public function personName(){
        echo "Person Name is:".$this->name;
    }

    public function personAge($a){
        echo "Person age is:".$this->age = $a;
    }

}

$obj = new Person;
echo $obj -> name = 'ariful islam'.'<br>';
$obj -> personName();
$obj -> personAge("18");







?>






























<?php include 'footer.php'; ?>