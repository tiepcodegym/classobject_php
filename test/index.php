<?php
include('class.php');
$rectangle= new Rectangular(5,3);
$rectangle->Display();
echo $rectangle->height; // 0utput: 30
echo $rectangle->width; // 0utput: 20
echo $rectangle->getPerimeter(); // 0utput: 100
echo $rectangle->getArea(); // Output: 600
echo ("Your Rectangle". $rectangle->display());
?>
