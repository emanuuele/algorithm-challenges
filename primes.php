for ($i = 0; $i <= 100; $i++) {
    $primes = array();
    for ($j = 1; $j <= $i; $j++){
        if ($i % $j == 0) {
            array_push($primes, $j);
        }
    }
    if (sizeof($primes) == 2 || $i == 1) {
        echo "$i\n";
    }
}
