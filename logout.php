<?php
  session_start();

  // store to test if they *were* logged in
  $old_user = $_SESSION['valid_user'];
  unset($_SESSION['valid_user']);
  session_destroy();
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
<h1>Log out</h1>
<?php
  if (!empty($old_user))
  {
    echo 'Logged out.<br />';
  }
  else
  {
    // if they weren't logged in but came to this page somehow
    echo 'You were not logged in, and so have not been logged out.<br /><br />';
  }
?>
<a href="login.php" style="color:purple">Back to Log in page</a><br>

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
