<?php
$string= "PHP is widely used in AI, data science, and scientific community whereas Python is the language of choice for web development.";
$array1=array("PHP", "Python");
$array2=array("BHP", "PHP");
$newString = str_replace($array1, $array2, $string);
$newString = str_replace("BHP","Python", $newString);
echo $newString;
?>
