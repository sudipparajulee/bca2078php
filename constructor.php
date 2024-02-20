<?php
class Fruit{
    public $name;
    public $color;
    function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }
    function intro(){
        echo "The fruit is $this->name and the color is $this->color.";
    }
}

$apples = new Fruit("Apple", "red");
echo $apples->intro();
echo "<br>";
$bananas = new Fruit("Banana", "yellow");
echo $bananas->intro();
echo "<br>";

?>