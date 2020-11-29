<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title></title>
    <style>
     .backButton {
            position:absolute;
            left: 40%;
            margin-top: 5px;
		}
    </style>
</head>
<body>
     <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "myDB";
            $thisprice = $_POST["newprice"] + 0;
            $thisid = $_POST["id"] + 0;

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }


                 $sql = "UPDATE pizzaPrice
                        SET price = '$thisprice'
                        WHERE id = '$thisid'";

                 if (mysqli_query($conn, $sql)) {
                    echo "Record updated successfully";
                 } else {
                    echo "Error updating record: " . mysqli_error($conn);
                 }
            
            mysqli_close($conn);
     ?>
     <form action="editprice.php">
        <input type="submit" value="Back" class="backButton">
     </form>
</body>
</html>