<?php
$amount = 1000;
$vatrate = 15;

$vat = ( $amount * $vatrate) /100;
$totalamount = $amount + $vat;

echo "Original amount: $amount <br>";
echo "Vat(15%): $vat <br>";
echo "Total Amount: $totalamount <br>";
?>
