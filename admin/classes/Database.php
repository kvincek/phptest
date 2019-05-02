<?php

/**
 * 
 */
class Database
{
	
	private $con;
	public function connect(){
		$this->con = new Mysqli("3.208.161.114", "root", "Vince9061!", "store_db");
		return $this->con;
	}
}

?>