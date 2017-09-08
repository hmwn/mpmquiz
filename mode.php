
<?php require_once('inc/header.inc.php');
require_once('inc/db.inc.php');
?>
<div class="container-fluid" >
	<div class="row" >
		<div class="col-md-12" >
			<div class="card card-plain">
				<div class="header" style="padding-top: 50px; padding-right: 25px; padding-bottom:20px; margin:35px;">
				<?php $result = $pdo->prepare('SELECT nilaiwpt,nilaiCfit from user WHERE telepon=?');
							$result->execute([$_SESSION['telepon']]);
							foreach ($result as $row)
							if ($row['nilaiwpt']=== NULL && $row['nilaiCfit'] === NULL ) {?>
									<p><a href="wptsample.php"><button class="btn btn-primary">Wonderlic Personnel Test (WPT)</button></a></p>
						<p><a href="ciftsample.php"><button class="btn btn-primary" disabled>Culture Fair Intelligent Test (CFIT)</button></a></p>
					<?php  }
				if ( $row['nilaiwpt']!== NULL && $row['nilaiCfit'] === NULL ) {?>
						<p><a href="#"><button class="btn btn-primary" disabled>Wonderlic Personnel Test (WPT)</button></a></p>
						<p><a href="ciftsample.php"><button class="btn btn-primary" >Culture Fair Intelligent Test (CFIT)</button></a></p>
					<?php }
				 if ($row['nilaiwpt'] !== NULL && $row['nilaiCfit'] !== NULL ) {?>
									<p><a href="wptsample.php"><button class="btn btn-primary" disabled>Wonderlic Personnel Test (WPT)</button></a></p>
						<p><a href="ciftsample.php"><button class="btn btn-primary" disabled>Culture Fair Intelligent Test (CFIT)</button></a></p>
						<p>Anda sudah mengerjakan seluruh tes.</p>
					<?php } ?>
				</div>

				</div>
			</div>
		</div>

	</div>
</div>

<?php require_once('inc/footer.inc.php'); ?>
