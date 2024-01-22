<?php
$filename = $_FILES['filename']['name'];
$tmpname = $_FILES['filename']['tmp_name'];

//get file extension
$extension = pathinfo($filename, PATHINFO_EXTENSION);
//supported file types
$allowed_type = array('jpg', 'jpeg', 'png', 'gif');
//validate file extension
if(!in_array($extension, $allowed_type)) {
    die("File extension not supported");
}

//get file size
$filesize = $_FILES['filename']['size'];
//max file size 2MB = 2 * 1024 * 1024
if($filesize > 2*1024*1024) {
    die("File size can't be larger than 2MB");
}

//unique file name 
$newfilename = time();
//target path with new file name
// $destination = "uploads/" . $newfilename.".".$extension;
$destination = "uploads/" . $newfilename."_".$filename;

//upload the file in our server
move_uploaded_file($tmpname, $destination);
echo "File Uploaded Successfully";

?>