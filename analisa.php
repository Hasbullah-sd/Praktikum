<?php

function isPrime($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

function containsDigitThree($number) {
    return strpos((string)$number, '3') !== false;
}

$primes = [];
for ($i = 2; $i <= 1000; $i++) {
    if (isPrime($i)) {
        $primes[] = $i;
    }
}

$primesWithThree = array_filter($primes, 'containsDigitThree');

foreach ($primesWithThree as $prime) {
    echo $prime . "\n";
}

$startTime = microtime(true);
$memoryUsageStart = memory_get_usage();

// Your code to measure

$endTime = microtime(true);
$memoryUsageEnd = memory_get_usage();

$timeTaken = $endTime - $startTime;
$memoryUsed = $memoryUsageEnd - $memoryUsageStart;

echo "Time taken: " . $timeTaken . " seconds\n";
echo "Memory used: " . $memoryUsed . " bytes\n";
?>
