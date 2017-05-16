<?php
class Main_Model 
{
	protected $con;
	protected $table;
	public function __construct(){
		$this->con =  mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
		$this->con->set_charset("utf8");
		if(mysqli_connect_error()) {
			echo "Failed to connect to MySQL". mysqli_connect_error();exit();
		}
		if(!$this->table)	$this->setTableName();
	}
	
	protected function setTableName($table=null){
		if($table) {
			$this->table=$table;
		} else {
			$cln = get_class($this);
			$clnf = str_split($cln, strrpos($cln, '_'))[0];
			if (strrpos($clnf,"y")) {
				if ((strrpos($clnf,"y") + 1) == strlen($clnf)) {
					$this->table = str_split($clnf, strrpos($clnf, 'y'))[0].'ies'; 
				} 
			} else {
				$this->table = $clnf.'s';
			}
		}
	}
	public function getTableName() {
		return $this->table;
	}

	public function getAllRecords($fields='*', $options=null) {
		$conditions = '';
		if(isset($options['conditions'])) {
			$conditions .= ' where '.$options['conditions'];
		}
		$query = "SELECT ".$fields." FROM ".$this->table.$conditions;

		$result = mysqli_query($this->con,$query);

		return $result;
	}

	public function getSumRecords($fields='*', $options=null) {
		$conditions = '';
		if(isset($options['conditions'])) {
			$conditions .= ' where '.$options['conditions'];
		}
		$query = "SELECT COUNT(".$fields.") AS value_sum FROM ".$this->table.$conditions;
		// echo $query;
		// exit;
		$result = mysqli_query($this->con,$query);
		$row = mysqli_fetch_assoc($result); 
		$sum = $row['value_sum'];
		return $sum;
	}

	public function getAllRecordsJoin($fields='*', $options=null) {
		if(isset($options)) {
			$query = "SELECT ".$fields." FROM ".$this->table.$options;
		} else {
			$query = "SELECT ".$fields." FROM ".$this->table;
		}
		// echo $query;
		// exit;
		$result = mysqli_query($this->con,$query);
		return $result;
	}

	public function getRecord($id=null, $fields='*', $options=null) {
		$conditions = '';
		if(isset($options['conditions'])) {
			$conditions .= ' and '. $options['conditions'];
		}
		$query = "SELECT $fields FROM $this->table where id=$id".$conditions;
		$result = mysqli_query($this->con,$query);
		if($result) {
			//$record = mysqli_fetch_array($result);
			//$record = mysqli_fetch_row($result);
			$record = mysqli_fetch_assoc($result);
		} else $record=false;
		return $record;
	}

	public function getLastRecord($fields='*', $options=null) {
		$conditions = '';
		if(isset($options['conditions'])) {
			$conditions .= ' and '. $options['conditions'];
		}
		$query = "SELECT $fields FROM $this->table ".$conditions." ORDER BY id DESC LIMIT 1";
		$result = mysqli_query($this->con,$query);
		if($result) {
			//$record = mysqli_fetch_array($result);
			//$record = mysqli_fetch_row($result);
			$record = mysqli_fetch_assoc($result);
		} else $record=false;
		return $record;
	}
	
	public function delRecord($id=null, $conditions=null) {
		if($conditions)	$conditions = ' and '.$conditions;
		$query = "DELETE FROM $this->table WHERE id=$id".$conditions;
		return mysqli_query($this->con,$query);
	}
	
	public function addRecord($datas) {
		$fields = $values = '';
		$i=0;
		foreach (($datas) as $k => $v) {
			if($i) {
				$fields .=',';
				$values .=',';
			}
			$fields .= $k;
			$values .= "'".$v."'";
			$i++;
		}
		$query = "INSERT INTO $this->table($fields) VALUES ($values)";
		// return mysqli_query($this->con,$query);
		if (mysqli_query($this->con,$query) === TRUE) {
			return 1;
		} else {
			return 0;
		}
	}
	
	public function editRecord($id,$datas){
		$setDatas = '';
		$i=0;
		foreach($datas as $k=>$v) {
			if($i) {
				$setDatas .=',';
			}
			$setDatas .= $k."='".$v."'";
			$i++;
		}
        $query = "UPDATE $this->table SET $setDatas WHERE id='$id'";
		return mysqli_query($this->con,$query);
        //$result = mysqli_query($this->con,$query) or die("MySQL error: " . mysqli_error($this->con) . "<hr>\nQuery: $query");
    }

    public function editRecordNoId($fields,$datas){
		$setDatas = '';
		$i=0;
		foreach($datas as $k=>$v) {
			if($i) {
				$setDatas .=',';
			}
			$setDatas .= $k."='".$v."'";
			$i++;
		}
        $query = "UPDATE $this->table SET $setDatas WHERE 1";
        // echo $query;
        // exit();
		return mysqli_query($this->con,$query);
        //$result = mysqli_query($this->con,$query) or die("MySQL error: " . mysqli_error($this->con) . "<hr>\nQuery: $query");
    }

    public function checkUser($username, $password) {
		$query = "SELECT * FROM `users` WHERE (`username` = '".$username."') & (`password` = '".$password."')";
		$result = mysqli_query($this->con,$query);
		if ($result->num_rows > 0) {
			return 1;
		}
		return 0;
	}

    public static function convertToList($mysqliObject) {
    	$arrReturn = [];
    	while($row = mysqli_fetch_array($mysqliObject)) {
    		$arrReturn[$row['id']] = $row['cat_name'];
    	}
    	return $arrReturn;
    }

    
}
