<?php
function powerOfTwo($num)
{
   if(($num & ($num - 1)) == 0)
    {
		return "{$num} is power of 2";
    }
   else
    {
		return "{$num} is not power of 2";
    }
}
print_r(powerOfTwo(4)."<br>");
print_r(powerOfTwo(16)."<br>");
print_r(powerOfTwo(24));
?>