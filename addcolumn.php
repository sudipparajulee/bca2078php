<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

// Create connection
$con = mysqli_connect($server, $username, $password, $dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to add column
$sql = "ALTER TABLE users ADD age INT(2) NOT NULL DEFAULT '20'";

// Execute sql query
if (mysqli_query($con, $sql)) {
    echo "Column added successfully";
} else {
    echo "Error adding column: " . mysqli_error($con);
}

mysqli_close($con);
?>