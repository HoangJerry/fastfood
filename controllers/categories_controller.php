<?php
// main_controller::checkLogin("categories");
class categories_controller extends backend_controller
{
	//public $components = array('SimpleImage');
	public function index() 
	{
		$categories = new category_model();
		$records = $categories->getAllRecords();
		//include_once "views/".$this->controller."/".$this->action.".php";
		
		$this->setProperty('records',$records);
		$this->display();
	} 

	public function refresh() 
	{
		$categories = new category_model();
		$records = $categories->getAllRecords();
		$this->setProperty('records',$records);
		$this->display();
	} 

	public function add() 
	{
		if(isset($_POST['btn_submit'])) {
			$categoryData = $_POST['data'][$this->controller];
			if(!empty($categoryData['name_category']))  {
				// $categoryData['photo'] = $this->uploadImg($_FILES);
				$category = new category_model();
				if($category->addRecord($categoryData));
					//header( "Location: ".html_helpers::url(array('ctl'=>'categories')));
			}
		}
		$this->display();
	}

	public function edit($id) 
	{
		$category = new category_model();
		$record = $category->getRecord($id);
		$this->setProperty('record',$record);
		if(isset($_POST['btn_submit'])) {
			$categoryData = $_POST['data'][$this->controller];
			if(!empty($categoryData['name_category']))  {
				// if(isset($_FILES) and $_FILES["image"]["name"]) {
				// 	if(file_exists(RootURI."/media/upload/" .$this->controller.'/'.$record['photo']))
				// 		unlink(RootURI."/media/upload/" .$this->controller.'/'.$record['photo']);
				// 	$categoryData['photo'] = $this->uploadImg($_FILES);
				// }
				if($category->editRecord($id, $categoryData));
					//header( "Location: ".html_helpers::url(array('ctl'=>'categories')));
			}
		}
		$this->display();
	}
	
	public function view($id) 
	{
		$category = new category_model();
		$record = $category->getRecord($id);
		$this->setProperty('record',$record);
		$this->display();
	}
	
	public function del($id) 
	{
		$category = new category_model();
		$record = $category->getRecord($id);
		// if(file_exists(RootURI."/media/upload/" .$this->controller.'/'.$record['photo']))
		// 	unlink(RootURI."/media/upload/" .$this->controller.'/'.$record['photo']);	
		$category->delRecord($id);
		exit();
		// if($category->delRecord($id));
			//header( "Location: ".html_helpers::url(array('ctl'=>'categories')));
	}
}
?>
