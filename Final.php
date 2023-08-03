<!-- Q1 -->
<!-- // Q1. Spirally traversing a matrix -->
<?php
$r = 4;
$c = 4;

$matrix = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12],
    [13, 14, 15, 16]
];

$final = [];

$rj = 0;
$ck = 0;
$flag = "Row const";
print_r($matrix);

for ($i = 0;; $i++) {
    if (count($final) > 15) {
        break;
    }
    if ($flag == "Row const") {
        for ($l = 0;; $l++) {
            $final[] = $matrix[$rj][$ck];
            $ck++;
            if ($ck == 4) {
                $ck = 3;
                break;
            }
        }
        $flag = "Col const";
    } else {
        for ($l = 0;; $l++) {
            $final[] = $matrix[$rj][$ck];
            $rj++;
            if ($rj == 4) {
                $rj = 3;
                break;
            }
        }
        $flag = "Row const";
    }
}
print_r($final);
?>

<!-- Q4 -->
<!-- // Q4. Rearrange Array Alternately -->
<?php
// Online PHP compiler to run PHP program online
$n = 6;
$arr = [1, 2, 3, 4, 5, 6];
$desc = [];
$final = [];

for ($i = count($arr) - 1; $i >= 0; $i--) {
    $desc[] = $arr[$i];
}
$j = 0;
$k = 0;
for ($i = 0; $i < count($arr); $i++) {
    if ($i % 2 != 0) {
        $final[] = $arr[$j];
        $j++;
    } else {
        $final[] = $desc[$k];
        $k++;
    }
}
print_r($final);
?>

<!-- Q2 -->
<!-- // Q2. Stock buy and sell -->
<?php

function stockBuySell($price, int $n)
{
    if ($n == 1)
        return;

    $i = 0;
    while ($i < $n - 1) {

        while (($i < $n - 1) && ($price[$i + 1] <= $price[$i]))
            $i++;

        if ($i == $n - 1)
            break;

        $buy = $i++;

        while (($i < $n) && ($price[$i] >= $price[$i - 1]))
            $i++;

        $sell = $i - 1;

        echo "Buy on day : $buy\n Sell on day: $sell\n";
    }
}

$price = [100, 180, 260, 310, 40, 535, 695];
$n = sizeof($price);

// Function call
stockBuySell($price, $n);


?>

<!-- Q3 -->
<!-- // Q3. Permutations of a given string. -->
<?php

function permute($str, $l, $r)
{
    if ($l == $r)
        echo $str . ", ";
    else {
        for ($i = $l; $i <= $r; $i++) {
            $str = swap($str, $l, $i);
            permute($str, $l + 1, $r);
            $str = swap($str, $l, $i);
        }
    }
}

function swap($a, $i, $j)
{
    $temp;
    $charArray = str_split($a);
    $temp = $charArray[$i];
    $charArray[$i] = $charArray[$j];
    $charArray[$j] = $temp;
    return implode($charArray);
}

$str = "ABSG";
$n = strlen($str);
permute($str, 0, $n - 1);
?>