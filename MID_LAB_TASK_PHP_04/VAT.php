<?php

  $amount=50;
  $vat=15;
  $result=($amount+($amount*($vat/100)));
  $VatResult=($result-$amount);
  echo("Amount is:".$amount."\n");
  echo("Vat percentage is:".$vat."\n");
  echo("Amount after adding vat:".$result."\n");
  echo("Vat amount:".$VatResult);


?>