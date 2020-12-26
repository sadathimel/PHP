<?php include 'header.php';?>



<?php 


class UserData{
	public $user;
	public $userid;
	const NAME = "Abdullah Noman";
	public static $age = 30;

	public function __construct($userName,$userId){
		$this->user = $userName;
		$this->userid =$userId;

		echo "UserName is : {$this->user} and userId : {$this->userid}"; 

	}

	public static function display(){
		echo "Full Name is:".UserDAta::NAME."<br/>";
		echo "Age is :".self::$age;
	}

	public function __destruct(){

	}
}
$user = "sadat";
$id = 28;
$ur = new UserDAta($user,$id);

UserDAta::display();




?>






























<?php include 'footer.php'; ?>