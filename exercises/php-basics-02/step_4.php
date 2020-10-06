<?php
function armstrong_number($num) {
  $digitLen = strlen($num);
  $sum = 0;
  $num = (string)$num;
  for ($i = 0; $i < $digitLen; $i++) {
    $sum = $sum + ((string)$num{$i}**$digitLen);
  }
  if ((string)$sum == (string)$num) {
    return "True";
  } else {
    return "False";
  }
}
echo "Which of the following numbers is an armstrong number?<br>";
echo "153 ".armstrong_number(153);
echo "<br>21 ".armstrong_number(21);
echo "<br>4587 ".armstrong_number(4587);
?>
