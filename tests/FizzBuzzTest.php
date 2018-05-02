<?php
use Aaron\FizzBuzz;

use PHPUnit\Framework\TestCase;

final class FizzBuzzTest extends TestCase
{
    public function testCases()
    {
        $fizzbuzz = new FizzBuzz();
        $cases = [
            1 => "1",
            3 => "Fizz",
            5 => "Buzz",
            15 => "FizzBuzz",
            25 => "Buzz",
            30 => "FizzBuzz",
            100 => "Buzz",
        ];
        foreach($cases as $number => $value) {
            $this->assertEquals($value, $fizzbuzz->say($number));
        }
    }
    
}