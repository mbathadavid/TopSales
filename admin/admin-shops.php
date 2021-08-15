
<?php 
require_once 'assets/php/admin-header.php';
 ?>



<div class="col">
	<div class="row">
	<div class="col-lg-12">
		<div id="delAlert"></div>
		<div class="card my-2 border-success">
			<div class="card-header bg-success text-white">
				<h4 class="m-0">Total Registered Shops</h4>
			</div>
			<div class="card-body">
				<div class="table-responsive" id="fetchshops">
					<p class="text-center align-self-center lead">Please Wait...</p>
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
 <!---footer area-->
 	</div>	
</div>
</div>
 <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#shops").click(function(e){
			e.preventDefault();
			$("#shopsdiv").show();
			$("#addshopform").hide();
		});
		$("#addshop").click(function(e){
			e.preventDefault();
			$("#addshopform").show();
			$("#shopsdiv").hide();
		});
		//Fetch All Users Ajax Request
		fetchshops();
		function fetchshops(){
			$.ajax({
				url: 'assets/php/admin-action.php',
				method: 'post',
				data: { action: 'fetchshops' },
				success:function(response){
					$("#fetchshops").html(response);
					 $("table").DataTable({
            order: [0, 'desc']
          });
				}
			});
		}
		//Display Shop in Details Mode
		$("body").on("click", ".UserDetailsIcon", function(e){
			e.preventDefault();
			details_id = $(this).attr('id');
			$.ajax({
				url: 'assets/php/admin-action.php',
				method: 'post',
				data: { details_id:details_id },
				success:function(response){
					data = JSON.parse(response);
					$("#getName").text(data.ShopName+' '+'(ID: '+data.SN+')');
					$("#getOwner").text('Owner : '+data.Owner);
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

					if (data.Profile != '') {
						$("#getimage").html('<img src="../Profiles/'+data.Profile+'" class="img-thumbnail img-fluid">');
					}
					else{
					$("#getimage").html('<img src="../Profiles/images.jpeg" class="img-thumbnail img-fluid">');	
					}
				}
			});
		});
		//Delete Shop Ajax Request
		 $("body").on("click", ".deleteUserIcon", function(e){
      e.preventDefault();
      del_id = $(this).attr('id');
      $.ajax({
        url: 'assets/php/admin-action.php',
        type: 'POST',
        data:{del_id:del_id},
        success:function(response){
          $("#delAlert").html('<div class=" alert alert-danger alert-dismissible w3-green w3-animate-zoom"><button type="button" class="close" data-dismiss="alert">&times</button><strong class="text-center">'+response+'</strong></div>');
           fetchshops();
        }
      });
    });

	});
</script>
</body>
</html>