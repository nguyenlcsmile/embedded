<?php
// Include config file
include("config.php");

// doc du lieu tu website gui ve
if($_SERVER["REQUEST_METHOD"] == "POST"){

	$wstart = trim($_POST["wstart"]);
	$wstop = trim($_POST["wstop"]);
	$lstart = trim($_POST["lstart"]);
	$lstop = trim($_POST["lstop"]);
	$status1 = trim($_POST['hidden_status1']);
	$status2 = trim($_POST['hidden_status2']);

	echo "Light status:  $status2<br>";

	// gui data xuong database
	$sql1 = "insert into readtime (Wstart,Wstop,Lstart,Lstop) values ('$wstart','$wstop','$lstart',
	'$lstop')";
	$sql2 = "insert into readstatus (Pum_status,Light_status) values ('$status1','$status2')";
	mysqli_query($conn, $sql1);
	mysqli_query($conn, $sql2);

	// ngat ket noi voi database
	mysqli_close($conn);
}
?>