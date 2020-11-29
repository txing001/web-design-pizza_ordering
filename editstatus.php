<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title></title>
    <style>
    table, td {
            padding: 20px;
            border: 1px solid black;   
            border-collapse: collapse;
		}
    </style>
</head>
<body>
    <a href="editprice.php">Modify Pizza Price</a>
    <form action="updatestatus.php" method="post">
        <p>ID: <input type="number" name="id"> Status Update To: <input type="number" name="newstatus"> <input type="submit" value="Update"></p>        
    </form>
    <table style="float: right">
    <tr>
        <th>Status Number</th>
        <th>Meaning</th>
    </tr>
    <tr>
        <td>1</td>
        <td>Order Received</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Preparing Pizza</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Ready For Delivery</td>
    </tr>
    <tr>
        <td>4</td>
        <td>Delivery</td>
    </tr>
    <tr>
        <td>>4</td>
        <td>Delete Order from Database</td>
    </tr>

    </table>
    <table style="float:left">
    <tr>
        <th>ID</th>
        <th>Status</th>
        <th>Timestamp</th>
        <th>More Information</th>
    </tr>
    <tr>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "myDB";

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            $sql = "SELECT * FROM ordertracker";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    $thisid = $row["id"];                 
                    $thisstatus = $row["status"];
                    $thistime = $row["reg_date"];
                    switch($thisstatus)
                    {
                        case 1:
                        {
                           $strStatus = "Order Received";
                            break;
						}
                        case 2:
                        {
                            $strStatus = "Preparing Pizza";
                            break;
						}
                        case 3:
                        {
                            $strStatus = "Ready For Delivery";
                            break;
						}
                        case 4:
                        {
                           $strStatus = "Delivery";
                            break;
						}
					}
                    echo "
                            <tr>
                                <td>" .$thisid. "</td>
                                <td>" .$strStatus. "</td>
                                <td>" .$thistime. "</td>
                                <td>
                            ";
                    $tempvar[0] = $row["9hawaiian"];
                    $tempvar[1] = $row["12hawaiian"];
                    $tempvar[2] = $row["9pepperoni"];
                    $tempvar[3] = $row["12pepperoni"];
                    $tempvar[4] = $row["9quattro"];
                    $tempvar[5] = $row["12quattro"];
                    $tempvar[6] = $row["9veggie"];
                    $tempvar[7] = $row["12veggie"];
                    $tempvar[8] = $row["9margherita"];
                    $tempvar[9] = $row["12margherita"];
                        if ($tempvar[0]>0)
                        {
                            echo "9 inch Hawaiian Pizza x" .$tempvar[0]. "</br>";              
						}                       
                        if ($tempvar[1]>0)
                        {
                            echo "12 inch Hawaiian Pizza x" .$tempvar[1]. "</br>";              
						}                        
                        if ($tempvar[2]>0)
                        {
                            echo "9 inch Pepperoni Pizza x" .$tempvar[2]. "</br>";              
						}                        
                        if ($tempvar[3]>0)
                        {
                            echo "12 inch Pepperoni Pizza x" .$tempvar[3]. "</br>";              
						}                       
                        if ($tempvar[4]>0)
                        {
                            echo "9 inch Quattro Formaggi Pizza x" .$tempvar[4]. "</br>";              
						}                        
                        if ($tempvar[5]>0)
                        {
                            echo "12 inch Quattro Formaggi Pizza x" .$tempvar[5]. "</br>";              
						}                        
                        if ($tempvar[6]>0)
                        {
                            echo "9 inch Veggie Lover Pizza x" .$tempvar[6]. "</br>";              
						}                       
                        if ($tempvar[7]>0)
                        {
                            echo "12 inch Veggie Lover Pizza x" .$tempvar[7]. "</br>";              
						}                       
                        if ($tempvar[8]>0)
                        {
                            echo "9 inch Margherita Pizza x" .$tempvar[8]. "</br>";              
						}
                        if ($tempvar[9]>0)
                        {
                            echo "12 inch Margherita Pizza x" .$tempvar[9]. "</br>";              
						}
                        echo "</td></tr>";
                   
                }
            } else {
                echo "error";
            }
            mysqli_close($conn);
        ?>
    </tr>
    </table>
</body>
</html>