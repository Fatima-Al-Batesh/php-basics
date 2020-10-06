<?php
function greaterFn($num){
    if ($num>10 and $num<=20){
        return "{$num} is greater than 10";
    }
    elseif ($num>20 and $num<=30){
        return "{$num} is greater than 20";
    }
    elseif ($num>30){
        return "{$num} is greater than 30";
    }
    elseif($num<10){
        return "{$num} is less than 10";
    }
}
echo greaterFn(40)."<br>"; // 40 is greater than 30
echo greaterFn(21)."<br>"; // 21 is greater than 20
echo greaterFn(12)."<br>"; // 12 is greater than 10
echo greaterFn(8)."<br>"; // 8 is less than 10
?>