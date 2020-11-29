<?php
    $servername = "localhost";
    $username = "f33ee";
    $password = "f33ee";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully<br>";
    mysqli_close($conn);
    ?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
    <br><a href="dbcreate.php">Create Database</a>
</body>
</html>