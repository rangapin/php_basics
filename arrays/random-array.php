<?php 

// array

$cities = ["London", "Paris", "Ne2 York"];

// use the index

$city = $cities[0];

echo $city;

echo "<br>";

 // randomise the array

$cityPosition = array_rand($cities);

// use the array and the position to get the name of the city

$city = $cities[$cityPosition];

echo $city;

?>