<?php
// Q2. Stock buy and sell

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

	$price = [ 100, 180, 260, 310, 40, 535, 695 ];
	$n = sizeof($price);

	// Function call
	stockBuySell($price, $n);
