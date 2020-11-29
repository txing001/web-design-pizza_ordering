<?php 
	session_start();
	$servername = "localhost";
    $username = "f33ee";
    $password = "f33ee";
    $dbname = "f33ee";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	$sql = "INSERT INTO ordertracker (status)
	VALUES ('1')";
    $result = mysqli_query($conn, $sql);

	$sql = "SELECT * FROM ordertracker ORDER BY id DESC LIMIT 1";
	$result = mysqli_query($conn, $sql);
	$entry = mysqli_fetch_assoc($result); 
	$tempid = $entry["id"];

	switch ($_POST["hpSize"])
	{
		case 9:
		{
			$temp = $_POST["hpqty"];
			
			$sql = "UPDATE ordertracker
					SET 9hawaiian = '$temp'
                    WHERE id = '$tempid'";

            mysqli_query($conn, $sql);
			break;
		}
		case 12:
		{
			$temp = $_POST["hpqty"];
			
			$sql = "UPDATE ordertracker
					SET 12hawaiian = '$temp'
                    WHERE id = '$tempid'";

            mysqli_query($conn, $sql);
			break;
		}
	}

	switch ($_POST["ppSize"])
	{
		case 9:
		{
			$temp = $_POST["ppqty"];
			
			$sql = "UPDATE ordertracker
					SET 9pepperoni = '$temp'
                    WHERE id = '$tempid'";

            mysqli_query($conn, $sql);
			break;
		}
		case 12:
		{
			$temp = $_POST["ppqty"];
			
			$sql = "UPDATE ordertracker
					SET 12pepperoni = '$temp'
                    WHERE id = '$tempid'";

            mysqli_query($conn, $sql);
			break;
		}
	}

	switch ($_POST["qfSize"])
	{
		case 9:
		{
			$temp = $_POST["qfqty"];
			
			$sql = "UPDATE ordertracker
					SET 9quattro = '$temp'
                    WHERE id = '$tempid'";

            mysqli_query($conn, $sql);
			break;
		}
		case 12:
		{
			$temp = $_POST["qfqty"];
			
			$sql = "UPDATE ordertracker
					SET 12quattro = '$temp'
                    WHERE id = '$tempid'";

            mysqli_query($conn, $sql);
			break;
		}
	}

	switch ($_POST["vlSize"])
	{
		case 9:
		{
			$temp = $_POST["vlqty"];
			
			$sql = "UPDATE ordertracker
					SET 9veggie = '$temp'
                    WHERE id = '$tempid'";

            mysqli_query($conn, $sql);
			break;
		}
		case 12:
		{
			$temp = $_POST["vlqty"];
			
			$sql = "UPDATE ordertracker
					SET 12veggie = '$temp'
                    WHERE id = '$tempid'";

            mysqli_query($conn, $sql);
			break;
		}
	}

	switch ($_POST["mpSize"])
	{
		case 9:
		{
			$temp = $_POST["mpqty"];
			
			$sql = "UPDATE ordertracker
					SET 9margherita = '$temp'
                    WHERE id = '$tempid'";

            mysqli_query($conn, $sql);
			break;
		}
		case 12:
		{
			$temp = $_POST["mpqty"];
			
			$sql = "UPDATE ordertracker
					SET 12margherita = '$temp'
                    WHERE id = '$tempid'";

            mysqli_query($conn, $sql);
			break;
		}
	}
	$tempUN = $_SESSION['valid_user'];
			
			$sql = "UPDATE ordertracker
					SET username = '$tempUN'
                    WHERE id = '$tempid'";

            mysqli_query($conn, $sql);

	mysqli_close($conn);
?>
<?php
$to = "f33ee@localhost";
$subject = "Order Received";
$msg = "We have received your order and it is getting prepared. You can track your order via our order tracker on our website using the ID " .$tempid. ".";
$headers = "From: f33ee@localhost" . "\r\n" ."Reply-To: f33ee@localhost" . "\r\n";

mail($to,$subject,$msg,$headers,"-ff33ee@localhost");
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <title> The pizzeria - taste the flavor from Italy! </title>
    <meta charset="utf-8">
    <link rel="stylesheet"  href="style.css">
    <style>
        .center {
            margin-left: auto;
            margin-right: auto;
			
		}
       
        #wrapping{
	        width:80%;
	        margin: auto;
	        display:grid;
	        background-color: #EACFB1;
	        min-width: 800px;
	        -webkit-box-shadow: 5px 5px 5px 0px rgba(0, 0, 0, 0.75);
	        -moz-box-shadow:    5px 5px 5px 0px rgba(0, 0, 0, 0.75);
	        box-shadow:         5px 5px 5px 0px rgba(0, 0, 0, 0.75);
        }
        header{
          background-color: white;
          height: 150px;
	        border-bottom: solid 3px orange;
        }


.logo {
	text-align: left;
	background-color: white;
	width: 40%;
	float:left;
}
.logo > img {
    max-width: 100%;
    max-height: 100%;
}

#menuButton {
	font-size: 100%;
	width: 40%;
	float:left;
	margin-top: 120px;
}

#login {
	top: 10%;
	left: 88%;
	float:left;
	margin-top: 110px;
}


footer {
	font-size:80%;
	background-color: white;
	color: black;
	padding-bottom: 10px;
	width:100%;
	height: 250px;
	border-top: solid 3px orange;

}
footer img{
	max-width: 100%;
	max-height: 100%;
}
footer > h3{
	color:orange;
}

</style>
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
	<div id="login">
			<?php
				if ($_SESSION['valid_user'] == null)
			{
			  echo "<a  href='login.php'>Log in here</a><br/>";
			  echo "<a href='signup.html'>New User?</a>";
			}
		   ?>

    <?php
      if ($_SESSION['valid_user'] != null)
      {
        echo "<a href='profile.php'>Modify details, ".$_SESSION['valid_user']. "</a><br />";
		echo '<a href="logout.php">Log out</a><br />';
      }
     ?>

		</div>
    </header>
    <div class="center">
    <h1>Your Order had been placed. Your Order ID is <?php echo $tempid; ?></br></h1>
	<p>Our staff is actively preparing your food, please give us some time to process and you can always track your order <a href='ordersearch.html' style="font-size: 110%; color:purple">here</a></p>
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