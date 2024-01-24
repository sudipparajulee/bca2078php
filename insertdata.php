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

$name = "Sudip";
$email = "sudip@bits.com";
$password = "123456";

// sql to insert data
$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error on Insert: <br>" . mysqli_error($con);
}

mysqli_close($con);
?>