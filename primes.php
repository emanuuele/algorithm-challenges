<?php
$array = array();
for ($i = 0; sizeof($array) <= 100; $i++) {
    $primes = array();
    for ($j = 1; $j <= $i; $j++){
        if ($i % $j == 0) {
            array_push($primes, $j);
        }
    }
    if (sizeof($primes) == 2 || $i == 1) {
        array_push($array, $i);
    }
}
foreach ($array as $prime) {
    echo "$prime\n";
}
