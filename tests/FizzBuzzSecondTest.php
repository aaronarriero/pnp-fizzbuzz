<?php
use Aaron\FizzBuzzSecond;

use PHPUnit\Framework\TestCase;

final class FizzBuzzSecondTest extends TestCase
{
    public function testCases()
    {
        $fizzbuzz = new FizzBuzzSecond();
        $cases = [
            // Casos por defecto
            1 => "1",
            3 => "Fizz",
            5 => "Buzz",
            15 => "FizzBuzz",
            25 => "Buzz",
            30 => "FizzBuzz",
            100 => "Buzz",

            // Casos adicionales del segundo escenario
            31 => "Fizz",
            33 => "Fizz",
            35 => "FizzBuzz",
            51 => "FizzBuzz",
            53 => "FizzBuzz",
            54 => "FizzBuzz"
        ];
        foreach($cases as $number => $value) {
            $this->assertEquals($value, $fizzbuzz->say($number), "Test fallido para el número: " . $number);
        }
    }
    
}