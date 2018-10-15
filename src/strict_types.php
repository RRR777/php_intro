<?php
declare (strict_types = 1);

namespace Rita\Projects;

use MathPHP\Algebra;
use MathPHP\Arithmetic;

class Strict_types
{
    public function digitSum(int $number) : int
    {
        $digit_sum = Arithmetic::digitSum($number);
        return $digit_sum;
    }

    public function factors(int $number) : array
    {
        $factors = Algebra::factors($number);
        return $factors;
    }

    public function discriminant(float $a, float $b, float $c): float
    {
        return $b**2 - (4 * $a * $c);
    }

    function makeCoffee(string $type = "cappuccino") : string
    {
        return "Making a cup of $type.";
    }

    function sum(int ...$ints) : int
    {
        return array_sum($ints);
    }
}
