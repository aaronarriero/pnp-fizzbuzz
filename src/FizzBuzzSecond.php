<?php namespace Aaron;

class FizzBuzzSecond {

    public function say(int $number): string {
        $result;
        $isFizz = $this->isFizz($number);
        $isBuzz = $this->isBuzz($number);
        if ($isFizz && $isBuzz) {
            $result = "FizzBuzz";
        } else if ($isFizz) {
            $result = "Fizz";
        } else if ($isBuzz) {
            $result = "Buzz";
        } else {
            $result = "" . $number;
        }
        return $result;
    }

    public function isFizz(int $number): bool {
        return ($number % 3 === 0) || preg_match('/3/', $number);
    }

    public function isBuzz(int $number): bool {
        return ($number % 5 === 0) || preg_match('/5/', $number);
    }

}