<?php

/* Read the data in JSON format

echo "<pre>";
print_r($_POST);

*/
if (isset($_POST['submit'])) {
    
    $surname = $_POST['surname'];

    $gender = $_POST['gender'];

    echo "Your name is " . $surname . " and your gender is " . $gender;
} else {
    echo "Please visit the form page";
}
