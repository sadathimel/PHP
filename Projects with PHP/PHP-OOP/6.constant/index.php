<?php include 'header.php';?>



<?php 


class UserData{
	public $user;
	public $userid;
	const NAME = "Abdullah Noman";

	public function __construct($userName,$userId){
		$this->user = $userName;
		$this->userid =$userId;

		echo "UserName is : {$this->user} and userId : {$this->userid}"; 

	}

	public function display(){
		echo "Full Name is:".UserDAta::NAME;
	}

	public function __destruct(){

	}
}
$user = "sadat";
$id = 28;
$ur = new UserDAta($user,$id);

$ur-> display();





?>






























<?php include 'footer.php'; ?>