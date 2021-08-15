
<?php 
require_once 'assets/php/admin-header.php';
 ?>
<div class="col">
	<div class="row">
	<div class="col-lg-12">
		<div id="restoreAlert"></div>
		<div class="card my-2 border-danger">
			<div class="card-header bg-danger text-white">
				<h4 class="m-0">Total Registered Shops</h4>
			</div>
			<div class="card-body">
				<div class="table-responsive" id="ShowAllDeletedShops">
					<p class="text-center align-self-center lead">Please Wait...</p>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

 <!---footer area-->
 	</div>
 </div>	
</div>
<script type="text/javascript">
	$(document).ready(function(){
		//Deleted Users Ajax Request
		fetchAlldeletedshops();
		function fetchAlldeletedshops(){
			$.ajax({
				url: 'assets/php/admin-action.php',
				method: 'post',
				data: { action: 'fetchdeletedshops' },
				success:function(response){
					$("#ShowAllDeletedShops").html(response);
				}
			});
		}

		//Restore Deleteted Shop Ajax Request
		 $("body").on("click", ".restoreShopIcon", function(e){
      e.preventDefault();
      restore_id = $(this).attr('id');
      $.ajax({
        url: 'assets/php/admin-action.php',
        type: 'POST',
        data:{restore_id:restore_id},
        success:function(response){
          $("#restoreAlert").html('<div class=" alert alert-danger alert-dismissible w3-green w3-animate-zoom"><button type="button" class="close" data-dismiss="alert">&times</button><strong class="text-center">'+response+'</strong></div>');
           fetchAlldeletedshops();
        }
      });
    });

	});
</script>
</body>
</html>