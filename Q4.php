<?php
// Online PHP compiler to run PHP program online
// Q4. Rearrange Array Alternately
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
