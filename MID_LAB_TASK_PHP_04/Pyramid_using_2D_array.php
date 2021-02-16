<?php

$Student = [

    [1,2,3,"A"],
    [1,2,"B","C"],
    [1,"D","E","F"]

];


for($i=0; $i<=2; $i=$i+1)
{
    $l=2-$i+1;
    
    for($j=0; $j<=($l-1); $j=$j+1)
    {
        
        printf("%d ",$Student[$i][$j]);
    }
    printf("\n");
}
printf("\n");

$k=65;

for($i=0; $i<=2; $i=$i+1)
{
    $l=2-$i+1;
    
    for($j=3; $j>=$l; $j=$j-1)
    {
        $ch = $Student[$i][$j];
        $ch = chr($k);
        echo($ch." ");
        $k = $k + 1;
    }
    printf("\n");
}


?>