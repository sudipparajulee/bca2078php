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

// sql to select data
$sql = "SELECT * FROM users";

$result = mysqli_query($con, $sql);

while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Email: " . $row["email"]. "<br>";
}

mysqli_close($con);
?>