<?php

namespace Rita\Projects;

use MathPHP\Algebra;
use MathPHP\Arithmetic;

class No_types
{
    public function digitSum($number)
    {
        $digit_sum = Arithmetic::digitSum($number);
        return $digit_sum;
    }

    public function factors($number)
    {
        $factors = Algebra::factors($number);
        return $factors;
    }

    public function discriminant($a, $b, $c)
    {
        return $b**2 - (4 * $a * $c);
    }

    function makeCoffee($type = "cappuccino")
    {
        return "Making a cup of $type.";
    }

    function sum( ...$ints) {
        return array_sum($ints);
    }

}
