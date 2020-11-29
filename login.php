<?php //authmain.php
include "dbconnect.php";
session_start();

if (isset($_POST['username']) && isset($_POST['password']))
{
  // if the user has just tried to log in
  $username = $_POST['username'];
  $password = $_POST['password'];
/*
  $db_conn = new mysqli('localhost', 'webauth', 'webauth', 'auth');

  if (mysqli_connect_errno()) {
   echo 'Connection to database failed:'.mysqli_connect_error();
   exit();
  }
*/
$password = md5($password);
  $query = 'select * from users '
           ."where username='$username' "
           ." and password='$password'";
// echo "<br>" .$query. "<br>";
  $result = $dbcnx->query($query);
  $row=mysqli_fetch_assoc($result); //1111
  $delivery=$row['delivery']; //1111
  $phone=$row['phone'];
  $email=$row['email'];

  if ($result->num_rows >0 )
  {
    // if they are in the database register the user id
    $_SESSION['valid_user'] = $username;
  }
  $dbcnx->close();
}
?>
<html lang="en">
<head>
  <title> The pizzeria - taste the flavor from Italy! </title>
  <meta charset="utf-8">
  <link rel="stylesheet"  href="style.css">
</head>
<body>
  <div id="wrapping">

  <header>
    <div class="logo">
	  <a href="menu.php">
        <img src="header.png">
    </div>
		<div id="menuButton">
			<a href="menu.php" style="margin-right: 50px">Menu</a>
			<a href='ordersearch.html'>Track order</a>
		</div>
		<div id="login" style="margin-top: 120px">
      <?php
        if ($_SESSION['valid_user'] == null)
        {
          echo "<a href='signup.html'>New User?</a>";
        }
       ?>

    <?php
      if ($_SESSION['valid_user'] != null)
      {
        echo "<a href='profile.php'>" .$_SESSION['valid_user']. "</a>";
      }
     ?>
     </div>
    </header>
  <div class='content'>
    <h1>Login Successful</h1>
    <?php
      if (isset($_SESSION['valid_user']))
      {
        echo 'You are logged in as: '.$_SESSION['valid_user'].' <br /><br />';
        echo 'Your delivery address: '.$delivery.' <br/>';
        echo 'Your phone number: '.$phone.' <br/>';
        echo 'Your email: '.$email.' <br /><br/>';
        echo '<a style="color:purple;" href="profile.php">Change your details here</a><br/>';
        echo '<a style="color:red;" href="logout.php">Log out</a><br /><br/>';
        echo '<a style="color:purple;" href="menu.php">Start ordering here!</a><br/><br/>';


      }
      else
      {
        if (isset($username))
        {
          // if they've tried and failed to log in
          echo 'Could not log you in.<br />';
        }
        else
        {
          // they have not tried to log in yet or have logged out
          echo 'You are not logged in.<br />';
        }

        // provide form to log in
        echo '<form method="post" action="login.php">';
        echo '<table>';
        echo '<tr><td>Username:</td>';
        echo '<td><input type="text" name="username"></td></tr>';
        echo '<tr><td>Password:</td>';
        echo '<td><input type="password" name="password"></td></tr>';
        echo '<tr><td colspan="2" align="center">';
        echo '<input type="submit" value="Log in"></td></tr>';
        echo '</table></form>';
      }
    ?>
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
          <h4>Credit cards & Cash on delvery</h4>
          <h3 style="color: #F39D34">Check our lastest promotions on home page!</h3></p>
        </div>
  </footer>
  </div>
</body>
</html>
