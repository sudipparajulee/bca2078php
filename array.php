<?php
$myarr = array('Ujjwal', 'Kushal', 'Rajesh', 'Ramesh');
echo $myarr[0];

echo "<br>";

$myarr1 = array('Ujjwal', 'Kushal', 'Rajesh', 'Ramesh');

for ($i = 0; $i < count($myarr1); $i++) {
    echo $myarr1[$i], '<br>';
}

echo "<br>";

$myarr2 = array('Ujjwal', 'Kushal', 'Rajesh', 'Ramesh');

foreach ($myarr2 as $value) {
    echo $value, '<br>';
}

echo "<br>";

//associative array
$myarr3 = array('Ujjwal' => 20, 'Kushal' => 21, 'Rajesh' => 22, 'Ramesh' => 23);
ksort($myarr3);

foreach ($myarr3 as $key => $value) {
    echo $key, ' is ', $value, ' years old', '<br>';
}
