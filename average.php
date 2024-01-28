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

// sql to find average
$sql = "SELECT AVG(age) AS average_age FROM users";

//sql to find sum
$sqlsum = "SELECT SUM(age) AS sum_age FROM users";

//sql to find count
$sqlcount = "SELECT COUNT(id) AS totalusers FROM users";

// Execute sql query
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$resultsum = mysqli_query($con, $sqlsum);
$rowsum = mysqli_fetch_assoc($resultsum);

$resultcount = mysqli_query($con, $sqlcount);
$rowcount = mysqli_fetch_assoc($resultcount);

echo "Average age is: " . $row["average_age"];
echo "<br>";
echo "Sum of age is: " . $rowsum["sum_age"];
echo "<br>";
echo "Total number of users is: " . $rowcount["totalusers"];    

mysqli_close($con);

?>