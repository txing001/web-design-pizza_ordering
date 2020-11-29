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
    <a href="editstatus.php">See Order Status</a>

    <form action="updateprice.php" method="post">
        <p>ID: <input type="number" name="id"> Price Update To: <input type="number" step="0.1" name="newprice"> <input type="submit" value="Update"></p>        
    </form>
    <table style="float:left">
    <tr>
        <th>ID</th>
        <th>Product</th>
        <th>Price</th>
    </tr>
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
            $sql = "SELECT * FROM pizzaPrice";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    $thisid = $row["id"];                 
                    $thisproduct = $row["product"];
                    $thisprice = $row["price"];
                
                    echo "
                            <tr>
                                <td>" .$thisid. "</td>
                                <td>" .$thisproduct. "</td>
                                <td>" .$thisprice. "</td>
                            </tr>
                            ";                  
                }
            } else {
                echo "error";
            }
            mysqli_close($conn);
        ?>
    </table>
</body>
</html>