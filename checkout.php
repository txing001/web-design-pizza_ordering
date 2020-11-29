<?php
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
<!DOCTYPE html>
<html>
<head>
<title> The pizzeria - taste the flavor from Italy! </title>
<meta charset="utf-8">
<link rel="stylesheet"  href="style.css">
<style>
th, tr {
    text-align: center;
}
.payButton {
   float: right;
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
			<a href="menu.php">Menu</a>
		</div>
		<div id="login">
			<a style="text-decoration:none" href="login.html"></a><br>
			<a style="text-decoration:none" href="signup.html">New User?</a>
		</div>
    </header>
    <table>
        <thead>
	        <tr>
		        <th>Pizza</th>
		        <th>Quantity</th>
                <th>Subtotal</th>
	        </tr>
	    </thead>
	    <?php
        $subtotal_hp = 0;
        $subtotal_pp = 0;
        $subtotal_qf = 0;
        $subtotal_vl = 0;
        $subtotal_mp = 0;
        $hpSize = 0;
        $ppSize = 0;
        $qfSize = 0; 
        $vlSize = 0; 
        $mpSize = 0;
        $hpqty =  $_POST["hp"] + 0;
        $ppqty =  $_POST["pp"] + 0;
        $qfqty =  $_POST["qf"] + 0;
        $vlqty =  $_POST["vl"] + 0;
        $mpqty =  $_POST["mp"] + 0;

        if ($_POST["hp"] != "0")
        {
		    switch($_POST["hpButton"]) 
            {
            case "11.50":
                {
                    $hpSize = 9;
                    $quantity = $_POST["hp"] + 0;
                    $subtotal_hp = $quantity * $price[1];
                    echo "
                        <tr>
                            <td>9 Inch Hawaiian Pizza</td>
                            <td>".$quantity."</td>
                            <td>$".$subtotal_hp."</td>
                        </tr>
                        ";
                    break;
                }
            case "14.50":
                 {
                    $hpSize = 12;
                    $quantity = $_POST["hp"] + 0;
                    $subtotal_hp = $quantity * $price[2];
                    echo "
                        <tr>
                            <td>12 Inch Hawaiian Pizza</td>
                            <td>".$quantity."</td>
                            <td>$".$subtotal_hp."</td>
                        </tr>
                        ";
                    break;
                }
            }
        }
         if ($_POST["pp"] != "0")
        {
		    switch($_POST["ppButton"]) 
            {
            case "12.50":
                {
                    $ppSize = 9;
                    $quantity = $_POST["pp"] + 0;
                    $subtotal_pp = $quantity * $price[3];
                    echo "
                        <tr>
                            <td>9 Inch Pepperoni Pizza</td>
                            <td>".$quantity."</td>
                            <td>$".$subtotal_pp."</td>
                        </tr>
                        ";
                    break;
                }
            case "15.50":
                 {  
                    $ppSize = 12;
                    $quantity = $_POST["pp"] + 0;
                    $subtotal_pp = $quantity * $price[4];
                    echo "
                        <tr>
                            <td>12 Inch Pepperoni Pizza</td>
                            <td>".$quantity."</td>
                            <td>$".$subtotal_pp."</td>
                        </tr>
                        ";
                    break;
                }
            }
        }
         if ($_POST["qf"] != "0")
        {
		    switch($_POST["qfButton"]) 
            {
            case "10.50":
                {
                    $qfSize = 9;
                    $quantity = $_POST["qf"] + 0;
                    $subtotal_qf = $quantity * $price[5];
                    echo "
                        <tr>
                            <td>9 Inch Quattro Formaggi</td>
                            <td>".$quantity."</td>
                            <td>$".$subtotal_qf."</td>
                        </tr>
                        ";
                    break;
                }
            case "13.50":
                 {
                    $qfSize = 12;
                    $quantity = $_POST["qf"] + 0;
                    $subtotal_qf = $quantity * $price[6];
                    echo "
                        <tr>
                            <td>12 Inch Quattro Formaggi</td>
                            <td>".$quantity."</td>
                            <td>$".$subtotal_qf."</td>
                        </tr>
                        ";
                    break;
                }
            }
        }
         if ($_POST["vl"] != "0")
        {
		    switch($_POST["vlButton"]) 
            {
            case "9.50":
                {
                    $vlSize = 9;
                    $quantity = $_POST["vl"] + 0;
                    $subtotal_vl = $quantity * $price[7];
                    echo "
                        <tr>
                            <td>9 Inch Veggie Lover</td>
                            <td>".$quantity."</td>
                            <td>$".$subtotal_vl."</td>
                        </tr>
                        ";
                    break;
                }
            case "12.50":
                 {
                    $vlSize = 12;
                    $quantity = $_POST["vl"] + 0;
                    $subtotal_vl = $quantity * $price[8];
                    echo "
                        <tr>
                            <td>12 Inch Veggie Lover</td>
                            <td>".$quantity."</td>
                            <td>$".$subtotal_vl."</td>
                        </tr>
                        ";
                    break;
                }
            }
        }
         if ($_POST["mp"] != "0")
        {
		    switch($_POST["mpButton"]) 
            {
            case "9.00":
                {
                    $mpSize = 9;
                    $quantity = $_POST["mp"] + 0;
                    $subtotal_mp = $quantity * $price[9];
                    echo "
                        <tr>
                            <td>9 Inch Margherita Pizza</td>
                            <td>".$quantity."</td>
                            <td>$".$subtotal_mp."</td>
                        </tr>
                        ";
                    break;
                }
            case "12.00":
                 {
                    $mpSize = 12;
                    $quantity = $_POST["mp"] + 0;
                    $subtotal_mp = $quantity * $price[10];
                    echo "
                        <tr>
                            <td>12 Inch Margherita Pizza</td>
                            <td>".$quantity."</td>
                            <td>$".$subtotal_mp."</td>
                        </tr>
                        ";
                    break;
                }
            }
        }
        $total = $subtotal_hp + $subtotal_mp + $subtotal_pp + $subtotal_qf + $subtotal_vl;
        echo "
        <tfoot>
        <td></td>
        <td>Total:</td>
        <td>$".$total."</td>
        ";
	    ?>
        <form action="createorder.php" method="post">
        <tr>
            <td>
        <input type="hidden" name="hpSize" value= <?php echo $hpSize; ?>>
        <input type="hidden" name="ppSize" value= <?php echo $ppSize; ?>>
        <input type="hidden" name="qfSize" value= <?php echo $qfSize; ?>>
        <input type="hidden" name="vlSize" value= <?php echo $vlSize; ?>>
        <input type="hidden" name="mpSize" value= <?php echo $mpSize; ?>>

        <input type="hidden" name="hpqty" value= <?php echo $hpqty; ?>>
        <input type="hidden" name="ppqty" value= <?php echo $ppqty; ?>>
        <input type="hidden" name="qfqty" value= <?php echo $qfqty; ?>>
        <input type="hidden" name="vlqty" value= <?php echo $vlqty; ?>>
        <input type="hidden" name="mpqty" value= <?php echo $mpqty; ?>></td>
        <td></td>
        <td><input type="submit" value="Pay" class="payButton"></td>

        </tr>
        </form>
    </table>
   
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
