<?php
function generateRandomName($name){
    $name = ucfirst(strtolower($name));
    $generatedNumber = rand(6,15);
    return $name.' '.$generatedNumber;
}
$name = "ARPIT";
echo generateRandomName($name);
?>