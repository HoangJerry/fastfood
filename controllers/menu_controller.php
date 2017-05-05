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
}
?>
