<?php 
require_once 'config.php';

class Admin extends Database{
	public function admin_login($username,$password){
		$sql = "SELECT username,password FROM admin WHERE username=:username AND password=:password";
		$stmt =  $this->conn->prepare($sql);
		$stmt->execute(['username'=>$username, 'password'=>$password]);
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		return $row;
	}

	//Count total number of Shops
	public function totalCount($tablename){
		$sql = "SELECT * FROM $tablename";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		$count = $stmt->rowCount();
		return $count;
	}


	//Count total number of Shops By Website
	public function totalWebsiteShopCount(){
		$sql = "SELECT * FROM businesses WHERE type = 'website'";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		$count = $stmt->rowCount();
		return $count;
	}


	//Count total number of Shops By Website
	public function totalAdminShopCount(){
		$sql = "SELECT * FROM businesses WHERE type = 'admin'";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		$count = $stmt->rowCount();
		return $count;
	}
	//Count website hits
	public function web_hits(){
		$sql = "SELECT hits FROM visitors";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		$count = $stmt->fetch(PDO::FETCH_ASSOC);
		return $count;
	}
	//Fetch all website registered shops
	public function web_shops($val){
		$sql = "SELECT * FROM businesses WHERE Active != $val ORDER BY DateCreated DESC";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);


		return $result; 
	}
	//Fetch All Feedbacks of the Shops
	public function fetchFeedbacks(){
		$sql = "SELECT feedback.id, feedback.subject, feedback.feedback, feedback.created_at, feedback.sid, businesses.ShopName, businesses.OwnerEmail FROM feedback INNER JOIN businesses ON feedback.sid = businesses.SSN WHERE replied !=1 ORDER BY feedback.created_at DESC";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}

	//fetch products
	public function fetchproducts(){
		$sql = "SELECT laptops.PSN, laptops.NAME, laptops.category, laptops.brand, laptops.price, laptops.status, laptops.DESCRIPTION, laptops.dateuploaded, laptops.image,laptops.approved, businesses.ShopName, businesses.type FROM laptops INNER JOIN businesses ON laptops.owner = businesses.SSN WHERE laptops.Active = 1 AND laptops.approved !=1 ORDER BY laptops.dateuploaded DESC";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	//fetchproducts by category
	public function fetchproductsbycategory($tablename){
		$sql = "SELECT * FROM $tablename WHERE approved !=1";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	//fetch one electronic device
	public function fetchoneproduct($tablename,$sn){
        $sql = "SELECT * FROM $tablename WHERE PSN=:sn";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['sn'=>$sn]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
      }

	public function fetchdeletedproducts(){
		$sql = "SELECT adds.SN, adds.productname, adds.productscategory, adds.brand, adds.Price, adds.Status, adds.proddescription, adds.DateUploaded, adds.ProductImages, businesses.ShopName, businesses.type FROM adds INNER JOIN businesses ON adds.productowner = businesses.SN WHERE adds.Active = 0 ORDER BY adds.DateUploaded DESC";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	//fetch deleted products
	//Reply to User
	public function replyMessage($sid,$message){
		$sql = "INSERT INTO notifications(sid,type,message) VALUES (:sid, 'shop',:message)";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute(['sid'=>$sid,'message'=>$message]);
		return true;
	}
	//Set Feedback Replied
	public function feedReplied($fid){
		$sql = "UPDATE feedback SET replied = 1 WHERE id=:fid";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute(['fid'=>$fid]);
		return true;
	}
	//fetch shops by id
	public function fetchwebshopById($id){
		$sql = "SELECT * FROM businesses WHERE SSN = :id AND Active != 0";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute(['id'=>$id]);

		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		return $result;
	}
	//Delete A user
	public function shopAction($id, $val){
		$sql = "UPDATE businesses SET Active = $val WHERE SN = :id";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute(['id'=>$id]);
		return true;
	}
	//Delete a product id
	public function deleteProduct($id, $val){
		$sql = "UPDATE adds SET Active = $val WHERE SN = :id";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute(['id'=>$id]);
		return true;
	}
	//view product Images
	public function getImages($tablename,$id){
		$sql = "SELECT * FROM $tablename WHERE pid = :id";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute(['id'=>$id]);
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	//approve electronic product
	public function approveproduct($tablename,$id){
		$sql = "UPDATE $tablename SET approved = 1 WHERE PSN = :id";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute(['id'=>$id]);
		return true;
	}
	//email for the person whose product was approved
	public function notifyuserofproductapproval($psn) {
		$sql = "SELECT OwnerEmail FROM businesses WHERE SSN = :psn";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute(['psn'=>$psn]);
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		return $result;
	}
}

 ?>