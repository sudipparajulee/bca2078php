<?php 
session_start();
?>
<html>
<head>
<title>Session Example</title>
</head>
<body>
<?php
//get session variables
echo "Username = ".$_SESSION['username'];
?>
</body>
</html>