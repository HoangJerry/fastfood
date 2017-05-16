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
			$name = $_POST['name'];
			$cost = $_POST['cost'];
			$photo =$_FILES["photo"];
			$date = (string)date('YmdHis');
				if (isset($photo))
		        {
		            if ($photo['error'] > 0)
		            {
		               echo "Error no image!";
		            }
		            else{		  
		            	$end=substr($photo['name'],-4);
		            	$end=$date.$end;
		            	echo $photo['tmp_name']." ".$end." ".$photo['name'];
		           
		                move_uploaded_file($photo['tmp_name'], 'media/img/upload/'.$end);
		                $menu = new menu_model();
						$ok = $menu->addNew($name, $cost, $end);
					    if ($ok==1) {
							header( "Location: ".html_helpers::url(array('ctl'=>'menu')));
						}
						echo "Error of upload!";
		            }
		        }
		} else {
			$this->display();
		}
	}

	public function edit($id){
		$menu = new menu_model();
		if(isset($_POST['btn_submit'])) {
			$name = $_POST['name'];
			$cost = $_POST['cost'];
			$photo =$_FILES["photo"];
			$record = $menu->getRecord($id);
			$date = (string)date('YmdHis');
				if (isset($_FILES["photo"]))
		        {
		            if ($photo['error'] > 0)
		            {
		            	$ok = $menu->edit($id, $name, $cost,$record['photo']);
					    if ($ok==1) {
							header( "Location: ".html_helpers::url(array('ctl'=>'menu')));
						}
						echo "Error of upload!";
		            }
		     		  else{		
		            	if (file_exists('media/img/upload/'.$record['photo']))
							unlink('media/img/upload/'.$record['photo']);
		            	$end=substr($photo['name'],-4);
		            	$end=$date.$end;
		                move_uploaded_file($photo['tmp_name'], 'media/img/upload/'.$end);
						$ok = $menu->edit($id, $name, $cost, $end);
					    if ($ok==1) {
							header( "Location: ".html_helpers::url(array('ctl'=>'menu')));
						}
						echo "Error of upload!";
		            }
		        }
		}    
		else {
			$record = $menu->getRecord($id);
			$this->setProperty('record',$record);
			$this->display();
		}
	}

	public function del($id){
		$menu = new menu_model();
		$record = $menu->getRecord($id);
		if (file_exists('media/img/upload/'.$record['photo']))
		{
			unlink('media/img/upload/'.$record['photo']);
		}
		echo $menu->del($id);
	}

	public function search(){
			$value=$_POST['value'];
			$menu = new menu_model();
			if ($value == "") 
			{
				$data = array();
				$obj = array();
				$records = $menu->getAllRecords();
				while($row = mysqli_fetch_array($records))
				{
					$data = array('user'=>$_SESSION["user"],'id'=>$row['id'],'name'=>$row['name'],'cost'=>$row['cost'],'photo'=>$row['photo']);
					array_push($obj,$data);
				}
				echo json_encode($obj);
				// echo json_encode(mysqli_fetch_array($records));
			}
	    	else{
	    		$records = $menu->search($value);
	    	
	    		$data = array();
				$obj = array();
	    		while($row = mysqli_fetch_array($records))
				{
					$data = array('user'=>$_SESSION["user"],'id'=>$row['id'],'name'=>$row['name'],'cost'=>$row['cost'],'photo'=>$row['photo']);
					array_push($obj,$data);
				}
				echo json_encode($obj);
	    	}
	}
}
?>
