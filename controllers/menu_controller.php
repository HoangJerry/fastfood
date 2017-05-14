<?php
// main_controller::checkLogin();
class menu_controller extends main_controller
{
	public function index() 
	{
		$menu = new menu_model();
		$records = $menu->getAllRecords();
		
		$this->setProperty('records',$records);
		$this->display();
	} 

	public function add(){
		if(isset($_POST['btn_submit'])) {
			$name= $_POST['name'];
			$cost= $_POST['cost'];
			$photo =$this->uploadImg($_FILES["photo"]);
			exit();
		} else {
			$this->display();
		}
	}
}
?>
