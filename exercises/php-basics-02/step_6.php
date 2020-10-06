<?php
function sumOfDigits($nums) {
    $sum = 0;
      for ($i = 0; $i < strlen($nums); $i++) {
             $sum += $nums[$i];
               }
      return $sum;
}
echo "The sum of digits of 235: ".sumOfDigits("235")."<br>";
echo "The sum of digits of 9234: ".sumOfDigits("9234");
?>
