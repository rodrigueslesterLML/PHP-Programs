<?php


// String
$x = "Example of String Double Quotes";
$y = 'Example of String Single Quotes';
echo $x;
echo "<br>";
echo $y;


// Integer
$int = 5192;
var_dump($int);

//float
$float = 51.92;
var_dump($float);

//boolean
$true=true;
$false= false;

//Arrays
$cars =array("Maruti", "Tata", "Jaguar");
var_dump($cars);


//Objects

class Car{
    public $color;
    public $model;
    public function _construct ($color, $model )
    {
        $this->color=$color;
        $this->model =$model;
    }
    public function message( )
    {
        return "My car is a " . $this->color ." ".$this->model."!";
    }
    }

?>

//null value
<?php
$null1 = "Hello world!";
$null1 = null;
var_dump($null1);
?>