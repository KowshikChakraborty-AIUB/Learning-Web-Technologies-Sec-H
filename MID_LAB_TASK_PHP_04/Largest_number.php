<?php


  $a=20;
  $b=300;
  $c=50;

  if($a>$b && $a>$c)
  {
    echo("The largest number is:".$a);
  }
  elseif($b>$a && $b>$c)
  {
    echo("The largest number is:".$b);
  }
  else {
      echo("The largest number is:".$c);
  }


?>