<?php

for($i=1; $i<=3; $i=$i+1)
{
    for($j=1; $j<=$i; $j=$j+1)
    {
        printf("* ",$j);
    }
    printf("\n");
}

printf("\n");

for($i=3; $i>=1; $i=$i-1)
{
    for($j=1; $j<=$i; $j=$j+1)
    {
        printf("%d ",$j);
    }
    printf("\n");
}

printf("\n");

$k=65;

for($i=1; $i<=3; $i=$i+1)
{
    for($j=1; $j<=$i; $j=$j+1)
    {
         $ch = chr($k);
         echo($ch." ");
         $k = $k + 1;
    }
    printf("\n");
}


?>