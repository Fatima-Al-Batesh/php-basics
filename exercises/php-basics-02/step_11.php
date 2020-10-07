<?php
function IsPrime($n){
    $x=2;
    If ($x<$n){
        If ($n%$x==0){
            return 0;
        }
        else $x++;
    }
    else return 1;
}
$a=IsPrime(3);
If ($a==0){
    echo "This is not a Prime Number";
}
else {
    echo "<br>This is a Prime Number";
}
?>