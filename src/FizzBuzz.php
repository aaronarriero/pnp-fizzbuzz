<?php namespace Aaron;

class FizzBuzz {

    public function say(int $number): string {
        $result;
        if ($number % 15 === 0) {
            $result = "FizzBuzz";
        } else if ($number % 3 === 0) {
            $result = "Fizz";
        } else if ($number % 5 === 0) {
            $result = "Buzz";
        } else {
            $result = "" . $number;
        }
        return $result;
    }

}