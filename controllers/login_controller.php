<?php
// session_start();
class login_controller extends main_controller
{
	public function index() 
	{
		$this->display();
	} 

	public function login(){
		global $user, $pass;
		$result ='';
		$login = new login_model();
		$result = $login->check($user,md5($pass));

		if (mysqli_num_rows($result) > 0) {
				$row = mysqli_fetch_assoc($result);
	    		$_SESSION["user"] = $row["username"];
	 			header( "Location: ".html_helpers::url(array('ctl'=>'menu')));
		} else {
		    header( "Location: ".html_helpers::url(array('ctl'=>'login')));
		}

	}

	public function signout(){
		unset($_SESSION["user"]);
		header( "Location: ".html_helpers::url(array('ctl'=>'home')));

	}

	public function register(){
		global $user, $pass, $email;
		$register = new login_model();
		$ok = $register->regist($user,md5($pass), $email);
		if ($ok==1) {
			header( "Location: ".html_helpers::url(array('ctl'=>'login')));
		}
		header( "Location: ".html_helpers::url(array('ctl'=>'login')));
	}
}
?>
