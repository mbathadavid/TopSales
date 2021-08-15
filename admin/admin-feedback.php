
<?php 
require_once 'assets/php/admin-header.php';
 ?>
 <div class="col">
	<div class="row">
	<div class="col-lg-12">
		<div class="card my-2 border-warning">
			<div class="card-header bg-warning text-white">
				<h4 class="m-0">Total Shop Feedbacks</h4>
			</div>
			<div class="card-body">
				<div class="table-responsive" id="feedbacks">
					<p class="text-center align-self-center lead">Please Wait...</p>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<div class="modal fade" id="showReplyModal">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h4>Reply This Message</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<form method="post" action="#" class="px-3" id="feedback-reply-form">
					<div class="form-group">
						<textarea name="message" id="message" class="form-control" row="20" placeholder="Reply Here" required></textarea>
					</div>
					<div class="form-group">
						<input type="submit" name="submit" value="Send Reply" class="btn btn-primary btn-block" id="messageReplyBtn">
					</div>
				</form>
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
		//Fetch All Users Ajax Request
		fetchfeedbacks();
		function fetchfeedbacks(){
			$.ajax({
				url: 'assets/php/admin-action.php',
				method: 'post',
				data: { action: 'fetchfeedbacks' },
				success:function(response){
					$("#feedbacks").html(response);
					//console.log(response);
				}
			});
		}
		//Get the Current Row Shop ID and Feedback ID
		var sid;
		var fid;
		$("body").on("click", ".replyFeedbackIcon", function(e){
			sid = $(this).attr('fid');
			fid = $(this).attr('id');
//Send Message Reply to the Shop
		$("#messageReplyBtn").click(function(e){
			if ($("#feedback-reply-form")[0].checkValidity()) {
				let message = $("#message").val();
				e.preventDefault();
				$("#messageReplyBtn").val("Please Wait...");

				$.ajax({
					url: 'assets/php/admin-action.php',
					method: 'post',
					data: { sid:sid, message:message, fid:fid},
					success:function(response){
						$("#messageReplyBtn").val("Send Reply");
						$("#showReplyModal").modal('hide');
						$("#feedback-reply-form")[0].reset();
					/*	Swal.fire(
							'sent',
							'Reply Send Successfully To The Shop',
							'Success'
						) */
						fetchfeedbacks();
					}
				});
			}
		});
		});
	});
</script>
</body>
</html>