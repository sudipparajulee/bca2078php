<?php
// get the q parameter from URL
$q = $_REQUEST["q"];

$con = mysqli_connect('localhost','root','','mydatabase');
if (!$con) {
  die('Could not connect');
}

//get name matching with the input
$sql="SELECT * FROM users WHERE name LIKE '%".$q."%'";

$result = mysqli_query($con,$sql);

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  while($name = mysqli_fetch_assoc($result)) {
    if (stristr($q, substr($name['name'], 0, $len))) {
      if ($hint === "") {
        $hint = $name['name'];
      } else {
        $hint .= ", ".$name['name'];
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>