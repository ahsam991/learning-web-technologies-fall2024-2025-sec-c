<?php
$number1 = 10;
$number2 = 20;
$number3 = 30;

if ($number1 >= $number2 && $number1 >= $number3){ 
echo"The largest Number is: $number1";
}
elseif($number2 >= $number1 && $number2 >= $number3){ 
echo"The largest Number is: $number2";
}
else{ 
echo"The largest Number is: $number3";
}
?>
