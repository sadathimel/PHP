<?php include 'header.php';?>



<?php 


class UserData{
	public $user;
	public $userid;

	public function __construct($userName,$userId){
		$this->user = $userName;
		$this->userid =$userId;

		echo "UserName is : {$this->user} and userId : {$this->userid}"; 

	}

	public function __destruct(){

	}
}
$user = "sadat";
$id = 28;
$ur = new UserDAta($user,$id);







?>






























<?php include 'footer.php'; ?>