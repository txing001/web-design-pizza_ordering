<?php
include "dbconnect.php";
session_start();
$username=$_SESSION['valid_user'];
 ?>

<!DOCTYPE html>
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
    <div id="login" style="color:orange; font-size: 130%" >
      <p>Welcome, <?php echo $username; ?></p>
    </div>

    </header>
  <div class='content'>
    <h3>Modify your credentials here!</h3>
    <br>
    <form method="post" action="modify_credentials.php" id="profile">
      <label>*Email address:</label>
      <input type='email' name='email' id='email' required>
      <label>*Password:</label>
      <input type='password' name='password' id='password' required>
      <label>Confirm Password:</label>
      <input type='password' name='password2' id='confirm_password' required>
      <label>*Phone no. (8 digits):</label>
      <input type='number' name='phone' id='phone_number' required>
      <label>*Delivery address:</label>
      <input type='text' name='delivery' id='delivery' required>
      <input type='submit' name='submit' id='mysubmit',value='Confirm'><br>
      <input type='reset'  name='reset' value='Reset'>
   </form>
   <script type = "text/javascript"  src = "modify_credentials2.js" ></script>
   <script type = "text/javascript">document.getElementById("profile").onsubmit = chkPasswords;</script>
   </div>


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
