<?php

  $Animal=["1"=>"Cat","2"=>"Dog","3"=>"Tiger","4"=>"Deer"];
  
  echo ("Elements in an array are:");
  
  foreach($Animal as $Value)
{
    echo ($Value." ");

}

echo "\nEnter a number(between 1 to 4):";
$input = rtrim(fgets(STDIN));

if($input==="1")
    {
       echo($Animal["1"]);
    }
    elseif($input==="2")
    {
        echo($Animal["2"]);
    }
    elseif($input==="3")
    {
        echo($Animal["3"]);
    }
    elseif($input==="4")
    {
        echo($Animal["4"]);
    }

?>