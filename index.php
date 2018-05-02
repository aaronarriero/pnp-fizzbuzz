<?php
require_once 'src/bootstrap.php';
use Aaron\FizzBuzz;
use Aaron\FizzBuzzSecond;

echo "FizzBuzz clásico: \n";
$fizzbuzz = new FizzBuzz();
for ($i = 1; $i <= 100; $i++) {
    echo $i . "\t" . $fizzbuzz->say($i) . "\n";
}
echo "\n";

echo "FizzBuzz tanto si es divisible como si contiene 3 o 5: \n";
$fizzbuzz = new FizzBuzzSecond();
for ($i = 1; $i <= 100; $i++) {
    echo $i . "\t" . $fizzbuzz->say($i) . "\n";
}
