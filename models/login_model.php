<?php 
class login_model extends main_model
{
	protected $table = 'users';
	public function __construct() {
		parent::__construct();
	}
	public function check($user,$pass){
		$conditions = '';
		$conditions = " WHERE username ='".$user."' AND password ='".$pass."'";  
		$query = "SELECT * FROM " .$this->table.$conditions;	
		$result = mysqli_query($this->con,$query);
		return $result;
	}
	public function regist($user, $pass, $email){
		$conditions = '';
		$conditions = " (NULL, '".$user."', '".$pass."', '".$email."')" ;  
		$query = "INSERT INTO " .$this->table." (`id`, `username`, `password`, `email`) VALUES".$conditions;
		 
		if (mysqli_query($this->con,$query)) {
		    return 1;
		}
		else{
			return 0;
		}

	}
}

 ?>