<?php 
  require_once 'config.php';

  class Auth extends Database
  {
  	//register a shop
  	public function createShop($username,$email,$owner,$password,$county,$subcounty,$town,$street,$shopname,$category,$open,$closing,$description,$profile)
  	{
  		$sql = "INSERT INTO businesses 
  		(Owner,OwnerEmail,Phonenumber,Shoppassword,County,Sub_County,Town,Street,ShopName,productscategory,Opening,Closing,Description,Profile,DateCreated) VALUES (:Owner,:OwnerEmail,:Phonenumber,:Shoppassword,:County,:Sub_County,:Town,:Street,:ShopName,:productscategory,:Opening,:Closing,:Description,:profile,NOW())";
  		$stmt = $this->conn->prepare($sql);
  		$stmt->execute(['Owner'=>$username, 'OwnerEmail'=>$email, 'Phonenumber'=>$phone, 'Shoppassword'=>$password, 'County'=>$county, 'Sub_County'=>$subcounty, 'Town'=>$town, 'Street'=>$street, 'ShopName'=>$shopname, 'productscategory'=>$category, 'Opening'=>$open, 'Closing'=>$closing, 'Description'=>$description,'profile'=>$profile]);
      return true;
  	}
    //register page1 account Details.
     public function createaccountpage1($username,$email,$password,$verify_code)
    {
      $sql = "INSERT INTO businesses 
      (Owner,OwnerEmail,Shoppassword,DateCreated,verification_code) VALUES (:Owner,:OwnerEmail,:Shoppassword,NOW(),:verify_code)";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute(['Owner'=>$username, 'OwnerEmail'=>$email,'Shoppassword'=>$password,'verify_code'=>$verify_code]);
      return true;
    }
    //check if a shop exists

    public function shop_exist($shopname) {
     $sql = "SELECT OwnerEmail FROM businesses WHERE OwnerEmail = :shopname";
     $stmt = $this->conn->prepare($sql);
     $stmt->execute(['shopname'=>$shopname]);
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      return $result;
    }

    //Register a subscriber email
    public function subscribe($email){
      $sql = "INSERT INTO email_subscribers(email) VALUES (:email)";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute(['email'=>$email]);
      return true;
    }
    public function login($shopname) {
      $sql = "SELECT OwnerEmail,Shoppassword FROM businesses WHERE OwnerEmail = :shopname AND Active !=0";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute(['shopname'=>$shopname]);
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      return $row;
    }
    //current user in session
    public function currentshop($email){
      $sql = "SELECT * FROM businesses WHERE OwnerEmail = :email AND Active !=0";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute(['email'=>$email]);
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      return $row;
    }
    
    //verify email
    public function verifyemail($email,$verificationcode){
      $sql = "UPDATE businesses SET verified=1 WHERE OwnerEmail=:email AND verification_code=:verificationcode";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute(['email'=>$email,'verificationcode'=>$verificationcode]);
      return true;
    }

    //shop details function
    public function shopdetails(){
      $sql = "SELECT * FROM businesses";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $result;
    }
    //product upload function
    public function uploadlaptop($productowner,$category,$type,$brand,$productname,$model,$ram,$storagetype,$hdd,$battery,$fcamera,$rcamera,$screensize,$os,$processor,$tvdisplaytype,$mxps,$outputcolor,$printingspeed,$typeofaudio,$delivery,$deliveryinformation,$status,$price,$description,$picture){
      $sql = "INSERT INTO laptops
      (owner,category,TYPE,brand,NAME,model,ram,storagetype,hdd,battery,fcamera,rcamera,ssize,os,processor,tvdisplaytype,maxmumpsize,outputcolor,pspeed,audiotype,delivery,Deliveryinformation,status,price,DESCRIPTION,dateuploaded,image) VALUES (:productowner,:category,:type,:brand,:productname,:model,:ram,:storagetype,:hdd,:battery,:fcamera,:rcamera,:screensize,:os,:processor,:tvdisplaytype,:maxmumpsize,:outputcolor,:pspeed,:typeofaudio,:delivery,:deliveryinformation,:status,:price,:description,NOW(),:picture)";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute(['productowner'=>$productowner,'category'=>$category,'type'=>$type,'brand'=>$brand, 'productname'=>$productname, 'model'=>$model, 'ram'=>$ram,'storagetype'=>$storagetype,'hdd'=>$hdd,'battery'=>$battery,'fcamera'=>$fcamera,'rcamera'=>$rcamera,'screensize'=>$screensize,'os'=>$os,'processor'=>$processor,'tvdisplaytype'=>$tvdisplaytype,'maxmumpsize'=>$mxps,'outputcolor'=>$outputcolor,'pspeed'=>$printingspeed,'typeofaudio'=>$typeofaudio,'delivery'=>$delivery,'deliveryinformation'=>$deliveryinformation,'status'=>$status,'price'=>$price,'description'=>$description,'picture'=>$picture]);
      return true;
    }
//upload vehicle
   public function uploadvehicle($owner,$category,$vehicletype,$type2,$make,$model,$yearofmanufacture,$hosepower,$seats,$fuel,$wheels,$difflock,$colour,$driveterrain,$transmission,$mileage,$status,$accessory,$corigin,$price,$negotiable,$description,$coverimage){
      $sql = "INSERT INTO vehicles(owner,category,vehicletype,type2,make,model,YearofManufacture,hosepower,seats,Fuel,wheelsnumber,difflock,colour,Drivetrain,transmission,mileage,status,accessory,Origin,Price,Negotiable,Description,coverimage,Dateuploaded) VALUES (:owner,:category,:vehicletype,:type2,:make,:model,:yearofmanufacture,:hosepower,:seats,:fuel,:wheels,:difflock,:colour,:driveterrain,:transmission,:mileage,:status,:accessory,:corigin,:price,:negotiable,:description,:coverimage,NOW())";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute(['owner'=>$owner,'category'=>$category,'vehicletype'=>$vehicletype,'type2'=>$type2,'make'=>$make,'model'=>$model,'yearofmanufacture'=>$yearofmanufacture,'hosepower'=>$hosepower,'seats'=>$seats,'fuel'=>$fuel,'wheels'=>$wheels,'difflock'=>$difflock,'colour'=>$colour,'driveterrain'=>$driveterrain,'transmission'=>$transmission,'mileage'=>$mileage,'status'=>$status,'accessory'=>$accessory,'corigin'=>$corigin,'price'=>$price,'negotiable'=>$negotiable,'description'=>$description,'coverimage'=>$coverimage]);
      return true;
    } 
//upload property 
    public function uploadproperty($owner,$category,$propertytype,$title,$county,$subcounty,$specificlocation,$type2,$numberofpeople,$duration,$facilities,$bedrooms,$bathrooms,$status,$furnishing,$size,$rentdays,$price,$pricenegotiable,$description,$coverimage){
      $sql = "INSERT INTO properties(owner,Category,Type1,Title,county,subcounty,specificlocation,Type2,numberofpeople,Duration,Facilities,Bedrooms,Bathrooms,status,Furnishing,size,rentdays,price,Negotiable,Description,dateuploaded,coverimage) VALUES (:owner,:category,:propertytype,:title,:county,:subcounty,:specificlocation,:type2,:numberofpeople,:duration,:facilities,:bedrooms,:bathrooms,:status,:furnishing,:size,:rentdays,:price,:pricenegotiable,:description,NOW(),:coverimage)";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute(['owner'=>$owner,'category'=>$category,'propertytype'=>$propertytype,'title'=>$title,'county'=>$county,'subcounty'=>$subcounty,'specificlocation'=>$specificlocation,'type2'=>$type2,'numberofpeople'=>$numberofpeople,'duration'=>$duration,'facilities'=>$facilities,'bedrooms'=>$bedrooms,'bathrooms'=>$bathrooms,'status'=>$status,'furnishing'=>$furnishing,'size'=>$size,'rentdays'=>$rentdays,'price'=>$price,'pricenegotiable'=>$pricenegotiable,'description'=>$description,'coverimage'=>$coverimage]);
      return true;
    }
 //upload machine
  public function uploadmachine($owner,$category,$machinetype,$title,$name,$type2,$brand,$model,$hirepurchase,$status,$price,$negotiable,$description,$image){
   $sql = "INSERT INTO machines(owner,category,Type1,title,name,type2,Brand,Model,hirepurchase,status,price,negotiable,description,Dateuploaded,image) VALUES (:owner,:category,:machinetype,:title,:name,:type2,:brand,:model,:hirepurchase,:status,:price,:negotiable,:description,NOW(),:image)";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute(['owner'=>$owner,'category'=>$category,'machinetype'=>$machinetype,'title'=>$title,'name'=>$name,'type2'=>$type2,'brand'=>$brand,'model'=>$model,'hirepurchase'=>$hirepurchase,'status'=>$status,'price'=>$price,'negotiable'=>$negotiable,'description'=>$description,'image'=>$image]);
      return true; 
  }
 //upload fashion
   public function uploadfashion($owner,$category,$type,$type2,$brand,$gender,$colour,$size,$status,$price,$negotiable,$description,$image){
   $sql = "INSERT INTO fashions(owner,category,type,type2,brand,gender,colour,size,status,price,negotiable,description,Dateuploaded,image) VALUES (:owner,:category,:type,:type2,:brand,:gender,:colour,:size,:status,:price,:negotiable,:description,NOW(),:image)";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute(['owner'=>$owner,'category'=>$category,'type'=>$type,'type2'=>$type2,'brand'=>$brand,'gender'=>$gender,'colour'=>$colour,'size'=>$size,'status'=>$status,'price'=>$price,'negotiable'=>$negotiable,'description'=>$description,'image'=>$image]);
      return true; 
  }
  //buildingupload
   public function uploadbuilding($owner,$category,$title,$materialtype,$measurementunit,$brand,$status,$delivery,$deliveryinformation,$price,$negotiable,$description,$image){
   $sql = "INSERT INTO building(owner,category,title,materialtype,measurementunit,brand,status,delivery,Deliveryinformation,price,pricenegotiable,Description,Dateuploaded,image) VALUES (:owner,:category,:title,:materialtype,:measurementunit,:brand,:status,:delivery,:deliveryinformation,:price,:negotiable,:description,NOW(),:image)";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute(['owner'=>$owner,'category'=>$category,'title'=>$title,'materialtype'=>$materialtype,'measurementunit'=>$measurementunit,'brand'=>$brand,'status'=>$status,'delivery'=>$delivery,'deliveryinformation'=>$deliveryinformation,'price'=>$price,'negotiable'=>$negotiable,'description'=>$description,'image'=>$image]);
      return true; 
  }
 //upload household item
 public function uploadhousehold($owner,$category,$type1,$name,$type,$length,$width,$height,$material,$brand,$model,$status,$delivery,$deliveryinformation,$price,$negotiable,$description,$image){
   $sql = "INSERT INTO household(owner,category,type1,name,type,length,width,height,material,brand,model,status,delivery,deliveryinformation,price,negotiable,description,Dateuploaded,image) VALUES (:owner,:category,:type1,:name,:type,:length,:width,:height,:material,:brand,:model,:status,:delivery,:deliveryinformation,:price,:negotiable,:description,NOW(),:image)";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute(['owner'=>$owner,'category'=>$category,'type1'=>$type1,'name'=>$name,'type'=>$type,'length'=>$length,'width'=>$width,'height'=>$height,'material'=>$material,'brand'=>$brand,'model'=>$model,'status'=>$status,'delivery'=>$delivery,'deliveryinformation'=>$deliveryinformation,'price'=>$price,'negotiable'=>$negotiable,'description'=>$description,'image'=>$image]);
      return true; 
  }
//upload energyproduct
public function uploadenergy($owner,$category,$type,$title,$brand,$model,$materialused,$voltage,$weight,$capacity,$maximumpwv,$maximumpwc,$gasweight,$fueltype,$portability,$fueltankcapacity,$fuelconsumption,$primepower,$standbypower,$outputvoltage,$outputfrequency,$jikotype,$delivery,$deliveryinformation,$status,$price,$negotiable,$description,$image){
   $sql = "INSERT INTO energy(owner,category,type,title,brand,model,materialused,voltage,weight,capacity,maximumpwv,maximumpwc,gasweight,fueltype,portability,fueltankcapacity,fuelconsumption,primepower,standbypower,outputvoltage,outputfrequency,jikotype,delivery,deliveryinformation,status,price,pricenegotiable,description,Dateuploaded,image) VALUES (:owner,:category,:type,:title,:brand,:model,:materialused,:voltage,:weight,:capacity,:maximumpwv,:maximumpwc,:gasweight,:fueltype,:portability,:fueltankcapacity,:fuelconsumption,:primepower,:standbypower,:outputvoltage,:outputfrequency,:jikotype,:delivery,:deliveryinformation,:status,:price,:negotiable,:description,NOW(),:image)";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute(['owner'=>$owner,'category'=>$category,'type'=>$type,'title'=>$title,'brand'=>$brand,'model'=>$model,'materialused'=>$materialused,'voltage'=>$voltage,'weight'=>$weight,'capacity'=>$capacity,'maximumpwv'=>$maximumpwv,'maximumpwc'=>$maximumpwc,'gasweight'=>$gasweight,'fueltype'=>$fueltype,'portability'=>$portability,'fueltankcapacity'=>$fueltankcapacity,'fuelconsumption'=>$fuelconsumption,'primepower'=>$primepower,'standbypower'=>$standbypower,'outputvoltage'=>$outputvoltage,'outputfrequency'=>$outputfrequency,'jikotype'=>$jikotype,'delivery'=>$delivery,'deliveryinformation'=>$deliveryinformation,'status'=>$status,'price'=>$price,'negotiable'=>$negotiable,'description'=>$description,'image'=>$image]);
      return true; 
  } 
  //upload agriculture
  public function uploadagriculture($owner,$category,$type,$title,$type2,$brand,$model,$status,$manufacturer,$name,$purpose,$breed,$propangation,$delivery,$deliveryinformation,$price,$negotiable,$description,$image){
   $sql = "INSERT INTO agriculture(owner,category,type,title,type2,brand,model,status,manufacturer,name,purpose,breed,propangation,delivery,deliveryinformation,price,negotiable,description,Dateuploaded,image) VALUES (:owner,:category,:type,:title,:type2,:brand,:model,:status,:manufacturer,:name,:purpose,:breed,:propangation,:delivery,:deliveryinformation,:price,:negotiable,:description,NOW(),:image)";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute(['owner'=>$owner,'category'=>$category,'type'=>$type,'title'=>$title,'type2'=>$type2,'brand'=>$brand,'model'=>$model,'status'=>$status,'manufacturer'=>$manufacturer,'name'=>$name,'purpose'=>$purpose,'breed'=>$breed,'propangation'=>$propangation,'delivery'=>$delivery,'deliveryinformation'=>$deliveryinformation,'price'=>$price,'negotiable'=>$negotiable,'description'=>$description,'image'=>$image]);
      return true; 
  } 
//upload laptop
 public function uploadproduct($productowner,$productname,$productscategory,$brand,$Price,$Status,$proddescription,$picture){
      $sql = "INSERT INTO adds
      (productowner,productname,productscategory,brand,Price,Status,proddescription,DateUploaded,ProductImages,Add_type) VALUES (:productowner,:productname,:productscategory,:brand,:Price,:Status,:proddescription,NOW(),:picture,'free')";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute(['productowner'=>$productowner,'productname'=>$productname, 'productscategory'=>$productscategory, 'brand'=>$brand,'Price'=>$Price,'Status'=>$Status,'proddescription'=>$proddescription,'picture'=>$picture]);
      return true;
    }


    //file upload
    public function uploadImages($images) {
      $sql = "INSERT INTO adds (Prodduct_Images) VALUES (:Prodduct_Images)";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute(['Prodduct_Images'=>$images]);
      return true;
    }
    //Select products
    public function getelectronicproducts($cshop){
      $sql = "SELECT * FROM laptops WHERE owner = :cshop ORDER BY PSN DESC LIMIT 1";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute(['cshop'=>$cshop]);
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      return $row;
  	}
     public function getvehicleproducts($cshop){
      $sql = "SELECT * FROM vehicles WHERE owner = :cshop ORDER BY PSN DESC LIMIT 1";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute(['cshop'=>$cshop]);
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      return $row;
    }
    public function getpropertiess($cshop){
      $sql = "SELECT * FROM properties WHERE Owner = :cshop ORDER BY PSN DESC LIMIT 1";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute(['cshop'=>$cshop]);
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      return $row;
    }
    public function getmachines($cshop){
      $sql = "SELECT * FROM machines WHERE owner = :cshop ORDER BY PSN DESC LIMIT 1";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute(['cshop'=>$cshop]);
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      return $row;
    }
    public function getfashions($cshop){
      $sql = "SELECT * FROM fashions WHERE owner = :cshop ORDER BY PSN DESC LIMIT 1";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute(['cshop'=>$cshop]);
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      return $row;
    }
    public function getbuildings($cshop){
      $sql = "SELECT * FROM building WHERE owner = :cshop ORDER BY PSN DESC LIMIT 1";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute(['cshop'=>$cshop]);
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      return $row;
    }
      public function gethouseholds($cshop){
      $sql = "SELECT * FROM household WHERE owner = :cshop ORDER BY PSN DESC LIMIT 1";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute(['cshop'=>$cshop]);
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      return $row;
    }
    public function getlastenergyproduct($cshop){
      $sql = "SELECT * FROM energy WHERE owner = :cshop ORDER BY PSN DESC LIMIT 1";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute(['cshop'=>$cshop]);
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      return $row;
    }
     public function getlastagricultureproduct($cshop){
      $sql = "SELECT * FROM agriculture WHERE owner = :cshop ORDER BY PSN DESC LIMIT 1";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute(['cshop'=>$cshop]);
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      return $row;
    }
        public function getproductname($productowner,$sn){
      #$sql = "SELECT businessproducts.productowner FROM businessproducts INNER JOIN businesses ON businesses.SN=businessproducts.productowner WHERE productowner = :productowner";
      $sql = "SELECT * FROM adds WHERE productowner = :productowner AND SN = :sn ORDER BY SN DESC LIMIT 1";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute(['productowner'=>$productowner,'sn'=>$sn]);
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      return $row;
    }
    //individual shop products
    public function getelectronicproductbyshop($productowner){
      //$data = array();
      $sql = "SELECT * FROM laptops WHERE owner = :productowner AND Active = 1 AND approved != 0 ORDER BY PSN DESC";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute(['productowner'=>$productowner]);
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $result;
      }
      //totralproducts for a individual shop
      public function totalshopproducts($productowner){
       $sql = "SELECT * FROM adds WHERE productowner = :productowner";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute(['productowner'=>$productowner]);
      $t_products = $stmt->rowCount();
      return $t_products; 
      }
      //select electronics
      public function electronics(){
        $data = array();
      $sql = "SELECT * FROM adds WHERE productscategory = 'electronics' ORDER BY DateUploaded DESC LIMIT 10";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
      foreach ($result as $row) {
        $data[] = $row;
      }
      return $data;
      }
      //select product by id
      public function getproductbyId($id){
        $sql = "SELECT * FROM laptops WHERE PSN = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id'=>$id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
      }
      //update product
      public function updateproduct($sn,$productowner,$productname,$productscategory,$brand,$Price,$Status,$proddescription,$picture){
        $sql = "UPDATE laptops SET PSN=:sn, productowner=:productowner, productname=:productname, productscategory=:productscategory, brand=:brand, Price=:Price, Status=:Status, proddescription=:proddescription, ProductImages=:picture WHERE PSN=$sn";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['sn'=>$sn,'productowner'=>$productowner,'productname'=>$productname, 'productscategory'=>$productscategory, 'brand'=>$brand,'Price'=>$Price,'Status'=>$Status,'proddescription'=>$proddescription,'picture'=>$picture]);
        return true;
      }
      //upload shop Business Details
        public function businessdetails($phone,$county,$sub_county,$town,$shopname,$opening,$closing,$description,$profile,$sn){
          $sql = "INSERT INTO businesses (Phonenumber,County,Sub_County,Town,ShopName,Opening,Closing,Description,Profile) VALUES (:phone,:county,:sub_county,:town,:shopname,:opening,:closing,:description,:profile) WHERE SSN=$sn";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['phone'=>$phone,'county'=>$county,'sub_county'=>$sub_county,'town'=>$town,'shopname'=>$shopname,'opening'=>$opening,'closing'=>$closing,'description'=>$description,'profile'=>$profile]);
        return true;
      }
      //update shop
      public function updateshop($username,$email,$phone,$county,$sub_county,$town,$shopname,$category,$open,$closing,$description,$profile,$accountype,$sn){
        $sql = "UPDATE businesses SET Owner=:username, OwnerEmail=:email, Phonenumber=:phone,County=:county, Sub_County=:sub_county, Town=:town, ShopName=:shopname, category=:category, Opening=:open, Closing=:closing, Description=:description, Profile=:profile,accounttype=:accountype WHERE SSN=$sn";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['username'=>$username,'email'=>$email,'phone'=>$phone,'county'=>$county,'sub_county'=>$sub_county,'town'=>$town,'shopname'=>$shopname,'category'=>$category,'open'=>$open,'closing'=>$closing,'description'=>$description,'profile'=>$profile,'accountype'=>$accountype]);
        return true;
      }
      //products count per category for each account
      public function productcategorypercentage($tablename,$ssn) {
        $sql = "SELECT * FROM $tablename WHERE owner=:ssn";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['ssn'=>$ssn]);
        $count = $stmt->rowCount();
        return $count;
      }
      //approved products                                
      //delete product
      public function delete($tablename,$id){
        $sql = "DELETE FROM $tablename WHERE PSN=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id'=>$id]);
        return true;
      }
      //select an electronic product by account
      public function viewindividualproduct($tablename,$id,$sid){
        $sql = "SELECT * FROM $tablename WHERE PSN=:id AND productowner=:sid";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id'=>$id,'sid'=>$sid]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
      }
      //send feedback to the database
      public function send_message($sid,$sub,$message){
        $sql = "INSERT INTO feedback(sid,subject,feedback) VALUES (:sid,:sub,:message)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['sid'=>$sid,'sub'=>$sub,'message'=>$message]);
        return true;
      }
      //insert notification
      public function notification($sid,$type,$message){
        $sql = "INSERT INTO notifications(sid,type,message) VALUES (:sid,:type,:message)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['sid'=>$sid,'type'=>$type,'message'=>$message]);
        return true;
      }
      //Shop Create Nitification
      public function shopcreatenotification($type,$message){
        $sql = "INSERT INTO notifications(type,message) VALUES (:type,:message)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['type'=>$type,'message'=>$message]);
        return true;
      }
      //fetch notiications
      public function fetchnitifications($sid){
        $sql = "SELECT * FROM notifications WHERE sid = :sid AND type = 'shop' ORDER BY created_at DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['sid'=>$sid]);

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
      }

      //remove notifications
      public function removeNotifications($id){
        $sql = "DELETE FROM notifications WHERE id = :id AND type = 'shop'";
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

     //delete Image
    public function deleteImage($id){
      $sql = "DELETE FROM add_images WHERE id = :id";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute(['id'=>$id]);
      return true;
    }
    //fetch all alectronics
     public function fetchallelectronics(){
        //$sql = "SELECT * FROM  laptops  WHERE type = :type LIMIT 100";
        $sql = "SELECT laptops.PSN,laptops.brand,laptops.model,laptops.ram,laptops.hdd,laptops.battery,laptops.fcamera,laptops.TYPE,laptops.rcamera,laptops.ssize,laptops.os,laptops.processor,laptops.status,laptops.price,laptops.DESCRIPTION,laptops.dateuploaded,laptops.NAME,laptops.maxmumpsize,laptops.outputcolor,laptops.pspeed,laptops.audiotype,laptops.image,businesses.Owner,businesses.OwnerEmail,businesses.Phonenumber,businesses.website,businesses.SSN,businesses.County,businesses.Sub_County,businesses.Town,businesses.DateCreated,businesses.Description,businesses.ShopName,businesses.Profile,businesses.verified FROM laptops INNER JOIN businesses ON businesses.SSN = laptops.owner ORDER BY laptops.DateUploaded WHERE laptops.approved !=0 DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
      }

    //sort electronics by type
     public function fetchelectronics($type){
        //$sql = "SELECT * FROM  laptops  WHERE type = :type LIMIT 100";
        $sql = "SELECT laptops.PSN,laptops.NAME,laptops.price,laptops.status,laptops.image,businesses.ShopName,businesses.Profile,businesses.verified FROM laptops INNER JOIN businesses ON businesses.SSN = laptops.owner WHERE laptops.TYPE = :type AND approved !=0 LIMIT 100";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['type'=>$type]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
      }

      //fetch specific electronic component
        public function fetchoneelectronics($type,$sn){
        //$sql = "SELECT * FROM  laptops  WHERE type = :type LIMIT 100";
        $sql = "SELECT laptops.PSN,laptops.brand,laptops.model,laptops.ram,laptops.hdd,laptops.battery,laptops.fcamera,laptops.rcamera,laptops.ssize,laptops.os,laptops.processor,laptops.status,laptops.price,laptops.description,laptops.dateuploaded,laptops.NAME,laptops.maxmumpsize,laptops.outputcolor,laptops.pspeed,laptops.audiotype,laptops.image,businesses.Owner,businesses.OwnerEmail,businesses.Phonenumber,businesses.website,businesses.SSN,businesses.County,businesses.Town,businesses.DateCreated,businesses.Description,businesses.ShopName,businesses.Profile,businesses.verified FROM laptops INNER JOIN businesses ON businesses.SSN = laptops.owner WHERE laptops.TYPE = :type AND laptops.PSN = :sn";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['type'=>$type,'sn'=>$sn]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
      }

     //sort by oldest to newest
       public function fetchelectronicsasc(){
        $sql = "SELECT  * FROM  adds WHERE productscategory = 'electronics' ORDER BY DateUploaded ASC LIMIT 20";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
      }
     //sort electonics priceasc
         public function electronicspriceasc(){
        $sql = "SELECT * FROM adds WHERE productscategory = 'electronics' ORDER BY Price ASC LIMIT 20";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
      }
      //sort electronics pricedsec
        public function electronicspridesc(){
        $sql = "SELECT * FROM adds WHERE productscategory = 'electronics' ORDER BY Price DESC LIMIT 20";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
      }
      //fetchfaetured adds
     public function fetchfeaturedadds(){
        $sql = "SELECT * FROM adds WHERE Add_type='premium' ORDER BY DateUploaded DESC LIMIT 20";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
      }

      //pagination
      public function paginate($offset) {
        $sql = "SELECT * FROM adds  WHERE productscategory = 'electronics' LIMIT :offset, 3";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['offset'=>$offset]);

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
      }
      //forgot password
      public function reset_password($token,$email){
        $sql = "UPDATE businesses SET token = :token, token_expire = DATE_ADD(NOW(), INTERVAL 10 MINUTE) WHERE OwnerEmail =:email";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['token'=>$token,'email'=>$email]);
        return true;
      }
      //verify shop

      public function verify_shop($verify_code,$sn){
       $sql = "UPDATE businesses SET verification_code = :verify_code WHERE SN =:sn";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['verify_code'=>$verify_code,'sn'=>$sn]);
        return true; 
      }
//verify now
      public function update_verification($sn){
       $sql = "UPDATE businesses SET verified = 1 WHERE SN =:sn";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['sn'=>$sn]);
        return true; 
      }
//product count per account.
    public function totalCount($tablename,$sn){
    $sql = "SELECT * FROM $tablename WHERE owner = :sn";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute(['sn'=>$sn]);
    $count = $stmt->rowCount();
    return $count;
  }
  //Approved products
   public function approvedproductsCount($tablename,$sn){
    $sql = "SELECT * FROM $tablename WHERE owner = :sn AND approved != 0";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute(['sn'=>$sn]);
    $count = $stmt->rowCount();
    return $count;
  }
  //Unapproved products
   public function unapprovedproductsCount($tablename,$sn){
    $sql = "SELECT * FROM $tablename WHERE owner = :sn AND approved !=1";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute(['sn'=>$sn]);
    $count = $stmt->rowCount();
    return $count;
  }
  //paid up premiums
    public function paidup($tablename,$sn){
    $sql = "SELECT * FROM $tablename WHERE owner = :sn AND paidfor != 1";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute(['sn'=>$sn]);
    $count = $stmt->rowCount();
    return $count;
  }
  //deals
    public function deals($tablename,$sn){
    $sql = "SELECT * FROM $tablename WHERE productowner = :sn AND deals != 0";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute(['sn'=>$sn]);
    $count = $stmt->rowCount();
    return $count;
  }
  //Active products per
  public function activeper($tablename,$sn){
    $sql = "SELECT Active, count(*) AS number FROM $tablename WHERE productowner = :sn GROUP BY Active";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute(['sn'=>$sn]);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
    }
    //reset Email
    public function changeaccountemail($sn,$newemail){
    $sql = "UPDATE businesses SET OwnerEmail = :newemail WHERE SSN = :sn";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute(['sn'=>$sn,'newemail'=>$newemail]);
    return true;
    }
    //check password
    public function checkpassword($sn){
    $sql = "SELECT Shoppassword FROM businesses WHERE SSN = :sn";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute(['sn'=>$sn]);
    $password = $stmt->fetch(PDO::FETCH_ASSOC);
    return $password;
    }
    //reset password auth
    public function reset_password_auth($email,$token){
      $sql = "SELECT SSN FROM businesses WHERE OwnerEmail = :email AND token = :token AND token != '' AND token_expire > NOW() AND Active !=0";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute(['email'=>$email,'token'=>$token]);
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      return $row;
    }
    //update new password
    public function update_new_pass($pass,$email) {
      $sql = "UPDATE businesses SET Shoppassword = :pass,token = '' WHERE OwnerEmail = :email AND Active != 0";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute(['pass'=>$pass,'email'=>$email]);
      return true;
    }
    //insert  verification code
    public function insert_veification_code($email) {
      $sql = "UPDATE businesses SET Shoppassword = :pass,token = '' WHERE OwnerEmail = :email AND Active != 0";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute(['pass'=>$pass,'email'=>$email]);
      return true;
    }
    //verify account
    public function verify_account($email,$verify_code) {
      $sql = "UPDATE businesses SET verification_code = '',verified = 1 WHERE OwnerEmail =:email AND verification_code =:verify_code";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute(['email'=>$email,'verify_code'=>$verify_code]);
      return true;
    }
    //resize images
    public function compressImage($source_image,$compress_image){
      $image_info = getimagesize($source_image);
      if($image_info['mime'] == 'image/jpeg') {
        $source_image=imagecreatefromjpeg($source_image);
        imagejpeg($source_image,$compress_image,50);
      } else if($image_info['mime'] == 'image/png') {
        $source_image=imagecreatefrompng($source_image);
        imagepng($source_image,$compress_image,6);
      }
      return $compress_image;
    }

  }
 
 ?> 