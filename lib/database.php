<?php
class Database{
	
	public $host   = DB_HOST;
	public $user   = DB_USER;
	public $pass   = DB_PASS;
	public $dbname = DB_NAME;
	
	
	public $link1;
	public $error;
	
	
	public function __construct()
	{
		$this->connecDB();
	}
	
	
	private function connecDB()
	{
		$this->link1 = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
		
		if(!$this->link1){
			$this->error = "Connection Fail".$this->link1->connect_error;
			return false;			
		}
	}
	
	//create or read data
	public function select($query)
	{
		$result = $this->link1->query($query) or die ($this->link1->error.__LINE__);
		
		if($result->num_rows > 0){
			return $result;
		}
		
		else{
			return false;
		}
	}
	
	//check Number of rows
	public function num_rows($query)
	{
		$result = $this->link1->query($query) or die ($this->link1->error.__LINE__);
		
		if($result->num_rows > 0){
			return true;
		}
		
		else{
			return false;
		}
	}

	//insert data
	public function insert($query)
	{
		$insert_row = $this->link1->query($query) or die ($this->link1->error.__LINE__);
		if($insert_row){
			return $insert_row;
		}
		else{
			return false;
		}
	}
	
	//update data
	public function update($query)
	{
		$update_row = $this->link1->query($query) or die ($this->link1->error.__LINE__);
		if($update_row){
			return $update_row;
		}
		else{
			return false;
		}
	}
	
	
	//Delete data
	public function deletedata($query)
	{
		$delete_row = $this->link1->query($query) or die ($this->link1->error.__LINE__);
		if($delete_row){
			return $delete_row;
		}
		else{
			return false;
		}
	}
}


?>