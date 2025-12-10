<?php
 $amount = 1000;           
  $vatRate = 0.15;

 $vat  = $amount * $vatRate;
  $total = $amount + $vat;

 echo "amount = $amount<br>";
  echo "vat (15%) = $vat<br>";
 echo "total vat = $total";
?>