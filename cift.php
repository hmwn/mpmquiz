
<?php require_once('inc/header.inc.php'); ?>
<script>
function handleClick()
  {
var amountCorrect = 0;
for(var i = 1; i <= 45; i++) {
  var radios = document.getElementsByName('q'+i);
  for(var j = 0; j < radios.length; j++) {
    var radio = radios[j];
    if(radio.value == "corr" && radio.checked) {
      amountCorrect++;
    }
  }
 }
    document.cfitform.skor.value = ""+amountCorrect;
		return true;
  }
</script>
<link href="assets/css/cfit.css" rel="stylesheet"/>
<div class="container-fluid" >
	<div class="row" >
		<div class="col-md-12" >
			<div class="card card-plain">
				<div class="header" style="padding-top: 20px; padding-right: 25px; padding-bottom:32px; color:grey;">
					<center><strong><h2>CFIT</h2></strong></center>
					</div>
		<div class="quizsection">
			<form name="cfitform" class="form-group" method="post" action="skorcfit.php" onsubmit="handleClick();">
				<input type="hidden" name="skor" value="0">
		<!-- question 1 -->
		<p><center><img src="assets/img/cfit1.png" class="img-responsive" alt="Sample-1" width="65%" height="65%"></center></p>
<table class="table table-responsive table-sm">
	<td>
		<div class="answer">
		<label>
			<input name="q1" value="a" id="value1" type="radio" />
			<img src="assets/img/cfit1-a.png" class="img-responsive">
		</label>
		</div>
</td><td>
		<div class="answer">
		<label>
			<input name="q1" value="corr" id="value2" type="radio" />
			<img src="assets/img/cfit1-b.png" class="img-responsive">
		</label>
		</div>
</td>
<td>
		<div class="answer">
			<label>
			<input name="q1" value="c" id="value133" type="radio" />
			<img src="assets/img/cfit1-c.png" class="img-responsive">
		</label>
		</div>
</td><td>
		<div class="answer">
			<label>
			<input name="q1" value="d" id="value4" type="radio" />
			<img src="assets/img/cfit1-d.png" class="img-responsive">
		</label>
		</div>
</td>
<td>
		<div class="answer">
			<label>
			<input name="q1" value="e" id="value5" type="radio" />
			<img src="assets/img/cfit1-e.png" class="img-responsive">
		</label>
		</div>
</td><td>
		<div class="answer">
			<label>
			<input name="q1" value="f" id="value5" type="radio" />
			<img src="assets/img/cfit1-f.png" class="img-responsive">
		</label>
		</div>
</td>
</table>
<!-- question 2 -->
<p><center><img src="assets/img/cfit2.png" class="img-responsive" alt="Sample-1" width="65%" height="65%"></center></p>
<table class="table table-responsive table-sm">
	<td>
		<div class="answer">
			<label>
			<input name="q2" value="a" id="value1" type="radio" />
			<img src="assets/img/cfit2-a.png" class="img-responsive">
		</label>
		</div>
	</td><td>
		<div class="answer">
			<label>
			<input name="q2" value="a" id="value1" type="radio" />
			<img src="assets/img/cfit2-b.png" class="img-responsive">
		</label>
		</div>
	</td>
	<td>
		<div class="answer">
			<label>
			<input name="q2" value="corr" id="value1" type="radio" />
			<img src="assets/img/cfit2-c.png" class="img-responsive">
		</label>
		</div>
	</td><td>
		<div class="answer">
			<label>
			<input name="q2" value="a" id="value1" type="radio" />
			<img src="assets/img/cfit2-d.png" class="img-responsive">
		</label>
		</div>
	</td>
	<td>
		<div class="answer">
			<label>
			<input name="q2" value="a" id="value1" type="radio" />
			<img src="assets/img/cfit2-e.png" class="img-responsive">
		</label>
		</div>
	</td><td>
		<div class="answer">
			<label>
			<input name="q2" value="a" id="value1" type="radio" />
			<img src="assets/img/cfit2-f.png" class="img-responsive">
		</label>
		</div>
	</td>
</table>

<!-- question 3 -->
<p><center><img src="assets/img/cfit3.png" class="img-responsive" alt="Sample-1" width="65%" height="65%" width="65%" height="65%"></center></p>
<table class="table table-responsive table-sm">
	<tr><td>
		<div class="answer">
			<label>
			<input name="q3" value="a" id="value1" type="radio" />
			<img src="assets/img/cfit3-a.png" class="img-responsive">
		</label>
		</div>
	</td><td>
		<div class="answer">
			<label>
			<input name="q3" value="corr" id="value1" type="radio" />
			<img src="assets/img/cfit3-b.png" class="img-responsive">
		</label>
		</div>
	</td>
	<td>
		<div class="answer">
			<label>
			<input name="q3" value="a" id="value1" type="radio" />
			<img src="assets/img/cfit3-c.png" class="img-responsive">
		</label>
		</div>
	</td><td>
		<div class="answer">
			<label>
			<input name="q3" value="a" id="value1" type="radio" />
			<img src="assets/img/cfit3-d.png" class="img-responsive">
		</label>
		</div>
	</td>
	<td>
		<div class="answer">
			<label>
			<input name="q3" value="a" id="value1" type="radio" />
			<img src="assets/img/cfit3-e.png" class="img-responsive">
		</label>
		</div>
	</td><td>
		<div class="answer">
			<label>
			<input name="q3" value="a" id="value1" type="radio" />
			<img src="assets/img/cfit3-f.png" class="img-responsive">
		</label>
		</div>
	</td></tr>
</table>
<!-- question 4 -->
<p><center><img src="assets/img/cfit4.png" class="img-responsive" alt="Sample-1" width="65%" height="65%"></center></p>
<table class="table table-responsive table-sm">
	<tr><td>
		<div class="answer">
			<label>
			<input name="q4" value="a" id="value1" type="radio" />
			<img src="assets/img/cfit4-a.png" class="img-responsive">
		</label>
		</div>
	</td><td>
		<div class="answer">
			<label>
			<input name="q4" value="a" id="value1" type="radio" />
			<img src="assets/img/cfit4-b.png" class="img-responsive">
		</label>
		</div>
	</td>
	<td>
		<div class="answer">
			<label>
			<input name="q4" value="a" id="value1" type="radio" />
			<img src="assets/img/cfit4-c.png" class="img-responsive">
		</label>
		</div>
	</td><td>
		<div class="answer">
			<label>
			<input name="q4" value="corr" id="value1" type="radio" />
			<img src="assets/img/cfit4-d.png" class="img-responsive">
		</label>
		</div>
	</td>
	<td>
		<div class="answer">
			<label>
			<input name="q4" value="a" id="value1" type="radio" />
			<img src="assets/img/cfit4-e.png" class="img-responsive">
		</label>
		</div>
	</td><td>
		<div class="answer">
			<label>
			<input name="q4" value="a" id="value1" type="radio" />
			<img src="assets/img/cfit4-f.png" class="img-responsive">
		</label>
		</div>
	</td></tr>
</table>

<!-- question 5 -->
<p><center><img src="assets/img/cfit5.png" class="img-responsive" alt="Sample-1" width="65%" height="65%"></center></p>
<table class="table table-responsive table-sm">
	<tr><td><div class="answer">
			<label>
			<input name="q5" value="a" id="value1" type="radio" />
			<img src="assets/img/cfit5-a.png" class="img-responsive">
		</label>
		</div>
	</td><td>
		<div class="answer">
			<label>
			<input name="q5" value="a" id="value1" type="radio" />
			<img src="assets/img/cfit5-b.png" class="img-responsive">
		</label>
		</div>
	</td>
	<td>
		<div class="answer">
			<label>
			<input name="q5" value="a" id="value1" type="radio" />
			<img src="assets/img/cfit5-c.png" class="img-responsive">
		</label>
		</div>
	</td><td>
		<div class="answer">
			<label>
			<input name="q5" value="a" id="value1" type="radio" />
			<img src="assets/img/cfit5-d.png" class="img-responsive">
		</label>
		</div>
	</td>
	<td>
		<div class="answer">
			<label>
			<input name="q5" value="corr" id="value1" type="radio" />
			<img src="assets/img/cfit5-e.png" class="img-responsive">
		</label>
		</div>
	</td><td>
		<div class="answer">
			<label>
			<input name="q5" value="a" id="value1" type="radio" />
			<img src="assets/img/cfit5-f.png" class="img-responsive">
		</label>
		</div>
	</td></tr>
</table>
<center><button type="submit" class="btn btn-primary">Submit CFIT Test</button></center>
</form>
	</div>

			</div>
		</div>
	</div>
</div>

<?php require_once('inc/footer.inc.php'); ?>
