<?php 

// to transfrom a string into an array use the explode function
 
 $name = "Jim, Joe, Jack, John";

 $explodedName = explode(", ", $name);

 echo "<pre>";

 print_r($explodedName);

 $implodedName = implode("/ ", $explodedName);

 echo "<pre>";

 print_r($implodedName);

?>