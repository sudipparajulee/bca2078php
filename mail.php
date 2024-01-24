<?php
$to = "sudip@bitmapitsolution.com";
$subject = "test subject";
$msg = "This is a message";

//send mail
if(mail($to,$subject,$msg))
{
    echo "Mail Sent Successfully";
}
else
{
    echo "Something Went Wrong";
}
?>