<?php
require "shape.php";
function getprice(shape $shape){
    return $shape->getarea();
}
$rect= new rect(5,7);
echo "<p>$",getprice($rect),"</p>";
$circle= new circle(5);
echo "<p>$",getprice($circle),"</p>";
?>
