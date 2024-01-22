<?php
$filename = "filehandle.txt";
$file = fopen($filename, "a");
fwrite($file, "My text");
fclose($file);
?>