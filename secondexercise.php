<?php

function  literInBottle($radius, $height){
    $volumeInCm = $radius * $radius * $height * 3.1416;
    return $volumeInCm/1000;

}



$radius = null;
do {
    $radius = readline("Please enter the radius: ");
} while($radius == null);
 
$height = null;
do {
    $height = readline("Please enter the heigth: ");
} while($height == null);
 
echo literInBottle($radius, $height);
?>