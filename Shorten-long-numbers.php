<?php
//dzcoding.com
// Converts a number into a short version, eg: 1000 -> 1k
function shorten($number)
{
    $abbrevs = [12 => 'T', 9 => 'B', 6 => 'M', 3 => 'K', 0 => ''];

    foreach ($abbrevs as $exponent => $abbrev) {
        if (abs($number) >= pow(10, $exponent)) {
            $display = $number / pow(10, $exponent);
            $decimals = ($exponent >= 3 && round($display) < 100) ? 1 : 0;
            $number = number_format($display, $decimals).$abbrev;
            break;
        }
    }

    return $number;
}
//usage
//shorten('long number');
//example
echo '<table>';
for($d = 0; $d < 16; $d++ ) {
	$n = intval("10" . str_repeat( "0", $d ));;
	$n = $n / 10;
	echo shorten($n) .'<br>'; // 1.1
}
echo '</table>';
