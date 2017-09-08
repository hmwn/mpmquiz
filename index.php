
<?php require_once('inc/header.inc.php');
require_once('inc/db.inc.php');
?>
<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
<!-- WIP -->
$(document).ready(function(){
   $('#loginform').Validate();
});
</script>
<div class="container-fluid" >
	<div class="row" >
		<div class="col-md-12" >
			<div class="card card-plain">
				<div class="header" style="padding-top: 50px; padding-right: 25px; padding-bottom:20px; background-color:orange; color:white;">
					<form method="POST" id="loginform" action="./user.proses.login.php">
					  <div class="form-group">
					    Your name
					    <input type="text" class="form-control" name="name" id="name"  placeholder="Enter your name">
					  </div>
					  <div class="form-group">
					    Phone number
					    <input type="phone" class="form-control" id="phone" name="phone" placeholder="08xxxxxxxxxx">
					  </div>
					  <input type="submit" value="submit" id="btn" class="btn btn-submit"  style="color:orange; background-color: white;  "/>
					</form>
				</div>

				</div>
			</div>
		</div>
	</div>
</div>

<?php require_once('inc/footer.inc.php'); ?>
