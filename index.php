<?php
function generateRandomName($name){
    // Change name case into uppercase first
    $name = ucfirst(strtolower($name));
    // Generate a random number
    $generatedNumber = rand(6,15); 
    // Concat name with random number
    $new_name = $name.' '.$generatedNumber;
    return $new_name;
}
$name = "rahul";
echo generateRandomName($name);
?>