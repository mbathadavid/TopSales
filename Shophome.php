<?php 
require_once 'php/header.php';
require_once 'php/auth.php';
$count = new Auth();
 ?>

 <section>
 	<div class="container">
    <h6 style="text-align: center;"><span style="color: #008000;text-shadow: 4px 4px 8px  #00cc00;" id="greeting"></span>  <span style="color: #008000;text-shadow: 4px 4px 8px  #00cc00;"><?=$shopowner;?></span></h6>

         <?php if(!$cverified != 0): ?>
       <div class=" alert alert-danger alert-dismissible w3-red w3-animate-zoom" style="font-size :px;"><button type="button" class="close" data-dismiss="alert">&times</button><p style="font-size :15px;" class="text-center">You have not yet verified your Email.Check your Email and verify. Your uploads will not be visible until you verify your account.Check your Email and verify.</p></div>
      <?php else: ?>

       <?php endif; ?>
    </div>
       <?php if(!$account){ ?>
     <div style="width:100%;text-align: center;">  
      <div class="jumbotron">
        <h5 class="text-success">Please Click this Link to Finish Setting Up Your Account.Your Dashboard will appear after setting up your account.</h5>
        <h5 class="text-center"><a href="#" class="btn btn-info" data-toggle="modal" data-target="#shopDetailsmodal">Finish Account Set Up</a></h5>
      </div>
      </div>   
    <!-------Physical Shop Details Modal start------>
            <div class="modal w3-animate-zoom" id="shopDetailsmodal">
         <div class="modal-dialog modal-lg">
           <div class="modal-content">
             <div class="modal-header">
               <h4 class="modal-title">Physical Shop Upload form</h4>
               <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
             <div class="modal-body">
              <form action="#" enctype="multipart/form-data" id="physicalshopform" method="POST">
           
               <div class="row">
              <div class="col-md-4">
                <h6 style="font-size: 15px;font-weight: bold;color: #e6005c;border-bottom: 3px solid #00804d;">Account owner Details</h6>
                <input type="hidden" name="sn" value="<?=$csn; ?>">
                <div class="form-group">
                  <label for="Phone" style="font-size: 15px;font-weight: bold;color: #ff0066;">Full Name</label>
                  <input type="text" name="Owner" class="form-control" value="<?=$cowner; ?>" readonly>
                </div>
                 <div class="form-group">
                  <label for="Email" style="font-size: 15px;font-weight: bold;color: #ff0066;">Email</label>
                  <input type="email" name="OwnerEmail" class="form-control" value="<?=$cemail; ?>"  readonly>
                </div>
                <div class="form-group">
                  <label for="Phone" style="font-size: 15px;font-weight: bold;color: #ff0066;">Phone Number(WhatsApp Number,will be used to link you with clients)</label>
                  <input type="phone" name="Phonenumber" class="form-control" placeholder="eg. 0748269865" autofocus required>
                </div>
              </div>
               <div class="col-md-4">
                <h6 style="font-size: 15px;font-weight: bold;color: #e6005c;border-bottom: 3px solid #00804d;">Location Details (Your current residence)</h6>
                <div class="form-group">
                  <label for="County" style="font-size: 15px;font-weight: bold;color: #ff0066;">County</label>
                    
                  <?php 
                  $counties = array(''=>'Select County', 'Baringo' => 'Baringo','Bomet' => 'Bomet', 'Bungoma' => 'Bungoma', 'Busia' => 'Busia', 'Elgeyo Marakwet' => 'Elgeyo Marakwet', 'Embu' => 'Embu', 'Garissa' => 'Garissa', 'Homa Bay' => 'Homa Bay', 'Isiolo' => 'Isiolo', 'Kajiando' => 'Kajiando', 'Kakamega' => 'Kakamega', 'Kericho' => 'Kericho', 'Kiambu' => 'Kiambu', 'Kilifi' => 'Kilifi', 'Kirinyaga' => 'Kirinyaga', 'Kisii' => 'Kisii', 'Kisumu' => 'Kisumu', 'Kitui' =>'Kitui', 'Kwale' => 'Kwale', 'Laikipia' => 'Laikipia', 'Lamu' => 'Lamu', 'Machakos' => 'Machakos', 'Makueni' => 'Makueni', 'Mandera' => 'Mandera', 'Marsabit' => 'Marsabit', 'Meru' => 'Meru', 'Migori' => 'Migori', 'Mombasa' => 'Mombasa', 'Muranga' => 'Muranga', 'Nairobi' => 'Nairobi', 'Nakuru' => 'Nakuru', 'Nandi' => 'Nandi', 'Narok' => 'Narok', 'Nyamira' => 'Nyamira', 'Nyandarua' => 'Nyandarua', 'Nyeri' => 'Nyeri', 'Samburu' => 'Samburu', 'Siaya' => 'Siaya', 'Taita Taveta' => 'Taita Taveta', 'Tana River' => 'Tana River', 'Tharaka Nithi' => 'Tharaka Nithi', 'Trans Nzoia' => 'Trans Nzoia', 'Turkana' => 'Turkana', 'Uasin Gishu' => 'Uasin Gishu', 'Vihiga' => 'Vihiga', 'Wajir' => 'Wajir', 'West Pokot' => 'West Pokot');
              echo '<select class="form-control countysel" id="sel1" name="County" required>';
              foreach ($counties as $key => $choice) {
                echo '<option value="'.$key.'">'.$choice.'</option>';
              }
              echo '</select>';
                   ?>
                 </div>

                 <div class="form-group">
                  <label for="County" style="font-size: 15px;font-weight: bold;color: #ff0066;">Subcounty</label>
                     <select class="form-control subcounty" id="subcounty" name="subcounty" required>
                      
                    </select>
                </div>

            <div class="form-group">
                    <label for="Shop Name" style="font-size: 15px;font-weight: bold;color: #ff0066;">Town</label>
                  <input type="text" name="Town" class="form-control" required>
                </div>
              </div>
               <div class="col-md-4">
                <h6 style="font-size: 15px;font-weight: bold;color: #e6005c;border-bottom: 3px solid #00804d;">Business Details</h6>
                  <div  class="form-group">
                    <label for="categories" style="font-size: 15px;font-weight: bold;color: #ff0066;">Account type (If you have an established business and you would wish to register and get a business page select "Webshop".Otherwise select "individual")</label>
     <select class="form-control" id="selectshop" name="acounttype" required>
      <option value="">Select Account Category</option>
        <option value="webshop">WEB SHOP</option>
       <option value="individual">Individual</option>
     </select>
   </div>
                   <div class="form-group file">
                  <label for="Email" style="font-size: 15px;font-weight: bold;color: #ff0066;">Profile picture (Optional)</label><br>
                  <input type="file" name="files" id="actualfile" hidden>
                  <label for="actualfile" class="filebtn"><span><i class="fas fa-camera"></i></span>&nbsp; Select profile Picture</label>
                <div class="image-preview" id="image-preview">
                <img src="Profiles/images.jpeg" class="img-fluid">                
                </div>
                </div>
                
                   <div class="form-group" id="firstsubmit"> 
                  <input type="submit"  class="form-control btn-success btn-block" id="createshopbtn" value="Update" name="updates">
                </div>                      
                 
              </div>
   
            </div>
                
                <div class="businessdetails" id="shoptype">
             
                </div>

               </form> 
             </div>
             </div>
           </div>
         </div> 

     <!-------Physical Shop Details Modal start------>
      <?php }else { ?>

                <h6 style="text-align: center;"><a href="" data-toggle="modal" data-target="#productuploadModal" style="text-decoration: none;display: flex;justify-content: center;align-items: center;"><span style="background-color: #ff0066;border-radius: 25px;padding: 10px;">Upload a Product</span></a></h6>
     <h6 style="text-align: center;"><a href="premium.php" style="text-decoration: none;display: flex;justify-content: center;align-items: center;"><span style="background-color: #33cc33;border-radius: 25px;padding: 10px;">Premium Services</span></a></h6>

    <div class="verifydiv"> 
    </div>
         
  </div>
 </section>
    <section>
        <div class="container">
        <div id="delAlert"></div>
           <div id="updateAlert" class="statusMsg"></div>
        <div style="margin: 20px;" class="products">
        
        </div>
        </div>

    </section>

<section>
  <div class="container">
   <div class="productcounts">
        <div class="productcount">
          <h6 style="text-align: center;">Total Products</h6>
          <div class="individualcount">
            <?php 
          $electronics = $count->totalCount('laptops',$csn);
          $cars = $count->totalCount('vehicles',$csn);
          $properties = $count->totalCount('properties',$csn);
          $building = $count->totalCount('building',$csn);
          $energy = $count->totalCount('energy',$csn);
          $fashion = $count->totalCount('fashion',$csn);
          $farm = $count->totalCount('agriculture',$csn);
          $household = $count->totalCount('household',$csn);
          $machines = $count->totalCount('machines',$csn);
          $others = $count->totalCount('others',$csn);
          echo $electronics+$cars+$properties+$building+$energy+$fashion+$farm+$household+$machines+$others;
           ?></div>
        </div>
        <div class="productcount">
          <h6 style="text-align: center;">Approved Products</h6>
          <div class="individualcount">
            <?php 
          $electronics = $count->approvedproductsCount('laptops',$csn);
          $cars = $count->approvedproductsCount('vehicles',$csn);
          $properties = $count->approvedproductsCount('properties',$csn);
          $building = $count->approvedproductsCount('building',$csn);
          $energy = $count->approvedproductsCount('energy',$csn);
          $fashion = $count->approvedproductsCount('fashion',$csn);
          $farm = $count->approvedproductsCount('agriculture',$csn);
          $household = $count->approvedproductsCount('household',$csn);
          $machines = $count->approvedproductsCount('machines',$csn);
          $others = $count->approvedproductsCount('others',$csn);
          echo $electronics+$cars+$properties+$building+$energy+$fashion+$farm+$household+$machines+$others;
           ?></div>
        </div>
         <div class="productcount">
          <h6 style="text-align: center;">Unapproved Products</h6>
          <div class="individualcount">
            <?php 
           $electronics = $count->unapprovedproductsCount('laptops',$csn);
          $cars = $count->unapprovedproductsCount('vehicles',$csn);
          $properties = $count->unapprovedproductsCount('properties',$csn);
          $building = $count->unapprovedproductsCount('building',$csn);
          $energy = $count->unapprovedproductsCount('energy',$csn);
          $fashion = $count->unapprovedproductsCount('fashion',$csn);
          $farm = $count->unapprovedproductsCount('agriculture',$csn);
          $household = $count->unapprovedproductsCount('household',$csn);
          $machines = $count->unapprovedproductsCount('machines',$csn);
          $others = $count->unapprovedproductsCount('others',$csn);
            echo $electronics+$cars+$properties+$building+$energy+$fashion+$farm+$household+$machines+$others
           ?></div>
        </div>
        <div class="productcount">
          <h6 style="text-align: center;">Pending Uploads</h6>
          <div class="individualcount">
            <?php 
            $vehicles = $count->paidup('vehicles',$csn);
            $property = $count->paidup('properties',$csn);
            $machines = $count->paidup('machines',$csn);
            $jobs = $count->paidup('jobs',$csn);
            echo $vehicles+$property+$machines+$jobs;
             ?>
          </div>
        </div>
        <div class="productcount">
          <h6 style="text-align: center;">Expiring soon(< 1 month)</h6>
          <div class="individualcount"></div>
        </div>
    </div>
</div>
</section>
    <section>
      <div class="container">
        <!---products upload modal--->
        <div class="modal w3-animate-zoom" id="productuploadModal">
         <div class="modal-dialog">
           <div class="modal-content">
             <div class="modal-header">
               <h4 class="modal-title">Products Upload form</h4>
               <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
             <div class="modal-body">
               <div style="display: flex;justify-content: center;align-items: center;margin-bottom: 10px;">
         <form action="#" enctype="multipart/form-data" id="uploadprodform" method="POST">
                  <h6 style="text-align: center;">Make sure you fill all fields with asteric(*)</h6>
                  <input type="hidden" name="productowner" class="form-control" value="<?=$csn; ?>">
                
               <!-- <div class="form-group">
                    <label for="Product Name" style="font-size: 20px;font-weight: bold;color: #ff0066;">Product Name</label>
                  <input type="text" name="productname" class="form-control" placeholder="Enter the name of your product" required>
                </div>
                <div class="form-group">
                    <label for="Shop Name" style="font-size: 20px;font-weight: bold;color: #ff0066;">Condition of the product(New,Used or refurbished)</label>
                    <select class="form-control" id="Statusselect" name="Statusselect" required>
       <option value="">Status</option>
       <option value="new">New</option>
       <option value="Used">Used</option>
       <option value="refurbished">Refurbished</option> 
     </select>
     </div> --->
      <div  class="form-group">
       <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Product Category</label> 
     <select class="form-control productscategory" id="productscategory" name="productscategory" required>
       <option value="">Categories*</option>
       <option value="laptops">Electronics</option>
       <option value="vehicles">Vehicles</option>
       <option value="fashions">Fashion & Beauty</option>
       <option value="machines">Engineering Equipments & Machines</option>
       <option value="properties">Property Sales & Rentals</option>
       <option value="building">Building Supplies</option>
       <option value="household">Household Supplies</option>
      <!-- <option value="Services">Services</option>
       <option value="Jobs">Jobs</option>-->
       <option value="energy">Energy</option>
       <option value="agriculture">Agriculture and Farm Supplies</option>
       <option value="othercategories">Other</option>
     </select>
   </div>

        <div class="form-group" id="electronictypediv">
      <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Item</label>
          <select class="form-control subcategorydiv" id="subcategorydiv" name="subcategorydiv" required>

          </select> 
        </div>

      <div class="productfurherdetails" style="border: solid 3px green;padding: 5px;border-radius: 5px;margin :5px;">
       <h6>More fileds will be populated here...</h6>
     </div>

     <div class="form-group">
      <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Price</label>
        <input type="number" name="price" class="form-control" placeholder="Ksh. Price*" required>
      </div>

      <div class="form-group">
        <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Price Negotiable?</label>
        <input type="checkbox" name="yes" value="Yes"><span>  Yes</span>
      </div>

<div class="form-group">
  
</div>
  <!-- <div class="form-group">
                    <label for="Product Name" style="font-size: 20px;font-weight: bold;color: #ff0066;">Brand</label>
                  <input type="text" name="brand" class="form-control" placeholder="Enter the brand of your product" required>
                </div>
                <div class="form-group">
                    <label for="Product Name" style="font-size: 20px;font-weight: bold;color: #ff0066;">Product Price</label>
                  <input type="number" name="price" class="form-control" placeholder="Enter the Price eg Sh.25000/=" required>
                </div> --->
   <div class="form-group"> 
    <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Description (Other Specifications that were not covered. Seperate by us of commas)</label>
                  <textarea cols="10" class="form-control" name="proddescription" style="width: 100%;height: 200px;background-color: #f8f8f8;resize: none;font-size: 16px;border:2px solid #ccc;color: #e60099;" placeholder="Decription*" required></textarea>
                </div>
              <div class="form-group">
            <input type="file" id="files" name="files[]" class="form-control"  required hidden>
            <label style="text-align: center;color:  #00cc00;">Click the camera icon below to select a cover picture for your product</label>
            <label for="files" style="color: #e6005c;font-size: 50px;font-weight: bold;width: 100%;text-align: center;"><i class="fas fa-camera"></i></label>
            </div>
            <div id="dvPreview"></div>      
                  <input type="submit"  class="form-control btn-success btn-block" id="uploadproduct" value="Next" name="submit">
             
              <div id="uploadAlert" class="statusMsg"></div>
          </form>
           </div>
          </div>
           </div>
             </div>
           </div>
           <!---products upload modal end--->
             <!---products update modal--->
        <div class="modal fade" id="producteditModal">
         <div class="modal-dialog">
           <div class="modal-content">
             <div class="modal-header">
               <h4 class="modal-title">Products Edit form</h4>
               <button type="button" class="close" data-dismiss="modal">&times;</button>
               <div id="updatedAlert"></div>
             </div>
             <div class="modal-body">
               <div style="display: flex;justify-content: center;align-items: center;margin-bottom: 10px;">
         <form action="php/session.php" enctype="multipart/form-data" id="editprodform" method="POST">
          <input type="hidden" name="id" id="id">
                  <input type="hidden" name="productowner" class="form-control" value="<?=$cshopname; ?>">
                
                <div class="form-group">
                    <label for="Product Name" style="font-size: 20px;font-weight: bold;color: #ff0066;">Product Name</label>
                  <input type="text" name="productname" class="form-control" id="prodname" required>
                </div>
               <div  class="form-group">
        <label for="categories" style="font-size: 20px;font-weight: bold;color: #ff0066;">Select the most Suitable category of your product</label>
     <select class="form-control updatecategory" id="updatecategory" name="updatecategory" required>
       <option value="">Category</option>
       <option value="electronics">Electronics</option>
       <option value="vehicles">Vehicles</option>
       <option value="fashion">Fashion & Beauty</option>
       <option value="leisure">Engineering Machines & Equipements</option>
       <option value="property">Property Sales & Rentals</option>
       <option value="building">Building Supplies</option>
       <option value="Services">Services</option>
       <option value="Jobs">Jobs</option>
       <option value="commercial">Commercial Supplies</option> 
       <option value="">Home, Garden & kids</option>
       <option value="">Different categories</option>
     </select>
   </div>
  <div class="form-group">
                    <label for="Product Name" style="font-size: 20px;font-weight: bold;color: #ff0066;">Brand</label>
                  <input type="text" name="brand" class="form-control" id="brand" required>
                </div>
                <div class="form-group">
                    <label for="Product Name" style="font-size: 20px;font-weight: bold;color: #ff0066;">Product Price</label>
                  <input type="number" name="price" class="form-control" id="price" required>
                </div>
   <div class="form-group">
                  <label for="Email" style="font-size: 20px;font-weight: bold;color: #ff0066;">Briefly Decribe the Product </label>
                  <textarea cols="10" class="form-control" id="proddescription" name="proddescription" style="width: 100%;height: 200px;background-color: #f8f8f8;resize: none;font-size: 16px;border:2px solid #ccc;color: #e60099;" required></textarea>
                </div>
              <div class="form-group">
            <input type="file" id="updatefiles" name="files[]" class="form-control"  required hidden>
            <label for="updatefiles" style="color: white;background-color:  #ff00bf;padding: 10px;font-size: 20px;font-weight: bold;width: 100%;"><i class="fas fa-file"></i>&nbsp; &nbsp;Click Me To Select Images</label>
            </div>
            <div id="updatedvPreview">
              
            </div>      
                  <input type="submit"  class="form-control btn-primary btn-block" id="updateproduct" value="Next" name="updateproduct">
          </form>
           </div>
          </div>
           </div>
             </div>
           </div>
             <!---products update modal end--->

             <!---products images modal start--->
             <div class="modal fade" id="images-modal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h4>Product Images</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="deleteImageAlert"></div>
      <div class="modal-body">
        <div class="Images">
          
        </div>
      </div>
    </div>
  </div>
</div>
             <!---products images modal end--->
         </div> 
      
 </section>

 <section>
   <div class="container">
     <div class="row">
  <div class="col-lg-12">
    <div class="card-deck my-3">
      <div class="card border-info">
        <div class="card-header bg-info text-center text-light lead">
         Total Products per category by percentage
        </div>
        <div id="chat3" style="width: 99%;height: 400px;">  
        </div>
      </div>
      <div class="card border-success">
        <div class="card-header bg-success text-center text-light lead">
          Approved Products per Category by Percentage
        </div>
        <div id="chat1" style="width: 99%;height: 400px;">  
        </div>
      </div>
      <div class="card border-info">
        <div class="card-header bg-info text-center text-light lead">
          Unapproved products by Category Percentage
        </div>
        <div id="chat2" style="width: 99%;height: 400px;">  
        </div>
      </div>
     
    </div>
  </div>
 </div>

   </div>
 </section>

</div>


      <?php } ?>
 <script type="text/javascript" src="js2/jquery.1.min.js"></script>
 <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="fontawe/js/all.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
 var chart;

      // Load the Visualization API and the piechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create our data table.
        data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Electronics',<?=$count->productcategorypercentage('laptops',$csn)  ?>],
          ['Vehicles', <?=$count->productcategorypercentage('vehicles',$csn) ?>],
          ['Properties', <?=$count->productcategorypercentage('properties',$csn) ?>],
          ['HouseHold', <?=$count->productcategorypercentage('household',$csn) ?>],
          ['Building Material', <?=$count->productcategorypercentage('building',$csn) ?>],
          ['Machinery', <?=$count->unapprovedproductsCount('machines',$csn) ?>],
          ['Energy', <?=$count->productcategorypercentage('energy',$csn) ?>],
          ['Fashion', <?=$count->productcategorypercentage('fashions',$csn) ?>],
          ['Farm Supplies', <?=$count->productcategorypercentage('agriculture',$csn) ?>],
          ['Jobs', <?=$count->productcategorypercentage('Jobs',$csn) ?>],
          ['Services', <?=$count->productcategorypercentage('Services',$csn) ?>]
        ]);

        // Set chart options
        var options = {'title':'Total Products By Category',
                       'width':400,
                       'height':300,
                       'is3D':true
                     };

        // Instantiate and draw our chart, passing in some options.
        chart = new google.visualization.PieChart(document.getElementById('chat3'));
        google.visualization.events.addListener(chart, 'select', selectHandler);
        chart.draw(data, options);
      }

      function selectHandler() {
        var selectedItem = chart.getSelection()[0];
        var value = data.getValue(selectedItem.row, 0);
        alert('The user selected ' + value);
      }

</script>
<script type="text/javascript">
 var chart;

      // Load the Visualization API and the piechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create our data table.
        data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Electronics',<?=$count->approvedproductsCount('laptops',$csn)  ?>],
          ['Vehicles', <?=$count->approvedproductsCount('vehicles',$csn) ?>],
          ['Properties', <?=$count->approvedproductsCount('properties',$csn) ?>],
          ['HouseHold', <?=$count->approvedproductsCount('household',$csn) ?>],
          ['Building Material', <?=$count->approvedproductsCount('building',$csn) ?>],
          ['Machinery', <?=$count->approvedproductsCount('machines',$csn) ?>],
          ['Energy', <?=$count->approvedproductsCount('energy',$csn) ?>],
          ['Fashion', <?=$count->approvedproductsCount('fashions',$csn) ?>],
          ['Farm Supplies', <?=$count->approvedproductsCount('agriculture',$csn) ?>],
          ['Jobs', <?=$count->approvedproductsCount('Jobs',$csn) ?>],
          ['Services', <?=$count->approvedproductsCount('Services',$csn) ?>]
        ]);

        // Set chart options
        var options = {'title':'Approved Products By Category',
                       'width':400,
                       'height':300,
                       'pieHole': 0.3
                     };

        // Instantiate and draw our chart, passing in some options.
        chart = new google.visualization.PieChart(document.getElementById('chat1'));
        google.visualization.events.addListener(chart, 'select', selectHandler);
        chart.draw(data, options);
      }

      function selectHandler() {
        var selectedItem = chart.getSelection()[0];
        var value = data.getValue(selectedItem.row, 0);
        alert('The user selected ' + value);
      }

</script>
<script type="text/javascript">
  $(document).ready(function(){ 
    $(".opendropbtn1").click(function(e){
      e.preventDefault();
      $(".dropdown-content1").css("display","block");
      $(".opendropbtn1").css("display","none");
      $(".closedropbtn1").css("display","block");
    });
    $(".closedropbtn1").click(function(e){
      e.preventDefault();
      $(".dropdown-content1").css("display","none");
      $(".closedropbtn1").css("display","none");
      $(".opendropbtn1").css("display","block");
    });
    $(".opendropbtn2").click(function(e){
      e.preventDefault();
      $(".dropdown-content2").css("display","block");
      $(".opendropbtn2").css("display","none");
      $(".closedropbtn2").css("display","block");
    });
    $(".closedropbtn2").click(function(e){
      e.preventDefault();
      $(".dropdown-content2").css("display","none");
      $(".closedropbtn2").css("display","none");
      $(".opendropbtn2").css("display","block");
    });
    $(".opendropbtn3").click(function(e){
      e.preventDefault();
      $(".dropdown-content3").css("display","block");
      $(".opendropbtn3").css("display","none");
      $(".closedropbtn3").css("display","block");
    });
    $(".closedropbtn3").click(function(e){
      e.preventDefault();
      $(".dropdown-content3").css("display","none");
      $(".closedropbtn3").css("display","none");
      $(".opendropbtn3").css("display","block");
    });
  });
</script>
<script type="text/javascript">
 var chart;

      // Load the Visualization API and the piechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create our data table.
        data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Electronics',<?=$count->unapprovedproductsCount('laptops',$csn)  ?>],
          ['Vehicles', <?=$count->unapprovedproductsCount('vehicles',$csn) ?>],
          ['Properties', <?=$count->unapprovedproductsCount('properties',$csn) ?>],
          ['HouseHold', <?=$count->unapprovedproductsCount('household',$csn) ?>],
          ['Building Material', <?=$count->unapprovedproductsCount('building',$csn) ?>],
          ['Machinery', <?=$count->unapprovedproductsCount('machines',$csn) ?>],
          ['Energy', <?=$count->unapprovedproductsCount('energy',$csn) ?>],
          ['Fashion', <?=$count->unapprovedproductsCount('fashions',$csn) ?>],
          ['Farm Supplies', <?=$count->unapprovedproductsCount('agriculture',$csn) ?>],
          ['Jobs', <?=$count->unapprovedproductsCount('Jobs',$csn) ?>],
          ['Services', <?=$count->unapprovedproductsCount('Services',$csn) ?>]
        ]);

        // Set chart options
        var options = {'title':'Unapproved Products By Category',
                       'width':400,
                       'height':300,
                     };

        // Instantiate and draw our chart, passing in some options.
        chart = new google.visualization.PieChart(document.getElementById('chat2'));
        google.visualization.events.addListener(chart, 'select', selectHandler);
        chart.draw(data, options);
      }

      function selectHandler() {
        var selectedItem = chart.getSelection()[0];
        var value = data.getValue(selectedItem.row, 0);
        alert('The user selected ' + value);
      }

</script>
<script type="text/javascript">
	 function topFunction() {
    $("html, body").animate(
      { scrollTop: "0" }, 1000);
  }
</script>
<script type="text/javascript">
  function showeditform() {
    document.getElementbyId("editprodform").style.display = 'block';
  }
</script>
<script type="text/javascript">
  $(document).ready(function(){
    //Profile picture display
        $(document).on("change", "#actualfile", function() {
      var oFReader = new FileReader();
      oFReader.readAsDataURL(document.getElementById("actualfile").files[0]);
      oFReader.onload = function (oFREvent){
      $("#image-preview").html('<img src= " ' +oFREvent.target.result+' " class="img-fluid img-thumbnail img-rounded">');
}     
});
//select subcounty ajax
    $('.countysel').change(function(e){
      e.preventDefault();
       county = $(this).children("option:selected").val();
      $(this).css("background-color", "#D6D6FF");
       $.ajax({
        url: 'php/action.php',
        method: 'post',
        data: { county : county },
        success:function(response){
          $(".subcounty").html(response);
        }
      });
    });
//select shop ajax
     $('#selectshop').change(function(e){
      e.preventDefault();
       shop = $(this).children("option:selected").val();
      $(this).css("background-color", "#D6D6FF");
       $.ajax({
        url: 'php/session.php',
        method: 'post',
        data: { shop : shop },
        success:function(response){
          $("#shoptype").html(response);
          $("#firstsubmit").css("display","none");
    }
  });
  });

      $("#physicalshopform").on('submit',function(e){
      e.preventDefault();
        Swal.fire({
        title: 'Are you sure you want to upload these details?.',
        type: '',
        text: '',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, update!',
      }).then((result) => {
        if (result.value) { 
      $.ajax({
        type: 'POST',
        url: 'php/Accountfiles/businessdetails.php',
        data: new FormData(this),
       // dataType: 'json',
        contentType: false,
        processData: false,
        success: function(response){
         if (response < 1) {
           Swal.fire(
            'Failed',
            'Account Detais Upload Failed!Please try again Later',
            'error'
          )
         } else {
            alert('Successful update');
           Swal.fire(
            'Success',
            'Your Details submitted Successfully Updated Successfully',
            'success'
          ) 
          window.location = "Shophome.php";
           //alert('Failed to update'); 
            
         } 
        } 
      });
        }
    }
    )
    });


  /*  fetchproducts();
    function fetchproducts(){
      $.ajax({
        url: 'php/session.php',
        method: 'post',
        data: { action: 'fetchproducts' },
        success:function(response){
          $(".product").html(response);
          
        }
      });
    } */


    //product upload ajax
    $("#uploadprodform").on('submit',function(e){
      e.preventDefault();
      $("#uploadproduct").val("Please wait....");
      var subcategory = $('.productscategory').children("option:selected").val();

      switch(subcategory){
        case "laptops":
         $.ajax({
        type: 'POST',
        url: 'php/productuploads/laptopsupload.php',
        data: new FormData(this),
        contentType: false,
        processData: false,
        success: function(response){   
       if (response = "success") {
          window.location = 'imagesuploadfiles/electronicimages.php';
          fetchproducts();
        }
        {
          ("#uploadproduct").val("Next");
          $("#uploadAlert").html('<div class=" alert alert-danger alert-dismissible w3-green w3-animate-zoom"><button type="button" class="close" data-dismiss="alert">&times</button><strong class="text-center">'+response+'</strong></div>');
         fetchproducts();
        } 
        }
      });
         break;

         case "properties":
              $.ajax({
        type: 'POST',
        url: 'php/productuploads/propertyupload.php',
        data: new FormData(this),
        contentType: false,
        processData: false,
        success: function(response){  
         if (response = "success") {
          window.location = 'imagesuploadfiles/propertyimages.php';
          fetchproducts();
        }
        {
          $("#uploadAlert").html('<div class=" alert alert-danger alert-dismissible w3-green w3-animate-zoom"><button type="button" class="close" data-dismiss="alert">&times</button><strong class="text-center">'+response+'</strong></div>');
         fetchproducts();
        } 
        }
      });
         break;
         case "vehicles":
         $.ajax({
        type: 'POST',
        url: 'php/productuploads/vehicleupload.php',
        data: new FormData(this),
        contentType: false,
        processData: false,
        success: function(response){   
        if (response = 1) {
          window.location = 'imagesuploadfiles/vehicleimages.php';
          fetchproducts();
        }
        {
          $("#uploadAlert").html('<div class=" alert alert-danger alert-dismissible w3-green w3-animate-zoom"><button type="button" class="close" data-dismiss="alert">&times</button><strong class="text-center">'+response+'</strong></div>');
         fetchproducts();
        }
        }
      });
         case "machines":
         $.ajax({
        type: 'POST',
        url: 'php/productuploads/machineupload.php',
        data: new FormData(this),
        contentType: false,
        processData: false,
        success: function(response){   
         if (response = 1) {
          window.location = 'imagesuploadfiles/machineimages.php';
          fetchproducts();
        }
        {
          $("#uploadAlert").html('<div class=" alert alert-danger alert-dismissible w3-green w3-animate-zoom"><button type="button" class="close" data-dismiss="alert">&times</button><strong class="text-center">'+response+'</strong></div>');
         fetchproducts();
        } 
        }
      });
         break;
         case "fashions":
         $.ajax({
        type: 'POST',
        url: 'php/productuploads/fashionupload.php',
        data: new FormData(this),
        contentType: false,
        processData: false,
        success: function(response){
        console.log(response);   
         if (response = 1) {
          window.location = 'imagesuploadfiles/fashionimages.php';
          fetchproducts();
        }
        {
          $("#uploadAlert").html('<div class=" alert alert-danger alert-dismissible w3-green w3-animate-zoom"><button type="button" class="close" data-dismiss="alert">&times</button><strong class="text-center">'+response+'</strong></div>');
         fetchproducts();
        } 
        }
      });
         break;
          case "building":
         $.ajax({
        type: 'POST',
        url: 'php/productuploads/buildingupload.php',
        data: new FormData(this),
        contentType: false,
        processData: false,
        success: function(response){  
         if (response = 1) {
          window.location = 'imagesuploadfiles/buildingimages.php';
          fetchproducts();
        }
        {
          $("#uploadAlert").html('<div class=" alert alert-danger alert-dismissible w3-green w3-animate-zoom"><button type="button" class="close" data-dismiss="alert">&times</button><strong class="text-center">'+response+'</strong></div>');
         fetchproducts();
        } 
        } 

      });
         break;
        case "Household":
         $.ajax({
        type: 'POST',
        url: 'php/productuploads/householdupload.php',
        data: new FormData(this),
        contentType: false,
        processData: false,
        success: function(response){
        console.log(response);   
         if (response = 1) {
          window.location = 'imagesuploadfiles/householdimages.php';
          fetchproducts();
        }
        {
          $("#uploadAlert").html('<div class=" alert alert-danger alert-dismissible w3-green w3-animate-zoom"><button type="button" class="close" data-dismiss="alert">&times</button><strong class="text-center">'+response+'</strong></div>');
         fetchproducts();
        } 
        } 

      });
         break;
         case "energy":
         $.ajax({
        type: 'POST',
        url: 'php/productuploads/energyupload.php',
        data: new FormData(this),
        contentType: false,
        processData: false,
        success: function(response){  
         if (response = 1) {
          window.location = 'imagesuploadfiles/energyimages.php';
          fetchproducts();
        }
        {
          $("#uploadAlert").html('<div class=" alert alert-danger alert-dismissible w3-green w3-animate-zoom"><button type="button" class="close" data-dismiss="alert">&times</button><strong class="text-center">'+response+'</strong></div>');
         fetchproducts();
        } 
        } 

      });
         break;
         case "agriculture":
         $.ajax({
        type: 'POST',
        url: 'php/productuploads/agricultureupload.php',
        data: new FormData(this),
        contentType: false,
        processData: false,
        success: function(response){ 
         if (response = 1) {
          window.location = 'imagesuploadfiles/agricultureimages.php';
          fetchproducts();
        }
        {
          $("#uploadAlert").html('<div class=" alert alert-danger alert-dismissible w3-green w3-animate-zoom"><button type="button" class="close" data-dismiss="alert">&times</button><strong class="text-center">'+response+'</strong></div>');
         fetchproducts();
        } 
        } 

      });
         break;
         default:
         console.log('No activity');
      }

     /* $.ajax({
        type: 'POST',
        url: 'php/productdb.php',
        data: new FormData(this),
        contentType: false,
        processData: false,
        success: function(response){   
        if (response = "success") {
          window.location = 'productImages.php';
          fetchproducts();
        }
        else{
          $("#uploadAlert").html('<div class=" alert alert-danger alert-dismissible w3-green w3-animate-zoom"><button type="button" class="close" data-dismiss="alert">&times</button><strong class="text-center">Sorry something went wrong... </strong></div>');
          fetchproducts();
        }
        }
      }); */
    }); 


    //product type ajax
    $('.productscategory').change(function(e){
      e.preventDefault();
       category = $(this).children("option:selected").val();
      $(this).css("background-color", "#D6D6FF");
       $.ajax({
        url: 'php/action.php',
        method: 'post',
        data: { category : category },
        success:function(response){
          $("#subcategorydiv").html(response);
        }
      });
    
   });

//electronic type ajax
 $('.subcategorydiv').change(function(e){
      $('.productfurherdetails').html('<h4>Please Wait...</h4>');
      e.preventDefault();
       electroniccategory = $(this).children("option:selected").val();
      $(this).css("background-color", "#D6D6FF");
       $.ajax({
        url: 'php/action.php',
        method: 'post',
        data: { electroniccategory : electroniccategory },
        success:function(response){
          $(".productfurherdetails").html(response);
        }
      });
    
   });

  checknotification();
    function checknotification(){
      $.ajax({
        url: 'php/session.php',
        method: 'post',
        data: { action: 'checknotification'},
        success:function(response){
          $("#checkNotification").html(response);
        }
      });
    }

  /*  $("body").on("click", ".editelectronicBtn", function(e){
      e.preventDefault();
      editel_id = $(this).attr('id');
      $.ajax({
        url:'php/session.php',
        type: 'POST',
        data: {editel_id:editel_id},
        success:function(response){
          data = JSON.parse(response);
          $("#id").val(data.PSN);
          $("#prodname").val(data.NAME);
          $("#Statusselect").val(data.status);
          $("#sel2").val(data.category);
          $("#brand").val(data.brand);
          $("#price").val(data.price);
          $("#proddescription").val(data.description);
         $("#files").val(data.image);
          $("#updatedvPreview").html('<img src="products/'+data.image+'" class="img-thumbnail img-fluid">');
        }
      });
    });
    $("body").on("click", ".delelectronicbtn", function(e){
      e.preventDefault();
      var tr = $(this).closest('tr');
      delel_id = $(this).attr('id');
      $.ajax({
        url: 'php/session.php',
        type: 'POST',
        data:{delel_id:delel_id},
        success:function(response){
          $("#delAlert").html('<div class=" alert alert-danger alert-dismissible w3-green w3-animate-zoom"><button type="button" class="close" data-dismiss="alert">&times</button><strong class="text-center">'+response+'</strong></div>');
          //tr.css('display','none');
          fetchproducts(); 
        }
      });
    });
    $("#editprodform").on('submit',function(e){
      e.preventDefault();
      $.ajax({
        type: 'POST',
        url: 'php/session.php',
        data: new FormData(this),
        contentType: false,
        processData: false,
        success: function(response){   
       // window.location = 'Shophome.php';
          $("#updatedAlert").html('<div class=" alert alert-danger alert-dismissible w3-green w3-animate-zoom"><button type="button" class="close" data-dismiss="alert">&times</button><strong class="text-center">'+response+'</strong></div>');
        fetchproducts();
        }
      });
    }); 

    //view images Ajax Request

      //View Images Ajax Request
     $("body").on("click", ".ViewIelectronicmagesIcon", function(e){
      e.preventDefault();
      viewelImages_id = $(this).attr('id');
      $.ajax({
        url: 'php/session.php',
        type: 'POST',
        data:{viewelImages_id:viewelImages_id},
        success:function(response){
          $(".Images").html(response)
        }
      });
    });
          //Delete Images Ajax Request
     $("body").on("click", ".deleteImage", function(e){
      e.preventDefault();
      var tr = $(this).closest('tr');
      deleteImages_id = $(this).attr('id');
      $.ajax({
        url: 'php/session.php',
        type: 'POST',
        data:{deleteImages_id:deleteImages_id},
        success:function(response){
          $(".deleteImageAlert").html('<div class=" alert alert-danger alert-dismissible w3-green w3-animate-zoom"><button type="button" class="close" data-dismiss="alert">&times</button><strong class="text-center">'+response+'</strong></div>');
          tr.css('display','none');
        }
      });
    });
//verify account ajax
        $("#verifyshop").click(function(e){
            e.preventDefault();

      $.ajax({
        url: 'php/session.php',
        type: 'POST',
        data:{action: 'verify'},
        success:function(response){
          if (response = 'success') {
              $("#verifyshop").hide();
                $(".verifydiv").append('<h6><div style="background-color:#ffff00;">Check your email and enter the code we send below to verify your shop</h6><br><form action="php/session.php" enctype="multipart/form-data" id="verifyform" method="POST"><div class="form-group"><label for="Product Name" style="font-size: 20px;font-weight: bold;color: #ff0066;">Enter the code here</label><input type="number" name="verifycode" class="form-control" placeholder="Enter the 4 digit code to verify your email" required></div><div class="form-group"><input type="submit" value="verify" class="form-control btn btn-warning"></div></form></div>');
        // $(".verifydiv").append('<h6><div style="background-color:#ffff00;">Check your email and enter the code we send below to verify your shop</h6><br><form action="php/session.php" enctype="multipart/form-data" id="verifyform" method="POST"><div class="form-group"><label for="Product Name" style="font-size: 20px;font-weight: bold;color: #ff0066;">Enter the code here</label><input type="number" name="verifycode" class="form-control" placeholder="Enter the 4 digit code to verify your email" required></div><div class="form-group"><input type="submit" value="verify" class="form-control btn btn-warning"></div></form></div>');
        } else{
          $(".verifydiv").append(); 
           
        }
        }
      });
    });

//send verify code ajax
 $("#verifyform").on('submit',function(e){
      e.preventDefault();
      $.ajax({
        type: 'POST',
        url: 'php/session.php',
        data: new FormData(this),
        contentType: false,
        processData: false,
        
        success: function(response){ 
        if (response === 'verified') {
         $("#verifyresponse").html('<div class=" alert alert-danger alert-dismissible w3-green w3-animate-zoom"><button type="button" class="close" data-dismiss="alert">&times</button><strong class="text-center">You have verified your shop</strong></div>');
          $("#verifyalert").hide();
        }  
        else{
         $("#verifyresponse").html('<div class=" alert alert-danger alert-dismissible w3-green w3-animate-zoom"><button type="button" class="close" data-dismiss="alert">&times</button><strong class="text-center">Verification failed,try again later...</strong></div>');
         $("#verifydiv").hide(); 
        }
        }
      });
    }); */


  });
</script>
<script type="text/javascript">
 $(function() {
    $("#files").change(function () {
      if (typeof (FileReader) != "undefined") {
        var dvPreview = $("#dvPreview");
        dvPreview.html("");
       var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
        $($(this)[0].files).each(function () {
          var file = $(this);
          if(regex.test(file[0].name.toLowerCase())) {
            var reader = new FileReader();
              reader.onload = function (e) {
                var img = $("<img />");
               img.attr("style", "height:auto;width:100%;padding:10px;");
                img.attr("src", e.target.result);
                dvPreview.append(img);
              }
              reader.readAsDataURL(file[0]);
          } else {
            alert(file[0].name +"is not a valid image file.");
           dvPreview.html(" ");
            return false;
          }
       }); 
     }else {
        alert("This browser does not support FileReader");
      }
    });
  }); 
</script>
<script type="text/javascript">
 $(function() {
    $("#updatefiles").change(function () {
      if (typeof (FileReader) != "undefined") {
        var updatedvPreview = $("#updatedvPreview");
        updatedvPreview.html("");
       var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
        $($(this)[0].files).each(function () {
          var file = $(this);
          if(regex.test(file[0].name.toLowerCase())) {
            var reader = new FileReader();
              reader.onload = function (e) {
                var img = $("<img />");
               img.attr("style", "height:auto;width:100%;padding:10px;");
                img.attr("src", e.target.result);
                updatedvPreview.append(img);
              }
              reader.readAsDataURL(file[0]);
          } else {
            alert(file[0].name +"is not a valid image file.");
           updatedvPreview.html(" ");
            return false;
          }
       }); 
     }else {
        alert("This browser does not support FileReader");
      }
    });
  });
</script>
<script type="text/javascript">
  var d = new Date();
  var g = d.getHours();
  if (g < 12) {
    document.getElementById("greeting").innerHTML = "Good morning";
  }else if(g >= 12 && g <= 13 ){
    document.getElementById("greeting").innerHTML = "Good afternoon";
  }
 else{
  document.getElementById("greeting").innerHTML = "Good evening";
 } 
</script>
 <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
   <script type="text/javascript">
  $(document).ready(function() {
    $('table').DataTable({
      paging: true,
      sorting: true
    });
  });
  </script>
  <script type="text/javascript" src="accountnavigation.js">
   
  </script>
</body>
</html>