<?php
error_reporting(E_STRICT);
session_start();
require_once('inc/header.inc.php');
require_once('inc/db.inc.php');
$skor=$_POST['skor'];
$sql = "UPDATE user SET nilaiwpt = ? WHERE telepon = ?";
$pdo->prepare($sql)->execute([$skor, $_SESSION['telepon']]);
?>

<div class="container-fluid" >
	<div class="row" >
		<div class="col-md-12" >
			<div class="card card-plain">
				<div class="header" style="padding-top: 50px; padding-right: 25px; padding-bottom:20px; margin:35px;">
						<p><h5> Skor Tes WPT anda : <?php echo "$skor"; ?>
						</h5></p>
						
						
					</form>
				</div>

				</div>
			</div>
		</div>

	</div>
</div>

<?php 
header("location: ./mode.php");

require_once('inc/footer.inc.php'); ?>
