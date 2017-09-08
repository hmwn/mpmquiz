
<?php require_once('inc/header.inc.php'); ?>
<script>
function handleClick()
  {
var amountCorrect = 0;
for(var i = 1; i <= 50; i++) {
  var radios = document.getElementsByName('q'+i);
  for(var j = 0; j < radios.length; j++) {
    var radio = radios[j];
    if(radio.value == "corr" && radio.checked) {
      amountCorrect++;
    }
  }
 }
    document.wptform.skor.value = ""+amountCorrect;
		return true;
  }
</script>
<link href="assets/css/wpt.css" rel="stylesheet"/>
<div class="container-fluid" >
	<div class="row" >
		<div class="col-md-12" >
			<div class="card card-plain">
				<div class="header" style="padding-top: 20px; padding-right: 25px; padding-bottom:32px; color:grey;">
				<br>
					<center><strong><h2>WPT</h2></strong></center>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
				<div class="quizsection">
					<form name="wptform" class="form-group" method="post" action="skorwpt.php" onsubmit="handleClick();">
						<input type="hidden" name="skor" value="0">
						<!-- question 1 -->
						<p>1. Bulan terakhir pada awal tahun ini adalah</p>
						<table class="table table-responsive table-sm">
							<td>
								<div class="answer">
									<input name="q1" value="a" id="q1-a" type="radio" />
									<label for="q1-a">1.Januari</label>
								</div>
							</td>
							<td>
								<div class="answer">
									<input name="q1" value="a" id="q1-b" type="radio" />
									<label for="q1-b">2.Maret</label>
								</div>
							</td>
							<td>
								<div class="answer">
									<input name="q1" value="a" id="q1-c" type="radio" />
									<label for="q1-c">3.Juli</label>
								</div>
							</td>
							<td>
								<div class="answer">
									<input name="q1" value="corr" id="q1-d" type="radio" />
									<label for="q1-d">4.Desember</label>
								</div>
							</td>
							<td>
								<div class="answer">
									<input name="q1" value="a" id="q1-e" type="radio" />
									<label for="q1-e">5.Oktober</label>
								</div>
							</td>
						</table>

		<!-- question 2 -->
		<p>2. MENANGKAP adalah lawan kata dari</p>
<table class="table table-responsive table-sm">
	<td>
		<div class="answer">
			<input name="q2" value="a" id="q2-a" type="radio" />
			<label for="q2-a">1.Meletakkan			
		</label>
		</div>
</td><td>
		<div class="answer">
		<input name="q2" value="corr" id="q2-b" type="radio" />
		<label for="q2-b">2.Membebaskan
		</label>
		</div>
</td>
<td>
		<div class="answer">
			<input name="q2" value="a" id="q2-c" type="radio" />
				<label for="q2-c">3.Beresiko
					</label>
		</div>
</td><td>
		<div class="answer">
			<input name="q2" value="a" id="q2-d" type="radio" />
		<label for="q2-d">
			4.Berusaha
		</label>
		</div>
</td>
<td>
		<div class="answer">
			<input name="q2" value="a" id="q2-e" type="radio" />
		<label for="q2-e">5.Turun tingkat
					</label>
		</div>
</td>
</table>

		<!-- question 3 -->
		<p>3. Sebagian besar hal dibawah ini serupa satu sama lain. Manakah salah satu diantaranya yang kurang serupa dengan
yang lain?</p>
<table class="table table-responsive table-sm">
	<td>
		<div class="answer">
			<input name="q3" value="a" id="q3-a" type="radio" />
			<label for="q3-a">1.Januari		
		</label>
		</div>
</td><td>
		<div class="answer">
		<input name="q3" value="a" id="q3-b" type="radio" />
		<label for="q3-b">2.Agustus
		</label>
		</div>
</td>
<td>
		<div class="answer">
			<input name="q3" value="corr" id="q3-c" type="radio" />
				<label for="q3-c">3.Rabu
					</label>
		</div>
</td><td>
		<div class="answer">
			<input name="q3" value="a" id="q3-d" type="radio" />
		<label for="q3-d">
			4.Oktober
		</label>
		</div>
</td>
<td>
		<div class="answer">
			<input name="q3" value="a" id="q3-e" type="radio" />
		<label for="q3-e">5.Desember
					</label>
		</div>
</td>
</table>

<!-- question 4 -->
		<p>4. Jawablah dengan menuliskan YA atau TIDAK. Apakah “VIP” berarti ‘jawablah yang tidak perlu</p>
<table class="table table-responsive table-sm">
	<td>
		<div class="answer">
			<input name="q4-a" value="a" id="q4-a" type="radio" />
			<label for="q4-a">1.YA		
		</label>
		</div>
</td><td>
		<div class="answer">
		<input name="q4" value="corr" id="q4-b" type="radio" />
		<label for="q4-b">2.TIDAK
		</label>
		</div>
	</td>
</table>
<!-- question 5 -->
<p>5.Dalam kelompok kata berikut, manakah kata yang berbeda dari kata yang lain?</p>
<table class="table table-responsive table-sm">
	<td>
		<div class="answer">
			<input name="q5" value="a" id="q5-a" type="radio" />
			<label for="q5-a">1.Pasukan	
		</label>
		</div>
</td><td>
		<div class="answer">
		<input name="q5" value="a" id="q5-b" type="radio" />
		<label for="q5-b">2.Liga
		</label>
		</div>
</td>
<td>
		<div class="answer">
			<input name="q5" value="corr" id="q5-c" type="radio" />
				<label for="q5-c">3.Berpartisipasi
					</label>
		</div>
</td><td>
		<div class="answer">
			<input name="q5" value="a" id="q5-d" type="radio" />
		<label for="q5-d">
			4.Pak
		</label>
		</div>
</td>
<td>
		<div class="answer">
			<input name="q5" value="a" id="q5-e" type="radio" />
		<label for="q5-e">5.Kelompok
					</label>
		</div>
</td>
</table>
<center><button type="submit" class="btn btn-primary">Submit WPT Test</button></center>
</form>
	</div>
			</div>
<!-- 		</div>
	</div>
</div> -->

<?php require_once('inc/footer.inc.php'); ?>
