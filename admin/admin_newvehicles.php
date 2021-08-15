
<?php 
require_once 'assets/php/admin-header.php';
require_once 'assets/php/admin-db.php';
$admin = new Admin();
$tablename = "vehicles";
 ?>


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
				$data = $admin->fetchproductsbycategory($tablename);
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
				<th>TYPE</th>
				<th>Image</th>
				<th>Category</th>
				<th>Brand</th>
				<th>Price</th>
				<th>Status</th>
				<th>Description</th>
				<th>Date Uploaded</th>
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
			 		<td><?=$row['vehicletype'] ?></td>
		<td><img src="../products/<?=$row['coverimage'] ?>" class="img-fluid  rounded-circle"></td>
		<td><?=$row['category'] ?></td>
		<td><?=$row['make'] ?></td>
		<td><?=$row['Price'] ?></td>
		<td><?=$row['status'] ?></td>
		<td><?=$row['Description'] ?></td>
		<td><?=$row['Dateuploaded'] ?></td>
		<td>
			<a href="#" id="<?=$row['PSN'] ?>" pc="<?=$row['category'] ?>" title="View Details" class="text-primary ProductDetails" data-toggle="modal" data-target="#ShowShopDetails"><i class="fas fa-info-circle fa-lg"></i></a>&nbsp;&nbsp;
			<a href="#" id="<?=$row['PSN'] ?>" pc="<?=$row['category'] ?>" title="View Images" class="text-secondary ViewImagesIcon" data-toggle="modal" data-target="#images-modal"><i class="fas fa-info-circle fa-lg"></i></a>
			<a href="#" id="<?=$row['PSN'] ?>" title="Delete Shop" class="text-danger deleteproductIcon"><i class="fas fa-trash-alt fa-lg"></i></a>&nbsp;&nbsp;
			<a href="#" id="<?=$row['PSN'] ?>" title="Approve Product" class="text-info approveproduct">Approved</a>&nbsp;&nbsp;
		</td>
		</tr>
			 <?php } else {?>
			
			 	 	<tr id="<?=$row['PSN'] ?>">
			 	 		<td><input type="checkbox" class="checkItem" value="<?=$row['PSN'] ?>" name="sn[]"></td>
			 		<td><?=$row['vehicletype'] ?></td>
		<td><img src="../products/<?=$row['coverimage'] ?>" class="img-fluid  rounded-circle"></td>
		<td><?=$row['category'] ?></td>
		<td><?=$row['make'] ?></td>
		<td><?=$row['Price'] ?></td>
		<td><?=$row['status'] ?></td>
		<td><?=$row['Description'] ?></td>
		<td><?=$row['Dateuploaded'] ?></td>
		<td>
			<div class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Action</a>
				<div class="dropdown-menu">
			<a href="#" id="<?=$row['PSN'] ?>" pc="<?=$row['category'] ?>" title="View Details" class="text-primary ProductDetails dropdown-item" data-toggle="modal" data-target="#ShowShopDetails"><i class="fas fa-info-circle fa-lg"></i>Details</a>&nbsp;&nbsp;
			<a href="#" id="<?=$row['PSN'] ?>" pc="<?=$row['category'] ?>" title="View Images" class="text-secondary ViewImagesIcon dropdown-item" data-toggle="modal" data-target="#images-modal"><i class="fas fa-info-circle fa-lg"></i>Images</a>
			</div>
			</div>
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
							<p id="getcategory"></p>
							<p id="gettype"></p>
							<p id="getmake"></p>
							<p id="getmodel"></p>
							<p id="getyom"></p>
							<p id="gethosepower"></p>
							<p id="getseats"></p>
							<p id="getfuel"></p>
							<p id="getwheelsnumber"></p>
							<p id="getstatus"></p>
							<p id="getprice"></p>
							<p id="getDescription"></p>
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
		$("body").on("click", ".ProductDetails", function(e){
			e.preventDefault();
			 pid = $(this).attr('id');
			 category = $(this).attr('pc');

			$.ajax({
				url: 'assets/php/admin-action.php',
				method: 'post',
				data: { pid:pid, category:category },
				success:function(response){
					console.log(pid,category);
					data = JSON.parse(response);
					$("#getName").text('ID: '+data.PSN);
					$("#getOwner").text('Owner : '+data.owner);
					$("#getcategory").text('Category : '+data.category);
					$("#gettype").text('Type : '+data.vehicletype);
					$("#getmake").text('MAKE : '+data.make);
					$("#getmodel").text('Model : '+data.model);
					$("#getyom").text('Year of Manufacture : '+data.YearofManufacture);
					$("#gethosepower").text('Hosepower : '+data.hosepower);
					$("#getseats").text('Seats : '+data.seats);
					$("#getfuel").text('Battery : '+data.Fuel);
					$("#getwheelsnumber").text('Wheelsnumber : '+data.wheelsnumber);
					$("#getstatus").text('Condition : '+data.status);
					$("#getprice").text('Price : '+data.Price);
					$("#getDescription").text('Description : '+data.Description); 
					
					if (data.image != ' ') {
						$("#getimage").html('<img src="../Uploads/'+data.coverimage+'" class="img-thumbnail img-fluid">');
					}
					else{
					$("#getimage").html('<img src="../Uploads/images.jpeg" class="img-thumbnail img-fluid">');	
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
        var approvevehicle_id = [];
		 			$(':checkbox:checked').each(function(i){
		 				approvevehicle_id[i] = $(this).val();
		 			});
		 			if (approvevehicle_id.length === 0) {
		 				 Swal.fire(
        	'You have not selected any data to approve'
      )
		 			} else {
		 				$.ajax({
        url: 'assets/php/admin-action.php',
        type: 'POST',
        data:{approvevehicle_id:approvevehicle_id},
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
        		for(var i=0; i<approvevehicle_id.length; i++) {
        		$('tr#'+approvevehicle_id[i]+'').css('background-color','#ccc');
        		$('tr#'+approvevehicle_id[i]+'').fadeOut('slow');
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
      category = $(this).attr('pc');
      $.ajax({
        url: 'assets/php/admin-action.php',
        type: 'POST',
        data:{viewImages_id:viewImages_id, category:category},
        success:function(response){
          $(".Images").html(response)
        }
      });
    });
	});
</script>
</body>
</html>