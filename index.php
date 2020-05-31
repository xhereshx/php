<?php
 
$array = array();
for($i = 1; $i <= 100; $i++) {
    array_push($array, $i);
}
print_r($array);
$string = "I am a simple string";

echo '<br>';
echo '<br>';
 
// Create a variable $arrayDouble containing the double of each value of $array
$arrayDouble = array_map(
    function($val) {
        return $val*2;
    },
    $array
);
echo '<br>';
echo '<br>';
// Create two variables $arrayEven and $arrayOdd containing the Even numbers contained in $array and the Odd numbers contained in $array
/* $arrayEven = array();
for($i = 2; $i <= 100; $i+=2){
    array_push($arrayEven, $i);
}
$arrayOdd = array();
for($i = 1; $i <= 100; $i++){
    array_push($arrayOdd , $i);
}
print_r($arrayEven);
echo '<br>';
echo '<br>';
print_r($arrayOdd); 
 
// Create a variable $arrayProduct containing the product of each numbers of $array nasobeni 
$arrayProduct = array_product($array)
print_r($arrayProduct); */
 
// Create a variable $stringUpper containing the $string value in uppercase
$stringUpper = strtoupper($string);
print_r($stringUpper);
 
// Create a variable $stringFirstUp containing the $string value with the first character in uppercase
$stringFirstUp = ucfirst($string);
print_r($stringFirstUp); 