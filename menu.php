<?php
	session_start();
	$username1 = $_SESSION['valid_user'];

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
	for ($i=1;$i<11;$i++)
	{
    $sql = "SELECT * FROM pizzaPrice WHERE id='$i'";
    $result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result); 
	$price[$i] = $row['price'];
	}

	mysqli_close($conn);
?>
<html lang="en">
<head>
  <title> The pizzeria - taste the flavor from Italy! </title>
  <meta charset="utf-8">
  <link rel="stylesheet"  href="style.css">
  <style>
	table img {
		width:100px;
		height:100px;
	}
	#center {
		margin: auto;
		width: 50%;
	}
  </style>
</head>
<body>
  <div id="wrapping">
  <header>
    <div class="logo">
      <img src="header.png">
    </div>
		<div id="menuButton">
			<?php
			if($_SESSION['valid_user'] == null)
				{
				echo 'Please login to start ordering!';
				}
			else{
				echo "<a href='ordersearch.html'>Track order</a>";
			}
			?>
			
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
		<script type = "text/javascript"  src = "qtycheck.js"></script>
    </header>
	<div id="center">
  <form id="info" method="post" action="checkout.php">
	<table class="center">
	<thead>
	  <tr>
		<th colspan="2">Pizza</th>
		<th>Price</th>
		<?php 
		if($username1 != null)
		{
			echo "<th>Quantity</th>";
		}
		?>
	  </tr>
	  </thead>
	  <tbody>
	  <tr>
		<td><img src="hp.jpg"></td> <!--https://www.pizzahut.com.sg/order/pizza-->
		<td>Hawaiian Pizza</td>
		<td>
			<label>
			<?php
			if($username1 != null)
			{
				echo '<input type="radio" name="hpButton" value=' .$price[1]. ' checked="checked"/>';
			}
			?>9" $<?php echo $price[1]; ?><br></label>
			<label>
			<?php
			if($username1 != null)
			{
				echo '<input type="radio" name="hpButton" value=' .$price[2]. ' />';
			}
			?>12" $<?php echo $price[2]; ?></label>
		</td>
		<?php 
		if($username1 != null)
		{
			echo '<td><input type="number" id="hp" name="hp" value="0"></td>';
		}
		?>		
	  </tr>
	  <tr>
		<td><img src="pp.jpg"></td> <!--https://www.pizzahut.com.sg/order/pizza-->
		<td>Pepperoni Pizza</td>
		<td>
			<label>
			<?php
			if($username1 != null)
			{
				echo '<input type="radio" name="ppButton" value=' .$price[3]. ' checked="checked"/>';
			}
			?>9" $<?php echo $price[3]; ?><br></label>
			<label>
			<?php
			if($username1 != null)
			{
				echo '<input type="radio" name="ppButton" value=' .$price[4]. ' />';
			}
			?>12" $<?php echo $price[4]; ?></label>
		</td>
		<?php 
		if($username1 != null)
		{
			echo '<td><input type="number" id="pp" name="pp" value="0"></td>';
		}
		?>			
	  </tr>
	  <tr>
		<td><img src="qf.jpg"></td> <!--https://www.insidetherustickitchen.com/quattro-formaggi-pizza/-->
		<td>Quattro Formaggi</td>
		<td>
			<label>
			<?php
			if($username1 != null)
			{
				echo '<input type="radio" name="qfButton" value=' .$price[5]. ' checked="checked"/>';
			}
			?>9" $<?php echo $price[5]; ?><br></label>
			<label>
			<?php
			if($username1 != null)
			{
				echo '<input type="radio" name="qfButton" value=' .$price[6]. ' />';
			}
			?>12" $<?php echo $price[6]; ?></label>
		</td>
		<?php
		if($username1 != null)
		{
			echo '<td><input type="number" id="qf" name="qf" value="0"></td>';
		}
		?>				
	  </tr>
	  <tr>
		<td><img src="vl.jpg"></td> <!--https://www.pizzahut.com.sg/order/pizza-->
		<td>Veggie Lovers</td>
		<td>
			<label>
			<?php
			if($username1 != null)
			{
				echo '<input type="radio" name="vlButton" value=' .$price[7]. '  checked="checked"/>';
			}
			?>9" $<?php echo $price[7]; ?><br></label>
			<label>
			<?php
			if($username1 != null)
			{
				echo '<input type="radio" name="vlButton" value=' .$price[8]. ' />';
			}
			?>12" $<?php echo $price[8]; ?></label>
		</td>
		<?php
		if($username1 != null)
		{
			echo '<td><input type="number" id="vl" name="vl" value="0"></td>';
		}
		?>
	  </tr>
	  <tr>
		<td><img src="mp.jpg"></td> <!--https://www.pizzahut.com.sg/order/pizza-->
		<td>Margherita Pizza</td>
		<td>
			<label>
			<?php
			if($username1 != null)
			{
				echo '<input type="radio" name="mpButton" value=' .$price[9]. '  checked="checked"/>';
			}
			?>9" $<?php echo $price[9]; ?><br></label>
			<label>
			<?php
			if($username1 != null)
			{
				echo '<input type="radio" name="mpButton" value=' .$price[10]. ' />';
			}
			?>12" $<?php echo $price[10]; ?></label>
		</td>
		<?php
		if($username1 != null)
		{
			echo '<td><input type="number" id="mp" name="mp" value="0"></td>';
		}
		?>		
	  </tr>
	  </tbody>
	  <tfoot>
	  <tr>
		<td></td>
		<td></td>
		<td></td>
		<?php
		if($username1 != null)
		{
			echo '<td><input type="submit" value="Checkout"></td>';
		}
		?>
	  </tr>
	  </tfoot>
	</table>
	
	</form>
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
  <script type = "text/javascript"  src = "qtycheckr.js"></script>
</body>
</html>
