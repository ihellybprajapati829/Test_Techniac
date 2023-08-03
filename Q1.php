<?php
// Online PHP compiler to run PHP program online
// Q1. Spirally traversing a matrix

$r = 4;
$c = 4;

$matrix = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12],
    [13, 14, 15, 16]
];

$final = [];

$rj=0;
$ck=0;
$flag = "Row const";
print_r($matrix);

for($i = 0;; $i++)
{
    if(count($final) > 15){
        break;
    }
    if($flag == "Row const"){
        for($l = 0;;$l++)
        {
            $final[] = $matrix[$rj][$ck];
            $ck++;
            if($ck == 4)
            {
                $ck = 3;
                break;
            }
        }
        $flag = "Col const";
    }
    else{
        for($l = 0;;$l++)
        {
            $final[] = $matrix[$rj][$ck];
            $rj++;
            if($rj == 4)
            {
                $rj = 3;
                break;
            }
        }
        $flag = "Row const";
    }
}
print_r($final);
