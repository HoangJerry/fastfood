<?php
class menu_model extends main_model
{
	protected $table = 'menu';
	public function __construct() {
		parent::__construct();
		
	}

	public function addNew($name, $cost, $photo) {
		$conditions = '';
		$conditions = " (NULL, '".$name."', '".$cost."', '".$photo."')" ;  
		$query = "INSERT INTO " .$this->table." (`id`, `name`, `cost`, `photo`) VALUES".$conditions;
		if (mysqli_query($this->con,$query) === TRUE) {
			return 1;
		} else {
			return 0;
		}
	}
	public function edit($id,$name, $cost, $photo=null){
		$value = "id='".$id."', name='".$name."', cost='".$cost."', photo='".$photo."'";
		$condition = " WHERE id='".$id."'";
		$query = "UPDATE " .$this->table." SET ".$value.$conditions;
		return mysqli_query($this->con,$query);
	}

	public function del($id){
		$query = "DELETE FROM " .$this->table." WHERE id='".$id."'";
		return mysqli_query($this->con,$query);
	}

	public function search($name) {
		$conditions = '';
		$conditions = "name LIKE '%".$name."%'";
		$query = "SELECT * FROM ".$this->table." WHERE ".$conditions;
		return mysqli_query($this->con,$query);
	}
}