<?php
// main_controller::checkLogin();
class profile_controller extends main_controller
{
	public function index() 
	{
		$menu = new menu_model();
		$records = $menu->getAllRecords();
		
		$this->setProperty('records',$records);
		$this->display();
	} 
}
?>