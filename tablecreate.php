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

        // sql to create table
    $sql = "CREATE TABLE ordertracker (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    status int NOT NULL,
    9hawaiian int(6),
    12hawaiian int(6),
    9pepperoni int(6),
    12pepperoni int(6),
    9quattro int(6),
    12quattro int (6),
    9veggie int(6),
    12veggie int(6),
    9margherita int(6),
    12margherita int(6),
    email VARCHAR(50),
    reg_date TIMESTAMP
    )";

    /* NOT NULL - Each row must contain a value for that column, null values are not allowed
    DEFAULT value - Set a default value that is added when no other value is passed
    UNSIGNED - Used for number types, limits the stored data to positive numbers and zero
    AUTO INCREMENT - MySQL automatically increases the value of the field by 1 each time a new record is added
    PRIMARY KEY - Used to uniquely identify the rows in a table. The column with PRIMARY KEY setting is often an ID number, and is often used with AUTO_INCREMENT
    */


    if (mysqli_query($conn, $sql)) {
        echo "Table ordertracker created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }

    $sql = "CREATE TABLE pizzaPrice (
      id int(6) UNSIGNED NOT NULL,
      product varchar(50) DEFAULT NULL,
      price decimal(10,2) DEFAULT NULL
    )";

    if (mysqli_query($conn, $sql)) {
        echo "Table pizzaPrice created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }

    $sql = "INSERT INTO `pizzaPrice` (`id`, `product`, `price`) VALUES
        (1, '9hawaiian', '11.50'),
        (2, '12hawaiian', '14.50'),
        (3, '9pepperoni', '12.50'),
        (4, '12pepperoni', '15.50'),
        (5, '9quattro', '10.50'),
        (6, '12quattro', '13.50'),
        (7, '9veggie', '9.50'),
        (8, '12veggie', '12.50'),
        (9, '9margherita', '9.00'),
        (10, '12margherita', '12.00')";
		
		if (mysqli_query($conn, $sql)) {
        echo "Data Inserted Successfully";
    } else {
        echo "Error inserting data: " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>