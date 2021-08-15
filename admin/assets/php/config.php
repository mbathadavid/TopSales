<?php 
Class Database {
	private $dsn = "mysql:host=localhost:3308;dbname=ecommerce";
	private $dbuser = "root";
	private $dbpass = "";

	public $conn;

	public function __construct() {
		try{
			$this->conn = new PDO($this->dsn,$this->dbuser,$this->dbpass);
		}catch (PDOException $e){
			echo 'Error : '.$e->getMessage();
		}
		return $this->conn;
	}

	//check input
   public function test_input($data) {
   	$data = trim($data);
   	$data = stripcslashes($data);
   	$data = htmlspecialchars($data);
   	return $data;
   }

   //Error Message alert
   public function showMessage($type, $message) {
   	return '<div class="alert alert-'.$type.' alert-dismissible w3-green w3-animate-zoom">
   	<button type="button" class="close" data-dismiss="alert">&times</button>
   	<strong class="text-center">'.$message.'</strong>
   	</div>';
   }
}


?>