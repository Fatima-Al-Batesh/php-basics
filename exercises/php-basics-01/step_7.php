<?php
$birth_year = rand(1920, 2020);
$current_year = 2020;
echo $birth_year."<br>";
if ($current_year - $birth_year >= 18){
    echo "You can drive";
}
else{
    echo "You still a kid, go and play GTA";
}
?>