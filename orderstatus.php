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
        table, td {
            color:black;
            margin: 10px;
            padding: 20px;
            border: 1px solid black;   
            border-collapse: collapse;
		}
        .backButton {
            position:absolute;
            left: 40%;
            margin-top: 5px;
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
			<a href="menu.php">Menu</a>
    </header>
    <div class="center">
     <table class="center">
        <tr>
            <?php
                $servername = "localhost";
                $username = "f33ee";
                $password = "f33ee";
                $dbname = "f33ee";
                $thisid = $_POST['id'] + 0;
                // Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                // Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                $sql = "SELECT * FROM ordertracker
                        WHERE id=$thisid;";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) 
                {
                    $row = mysqli_fetch_assoc($result);          
                    $thisstatus = $row["status"];
                    echo"<h1>Order Status</h1>";
                        switch($thisstatus)
                        {
                            case 1:
                            {
                                echo "
                                <td style='background-color: green'>Order Recieved</td>
                                <td>Preparing Pizza</td>
                                <td>Ready For Delivery</td>
                                <td>Delivery</td>
                                ";
                                break;
						    }
                            case 2:
                            {
                                echo "
                                <td>Order Recieved</td>
                                <td style='background-color: green'>Preparing Pizza</td>
                                <td>Ready For Delivery</td>
                                <td>Delivery</td>    
                                ";
                                break;
						    }
                            case 3:
                            {
                                echo "
                                <td>Order Recieved</td>
                                <td>Preparing Pizza</td>
                                <td style='background-color: green'>Ready For Delivery</td>
                                <td>Delivery</td>    
                                ";
                                break;
						    }
                            case 4:
                            {
                                echo "
                                <td>Order Recieved</td>
                                <td>Preparing Pizza</td>
                                <td>Ready For Delivery</td>
                                <td style='background-color: green'>Delivery</td>    
                                ";
                                break;
						    }
					    }    
                        
                        $tempvar[0] = $row["9hawaiian"];
                        if ($tempvar[0]>0)
                        {
                            echo "<tr><td colspan='4'>9 inch Hawaiian Pizza x" .$tempvar[0]. "</td></tr>";              
						}
                        $tempvar[1] = $row["12hawaiian"];
                        if ($tempvar[1]>0)
                        {
                            echo "<tr><td colspan='4'>12 inch Hawaiian Pizza x" .$tempvar[1]. "</td></tr>";              
						}
                        $tempvar[2] = $row["9pepperoni"];
                        if ($tempvar[2]>0)
                        {
                            echo "<tr><td colspan='4'>9 inch Pepperoni Pizza x" .$tempvar[2]. "</td></tr>";              
						}
                        $tempvar[3] = $row["12pepperoni"];
                        if ($tempvar[3]>0)
                        {
                            echo "<tr><td colspan='4'>12 inch Pepperoni Pizza x" .$tempvar[3]. "</td></tr>";              
						}
                        $tempvar[4] = $row["9quattro"];
                        if ($tempvar[4]>0)
                        {
                            echo "<tr><td colspan='4'>9 inch Quattro Formaggi Pizza x" .$tempvar[4]. "</td></tr>";              
						}
                        $tempvar[5] = $row["12quattro"];
                        if ($tempvar[5]>0)
                        {
                            echo "<tr><td colspan='4'>12 inch Quattro Formaggi Pizza x" .$tempvar[5]. "</td></tr>";              
						}
                        $tempvar[6] = $row["9veggie"];
                        if ($tempvar[6]>0)
                        {
                            echo "<tr><td colspan='4'>9 inch Veggie Lover Pizza x" .$tempvar[6]. "</td></tr>";              
						}
                        $tempvar[7] = $row["12veggie"];
                        if ($tempvar[7]>0)
                        {
                            echo "<tr><td colspan='4'>12 inch Veggie Lover Pizza x" .$tempvar[7]. "</td></tr>";              
						}
                        $tempvar[8] = $row["9margherita"];
                        if ($tempvar[8]>0)
                        {
                            echo "<tr><td colspan='4'>9 inch Margherita Pizza x" .$tempvar[8]. "</td></tr>";              
						}
                        $tempvar[9] = $row["12margherita"];
                        if ($tempvar[9]>0)
                        {
                            echo "<tr><td colspan='4'>12 inch Margherita Pizza x" .$tempvar[9]. "</td></tr>";              
						}
                        
                    } 
                else 
                {
                echo "Order Not Found!";
                }

                mysqli_close($conn);
            ?>
        </tr>
    </table>
    <form action="ordersearch.html">
        <input type="submit" value="Back" class="backButton">
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
          <h4>Credit cards & Cash on delvery</h4>
          <h3 style="color: #F39D34">Check our lastest promotions on home page!</h3></p>
        </div>
   </footer>
   </div>
</body>
</html>