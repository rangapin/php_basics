<?php 
$names = ["Ben", "John", "Joe", "Kelly"];

sort($names);

echo "<ul>";

foreach($names as $name) {
    echo "<li>$name</li>";
}

echo "<ul>";
?>