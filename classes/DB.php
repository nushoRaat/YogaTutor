l<?php
 
class DB
{

	public function __construct()
	{
		$this->connection(); 
	}

	private $DB_Host= 'localhost';
	private $DB_Name= 'sd_project';
	private $DB_User= 'root';
	private $DB_Pass= '';

	public  $pdo; 


	private function connection()
	{

		if (!isset($this->pdo)) { 
			try {
				$this->pdo = new PDO('mysql:host='.$this->DB_Host.';dbname='.$this->DB_Name,$this->DB_User,$this->DB_Pass);
  				$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}catch (PDOException $e) {
				echo $e->getMessage();
			} 
		}
 
	}
 
}

?>