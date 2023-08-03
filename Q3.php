<?php
// Q3. Permutations of a given string.

function permute($str, $l, $r)
{
	if ($l == $r)
		echo $str. ", ";
	else
	{
		for ($i = $l; $i <= $r; $i++)
		{
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
	$temp = $charArray[$i] ;
	$charArray[$i] = $charArray[$j];
	$charArray[$j] = $temp;
	return implode($charArray);
}

$str = "ABSG";
$n = strlen($str);
permute($str, 0, $n - 1);
