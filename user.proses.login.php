<?php
require_once('inc/db.inc.php');
$nama=$_POST['name'];
$telepon=$_POST['phone'];
//$result = $pdo->prepare('SELECT telepon from user');
//$result->execute([]);
//foreach ($result as $row)
//if ($telepon === $row['telepon']) {
//	echo "Failed";
//}
//else {
$sql="INSERT INTO user (
		nama,
		telepon) VALUES (?,?)
	";
try {
		$pdo->prepare($sql)->execute([$nama,
			 $telepon]);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
}
catch (Exception $e) {
    echo 'Exception -> ';
    var_dump($e->getMessage());
}
session_start();
$_SESSION['telepon'] = $telepon;

header("location: ./mode.php");
//}
?>
