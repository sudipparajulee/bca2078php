<?php
session_start();
?>
<html>
<head>
<title>Session Example</title>
</head>
<body>
<?php
//set session variables
$_SESSION['username'] = "Ram";
?>

<a href="file2.php">Next Page</a>
</body>
</html>