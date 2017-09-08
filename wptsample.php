
<?php require_once('inc/header.inc.php'); ?>

<div class="container-fluid" >
	<div class="row" >
		<div class="col-md-12" >
			<div class="card card-plain">
				<div class="header" style="padding-top: 20px; padding-right: 25px; padding-bottom:32px; color:grey;">
					<center><strong><h2>WPT Samples</h2></strong></center>
					<form name="wptform" class="form-group" method="post">
						<input type="hidden" name="skor" value="0">
						<!-- question 1 -->
						<p>1. MENUAI adalah lawan kata dari</p>
						<p>Jawaban yang benar adalah “menabur”. Maka, pilihlah angka 5 pada pilihan di bawah</p>
						<table class="table table-responsive table-sm">
							<td>
								<div class="answer">
									<input name="q1" value="a" id="q1-a" type="radio" />
									<label for="q1-a">1.bendapat</label>
								</div>
							</td>
							<td>
								<div class="answer">
									<input name="q1" value="a" id="q1-b" type="radio" />
									<label for="q1-b">2.bersorak</label>
								</div>
							</td>
							<td>
								<div class="answer">
									<input name="q1" value="a" id="q1-c" type="radio" />
									<label for="q1-c">3.melanjutkan</label>
								</div>
							</td>
							<td>
								<div class="answer">
									<input name="q1" value="corr" id="q1-d" type="radio" />
									<label for="q1-d">4.berada</label>
								</div>
							</td>
							<td>
								<div class="answer">
									<input name="q1" value="a" id="q1-e" type="radio" />
									<label for="q1-e">5.menabur</label>
								</div>
							</td>
						</table>
						<p>2. Harga setiap kotak ‘paper clip’ adalah 23 rupiah. Berapa harga 4 kotak?………………………….</p>
						<p>Jawabannya adalahRp.92. Tulislah angka ’Rp. 92’ dalam kolom teks di bawah.</p>
						<table class="table table-responsive table-sm">
							<td>
								<div class="answer">
									<input name="q2" class="form-control" id="q2-a" type="text" />	
								</label>
								</div>
						</td>
						</table>
						<p>3. MINER MINOR - Apakah kata-kata ini</p>
						<p>Jawaban yang benar adalah ‘tidak memiliki arti sama atau berlawanan (Nomor 3). Maka pilihlah
						3 pada pilihan dibawah.</p>
						<table class="table table-responsive table-sm">
							<td>
								<div class="answer">
									<input name="q1" value="a" id="q1-a" type="radio" />
									<label for="q1-a">1.Memiliki arti sama</label>
								</div>
							</td>
							<td>
								<div class="answer">
									<input name="q1" value="a" id="q1-b" type="radio" />
									<label for="q1-b">2.Memiliki arti berlawanan</label>
								</div>
							</td>
							<td>
								<div class="answer">
									<input name="q1" value="a" id="q1-c" type="radio" />
									<label for="q1-c">3.Tidak memiliki arti sama atau berlawanan</label>
								</div>
							</td>
						</table>
						</form>
					<center><p><h4><a href="wpt.php"><i class="fa fa-arrow-right" aria-hidden="true" style="float:middle;">Mulai</i></a></h4></p>
					</center>
				</div>
			</div>
		</div>
	</div>
</div>

<?php require_once('inc/footer.inc.php'); ?>
