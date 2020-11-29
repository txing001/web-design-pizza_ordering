<?php // register.php
include "dbconnect.php";
if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty ($_POST['password'])
		|| empty ($_POST['password2']) || empty ($_POST['email']) 
		|| empty ($_POST['delivery'])|| empty ($_POST['phone'])){
	echo "All records to be filled in";
	exit;}
	}
$username = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$email = $_POST['email'];
$delivery = $_POST['delivery'];
$phone = $_POST['phone'];


// echo ("$username" . "<br />". "$password2" . "<br />");
if ($password != $password2) {
	echo "Sorry passwords do not match";
	exit;
	}
$password = md5($password);
// echo $password;
$sql = "INSERT INTO users (username, password, email, delivery, phone)
		VALUES ('$username', '$password', '$email', '$delivery', '$phone')";
//	echo "<br>". $sql. "<br>";
$result = $dbcnx->query($sql);

if (!$result)
	echo "Your query failed.";
else
	echo "Welcome ". $username . ". You are now registered<br /> ";
	echo '<a href="login.php">Login and start ordering now!</a><br />';

?>
