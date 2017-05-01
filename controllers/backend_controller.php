<?php
class backend_controller extends main_controller {

	public function __construct() {
		if (!isset($_SESSION['username'])) {
			header( "Location: ".html_helpers::url(array('ctl'=>'login','act'=>'login')));
		}
		parent::__construct();
	}
}
?>