<?php
function check_palindrome($string){
    if ($string==strrev($string)){
        return "{$string} is a palindrome string";
    }
    else {
        return "{$string} is not a palindrome string";
    }
}
echo check_palindrome("PHP")."<br>";
echo check_palindrome("World");
?>
