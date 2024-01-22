<?php
echo "This is a test message.";

$a = 2;
$b = 3.5;
$c = $a + $b;

// echo "This sum is ".$c;

echo 'The sum is $c';
echo "The sum is $c", '<br>', "This is example ";

echo "The sum is $c","<br>";

//normal function 
function myfunction1()
{
    echo "This is first function";
}
myfunction1();

//function with parameter
function myfunction2($name)
{
    echo "Hello $name";
}

myfunction2('Ujjwal');

//function with return value
function myfunction3()
{
    return "Hello Kushal";
}

$msg = myfunction3();
echo $msg;
echo "<br>";


//function with parameter and return value
function myfunction4($a,$b)
{
    return $a+$b;
}

$totalsum = myfunction4(3,4);
echo "The sum is $totalsum";
echo "<br>";

$i = 5;
$j = '5';

if($i === $j)
{
    echo "$i and $j are same";
}
else
{
    echo "$i and $j are not same";
}

?>