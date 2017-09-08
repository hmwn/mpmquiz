<?php
error_reporting(E_STRICT);
session_start();
require_once('inc/header.inc.php');
require_once('inc/db.inc.php');
$skor=$_POST['skor'];
$sql = "UPDATE user SET nilaiCfit = ? WHERE telepon = ?";
$pdo->prepare($sql)->execute([$skor, $_SESSION['telepon']]);
?>

<div class="container-fluid" >
	<div class="row" >
		<div class="col-md-12" >
			<div class="card card-plain">
				<div class="header" style="padding-top: 50px; padding-right: 25px; padding-bottom:20px; margin:35px;">
				<center><strong><h2>Result</h2></strong></center>
					<?php $result = $pdo->prepare('SELECT distinct nilaiwpt,nilaiCfit from user WHERE telepon = ?'); ?>
						<p><h5> Skor Tes WPT anda : <?php $result->execute([$_SESSION['telepon']]);
						foreach ($result as $row)
							{
							   echo $row['nilaiwpt'] . "\n";
							}

							?><p><h5> Skor Tes CFIT anda : <?php $result->execute([$_SESSION['telepon']]);
						foreach ($result as $row)
							{
							   echo $row['nilaiCfit'] . "\n";
							}

							?>
						</h5></p>
						<p><h5><center> Thank you
						<!--<p><a href="logout.php">Selesai</a></p>-->
						</center></h5></p>

					</form>
				</div>

				</div>
			</div>
		</div>

	</div>
</div>

<?php require_once('inc/footer.inc.php'); ?>
