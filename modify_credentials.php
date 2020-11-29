<?php

include "dbconnect.php";
session_start();

$password = $_POST['password'];
$password2 = $_POST['password2'];
$email = $_POST['email'];
$delivery = $_POST['delivery'];
$phone = $_POST['phone'];
$username = $_SESSION['valid_user'];



$password = md5($password);
// echo $password;
$sql = "UPDATE users
		SET password='$password', email='$email', delivery='$delivery', phone='$phone'
		WHERE username='$username' ";
//	echo "<br>". $sql. "<br>";
$result = $dbcnx->query($sql);
?>
<html lang="en">
<head>
  <title> The pizzeria - taste the flavor from Italy! </title>
  <meta charset="utf-8">
  <link rel="stylesheet"  href="style.css">
  <script type="text/javascript" src="modify_credentials.js"></script>
  <script type = "text/javascript"  src = "pswd_chk.js"></script>
</head>
<body>
<div id='wrapping'>
<header>
    <div class="logo">
      <img src="header.png">
    </div>
    <div id="menuButton">
      <a href="menu.php" style="margin-right: 50px">Menu</a>
	  <a href='ordersearch.html'>Track order</a>
    </div>

    </header>
	<h1><?php
	if (!$result)
{
	echo "Your query failed.";
	echo $password;
	echo $password2;
	echo $email;
	echo $delivery;
	echo $phone;
	echo $username;
}
else{
	echo "congratulations.". $username . ". Your profile is now updated<br />";
}
?></h1>
<p><a href="menu.php" style='color:purple'>Back to menu page and start ordering!</a></p>

<footer>
      <div id="left">
          <img src='header.png'>
          <h3 style="color: #FAC043">The pizzeria Singapore</h3>

          <h5>&copy;The pizzeria Singapore Pte Ltd</h5>
        </div>
      <div id='right'>
          <p>
            <h2>Contact us:</h2>
            <h3 style="color:#F39D34">8941 5078</h2>
            <a href="mailto:pizzeria@sg.com" style="color:#F39D34">pizzeria@sg.com</a></p>
          <p><h3>We accept: </h3>
          <h4>Credit cards & Cash on delivery</h4>
          <h3 style="color: #F39D34">Check our lastest promotions on home page!</h3></p>
        </div>
   </footer>
   </div>
</body>

</html>
