
<?php 
require_once '../assets/php/admin-header.php';
require_once '../assets/php/admin-db.php';
$admin = new Admin();
 ?>
<!---<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/css/w3.css">
	<link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.css">
  	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<title>Admin | Dashboard</title>
	<style type="text/css">
	.admin-nav{
		width: 220px;
		min-height: 100vh;
		overflow: hidden;
		background-color: #343a40;
		transition: 0.3s all ease-in-out; 
	}
	.admin-link{
		background-color: #343a40;
	}
	.admin-link:hover, .nav-active{
		background-color:  #cc0000;
		text-decoration: none;
	}
	.animate{
		width: 0;
		transition: 0.3s all ease-in-out; 
	}	
	</style>
<script type="text/javascript" src="assets/js/jquery.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="assets/js/all.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#open-nav").click(function(){
			$(".admin-nav").toggleClass('animate');
		});
	});
</script>
</head>
<body>
<div class="container-fluid">
 <div class="row">
 	<div class="admin-nav">
 		<h4 class="text-light text-center">Admin Panel</h4>
 		<div class="list-group list-group-flush">
 			<a href="admin-dashboard.php" class="list-group-item text-light admin-link <?=(basename($_SERVER['PHP_SELF']) == 'admin-dashboard.php')?"nav-active":""; ?>"><i class="fas fa-chart-pie"></i> &nbsp;&nbsp;Dashboard</a>
 			<a href="admin-shops.php" class="list-group-item text-light admin-link <?=(basename($_SERVER['PHP_SELF']) == 'admin-shops.php')?"nav-active":""; ?>"><i class="fas fa-user-friends"></i>&nbsp;&nbsp;Shops</a>
 			<a href="admin-notifications.php" class="list-group-item text-light admin-link <?=(basename($_SERVER['PHP_SELF']) == 'admin-notifications.php')?"nav-active":""; ?>"><i class="fas fa-bell"></i>&nbsp;&nbsp;Notifications</a>
 			<a href="admin-feedback.php" class="list-group-item text-light admin-link <?=(basename($_SERVER['PHP_SELF']) == 'admin-feedback.php')?"nav-active":""; ?>"><i class="fas fa-comment"></i>&nbsp;&nbsp;Feedback</a>
 			<a href="admin-deletedshops.php" class="list-group-item text-light admin-link <?=(basename($_SERVER['PHP_SELF']) == 'admin-deletedshops.php')?"nav-active":""; ?>"><i class="fas fa-user-slash"></i>&nbsp;&nbsp;Deleted Shops</a>
 			<div class="dropdown">
 			<a href="" data-toggle="dropdown" class="dropdown-toggle list-group-item text-light admin-link <?=(basename($_SERVER['PHP_SELF']) == 'admin-products.php')?"nav-active":""; ?>">New Products</a>
 			<div class="dropdown-menu">
 				<a href="admin-products.php" class="dropdown-item">Electronics</a>
        <a href="admin_vehicles.php" class="dropdown-item">Vehicles</a>
 			</div>
 			</div>
 			<a href="admin-deletedproducts.php" class="list-group-item text-light admin-link <?=(basename($_SERVER['PHP_SELF']) == 'admin-deletedproducts.php')?"nav-active":""; ?>"><i class="fas fa-user-slash"></i>&nbsp;&nbsp;Deleted Products</a>
 			<a href="" class="list-group-item text-light admin-link"><i class="fas fa-table"></i>&nbsp;&nbsp;Export Shops</a>
 			<a href="" class="list-group-item text-light admin-link"><i class="fas fa-table"></i>&nbsp;&nbsp;Export Products</a>
 			<a href="#" class="list-group-item text-light admin-link"><i class="fas fa-id-card"></i>&nbsp;&nbsp;Profile</a>
 			<a href="#" class="list-group-item text-light admin-link"><i class="fas fa-cog"></i>&nbsp;&nbsp;Settings</a>
 		
 	</div>
 </div>
 	<div class="col">
 		<div class="row">
 			<div class="col-lg-12 bg-primary pt-2 justify-content-between d-flex">
 				<a href="#" class="text-white" id="open-nav"><h3><i class="fas fa-bars"></i></h3></a>
 				<h4 class="text-light">Dashboard</h4>
 				<a href="assets/php/logout.php" class="text-light mt-1"><i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;LogOut</a>
 			</div>
 		</div> --->







<div class="col">
	<div class="row">
	<div class="col-lg-12">
		<div class="card my-2 border-success">
			<div class="card-header bg-success text-white">
				<h4 class="m-0">Total Uploaded Products</h4>
			</div>
			<div class="card-body">
				<div class="table-responsive" id="fetchproducts">
				<?php 
				$data = $admin->fetchproducts();
				 ?>
				  <?php if($data != null): ?>
       <table class="table">
       	<div id="approvedelete"></div>
		<thead>
						<tr>
				<th class="">
					<input type="submit" name="delete" value="Delete" class="btn btn-danger form-control" style="float: left;margin-bottom: 10px;">
					<input type="submit" name="approve" value="Approve" class="btn btn-info form-control" style="float: right;" id="approvebtn">
				</th>
			</tr>
			<tr>
				<th><input type="checkbox" id="checkAll"></th>
				<th>Product Name</th>
				<th>Image</th>
				<th>Category</th>
				<th>Brand</th>
				<th>Price</th>
				<th>Status</th>
				<th>Description</th>
				<th>Date Uploaded</th>
				<th>Shop</th>
				<th>Type Of Shop</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			foreach($data as $row){
			 ?>
			 <?php if ($row['approved'] != 0) {  ?>
			 	<tr id="<?=$row['PSN'] ?>">
			 		<td><input type="checkbox" class="checkItem" value="<?=$row['PSN'] ?>" name="sn[]"></td>
			 		<td><?=$row['NAME'] ?></td>
		<td><img src="../products/<?=$row['image'] ?>" class="img-fluid  rounded-circle"></td>
		<td><?=$row['category'] ?></td>
		<td><?=$row['brand'] ?></td>
		<td><?=$row['price'] ?></td>
		<td><?=$row['status'] ?></td>
		<td><?=$row['DESCRIPTION'] ?></td>
		<td><?=$row['dateuploaded'] ?></td>
		<td><?=$row['ShopName'] ?></td>
		<td><?=$row['type'] ?></td>
		<td>
			<a href="#" id="<?=$row['PSN'] ?>" title="View Details" class="text-primary UsereditIcon" data-toggle="modal" data-target="#ShowShopDetails"><i class="fas fa-info-circle fa-lg"></i></a>&nbsp;&nbsp;
			<a href="#" id="<?=$row['PSN'] ?>" title="View Images" class="text-secondary ViewImagesIcon" data-toggle="modal" data-target="#images-modal"><i class="fas fa-info-circle fa-lg"></i></a>
			<a href="#" id="<?=$row['PSN'] ?>" title="Delete Shop" class="text-danger deleteproductIcon"><i class="fas fa-trash-alt fa-lg"></i></a>&nbsp;&nbsp;
			<a href="#" id="<?=$row['PSN'] ?>" title="Approve Product" class="text-info approveproduct">Approved</a>&nbsp;&nbsp;
		</td>
		</tr>
			 <?php } else {?>
			
			 	 	<tr id="<?=$row['PSN'] ?>">
			 	 		<td><input type="checkbox" class="checkItem" value="<?=$row['PSN'] ?>" name="sn[]"></td>
			 		<td><?=$row['NAME'] ?></td>
		<td><img src="../products/<?=$row['image'] ?>" class="img-fluid  rounded-circle"></td>
		<td><?=$row['category'] ?></td>
		<td><?=$row['brand'] ?></td>
		<td><?=$row['price'] ?></td>
		<td><?=$row['status'] ?></td>
		<td><?=$row['DESCRIPTION'] ?></td>
		<td><?=$row['dateuploaded'] ?></td>
		<td><?=$row['ShopName'] ?></td>
		<td><?=$row['type'] ?></td>
		<td>
			<a href="#" id="<?=$row['PSN'] ?>" title="View Details" class="text-primary UsereditIcon" data-toggle="modal" data-target="#ShowShopDetails"><i class="fas fa-info-circle fa-lg"></i>Details</a>&nbsp;&nbsp;
			<a href="#" id="<?=$row['PSN'] ?>" title="View Images" class="text-secondary ViewImagesIcon" data-toggle="modal" data-target="#images-modal"><i class="fas fa-info-circle fa-lg"></i>Images</a>
		</td>
		</tr>
			 <?php } ?>
			 				
	
			<?php } ?>
      <?php else: ?>
      	<h3 class="text-center text-secondary">:(No any Products Uploaded yet!)</h3>
       <?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>


<div class="modal fade" id="ShowShopDetails">
	<div class="modal-dialog modal-dialog-centered mw-100 w-50">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="getName"></h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<div class="card-deck">
					<div class="card border-primary">
						<div class="card-body">
							<p id="getOwner"></p>
							<p id="getEmail"></p>
							<p id="getPhone"></p>
							<p id="getCounty"></p>
							<p id="getTown"></p>
							<p id="getstreet"></p>
							<p id="getcategory"></p>
							<p id="getopen"></p>
							<p id="getclose"></p>
							<p id="description"></p>
							<p id="getdatecreated"></p>
						</div>
					</div>
					<div class="card align-self-center" id="getimage"></div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>



<div class="modal fade" id="images-modal">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h4>Product Images</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<div class="Images">
					
				</div>
			</div>
		</div>
	</div>
</div>
 <!---footer area-->
 	</div>	
</div>
</div>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		//Fetch All Users Ajax Request
		fetchproducts();
		function fetchproducts(){
			$.ajax({
				url: 'assets/php/admin-action.php',
				method: 'post',
				data: { action: 'fetchproducts' },
				success:function(response){
					$("#fetchproduct").html(response);
					 $("table").DataTable({
            order: [0, 'desc'],
            paging: true,
            select: true
          });
				}
			});
		}

		//select all products
		  $("#checkAll").click(function(){
      if($(this).is(":checked")) {
        $(".checkItem").prop('checked',true);
      } else{
        $(".checkItem").prop('checked',false);
      }
    });
		 //delete multiple ajax
		  
		//Display Shop in Details Mode
		$("body").on("click", ".UserDetailsIco", function(e){
			e.preventDefault();
			 eldetails_id = $(this).attr('id');
			$.ajax({
				url: 'assets/php/admin-action.php',
				method: 'post',
				data: { eldetails_id:eldetails_id },
				success:function(response){
				data = JSON.parse(response);
					$("#getName").text(data.NAME+' '+'(ID: '+data.PSN+')');
					$("#getOwner").text('Owner : '+data.productowner);
					$("#getEmail").text('Owner Email : '+data.OwnerEmail);
					$("#getPhone").text('Phonenumber : '+data.Phonenumber);
					$("#getCounty").text('County : '+data.County);
					$("#getTown").text('Town : '+data.Town);
					$("#getstreet").text('Street : '+data.Street);
					$("#getcategory").text('Category : '+data.productscategory);
					$("#getopen").text('Opening Time : '+data.Opening);
					$("#getclose").text('Closing Time : '+data.Closing);
					$("#description").text('Shop Description : '+data.Description);
					$("#getdatecreated").text('Joined On : '+data.DateCreated);

					if (data.image != ' ') {
						$("#getimage").html('<img src="../Uploads/'+data.image+'" class="img-thumbnail img-fluid">');
					}
					else{
					$("#getimage").html('<img src="../Profiles/images.jpeg" class="img-thumbnail img-fluid">');	
					}
				}
			});
		});
		//Delete Shop Ajax Request
		 $("body").on("click", ".deleteproductIco", function(e){
      e.preventDefault();
      delproduct_id = $(this).attr('id');
      $.ajax({
        url: 'assets/php/admin-action.php',
        type: 'POST',
        data:{delproduct_id:delproduct_id},
        success:function(response){
          $("#delAlert").html('<div class=" alert alert-danger alert-dismissible w3-green w3-animate-zoom"><button type="button" class="close" data-dismiss="alert">&times</button><strong class="text-center">'+response+'</strong></div>');
           fetchproducts();
        }
      });
    });

		 //Approve a product
		 $("#approvebtn").click(function(e){
		 	e.preventDefault();
		 	 Swal.fire({
        title: 'Are you Sure?',
        type: '',
        text: '',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Approve!',
      }).then((result) => {
      	if (result.value) {
        var approve_id = [];
		 			$(':checkbox:checked').each(function(i){
		 				approve_id[i] = $(this).val();
		 			});
		 			if (approve_id.length === 0) {
		 				 Swal.fire(
        	'You have not selected any data to approve'
      )
		 			} else {
		 				$.ajax({
        url: 'assets/php/admin-action.php',
        type: 'POST',
        data:{approve_id:approve_id},
        success:function(response){
        	if (response < 1) {
         	Swal.fire(
            'Failed',
            'Products Approval failed',
            'success'
          )
        } else {
        		Swal.fire(
            'Approved',
            'Products Approved Successfully',
            'success'
          )
        		for(var i=0; i<approve_id.length; i++) {
        		$('tr#'+approve_id[i]+'').css('background-color','#ccc');
        		$('tr#'+approve_id[i]+'').fadeOut('slow');
        	}
        	fetchproducts();
        }
      }
      });
		 			} 
      } 
    }
      ) 

		 	/*	if (confirm("Are you sure you want to Approve these products")) {
		 			var approve_id = [];
		 			$(':checkbox:checked').each(function(i){
		 				approve_id[i] = $(this).val();
		 			}); 
		 			if (approve_id.length === 0) {
		 				alert("You have not selected any product to Approve");
		 			} else {
		 		$.ajax({
        url: 'assets/php/admin-action.php',
        type: 'POST',
        data:{approve_id:approve_id},
        success:function(response){
        	if (response < 1) {
          $("#approvedelete").html('<div class=" alert alert-danger alert-dismissible w3-green w3-animate-zoom"><button type="button" class="close" data-dismiss="alert">&times</button><strong class="text-center">'+response+'</strong></div>');
        } else {
        		$("#approvedelete").html('<div class=" alert alert-danger alert-dismissible w3-green w3-animate-zoom"><button type="button" class="close" data-dismiss="alert">&times</button><strong class="text-center">'+response+'</strong></div>');
        		for(var i=0; i<approve_id.length; i++) {
        		$('tr#'+approve_id[i]+'').css('background-color','#ccc');
        		$('tr#'+approve_id[i]+'').fadeOut('slow');
        	}
        }
      }
      });
		 			}
		 		} else {
		 			return false;
		 		} */
		 });
		 	//View Images Ajax Request
		 $("body").on("click", ".ViewImagesIcon", function(e){
      e.preventDefault();
      viewImages_id = $(this).attr('id');
      $.ajax({
        url: 'assets/php/admin-action.php',
        type: 'POST',
        data:{viewImages_id:viewImages_id},
        success:function(response){
          $(".Images").html(response)
        }
      });
    });
	});
</script>
</body>
</html>