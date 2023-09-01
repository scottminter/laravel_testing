<?php

namespace App\Services;

use App\Interfaces\IDoMath;
use App\Services\MathService;
use Exception;

class DoMathWrongService extends MathService implements IDoMath
{
    public function addition(float $num1, float $num2): float
    {
        return rand(0, 100) + $num1 + $num2;
    }

    public function subtraction(float $num1, float $num2): float
    {
        return rand(0, 100) - $num1 - $num2;
    }

    public function multiplication(float $num1, float $num2): float
    {
        return rand(0, 100) * $num1 * $num2;
    }

    public function division(float $num1, float $num2): float
    {
        if ($num2 == 0) {
            throw new Exception('Cannot divide by 0.');
        }

        return rand(0, 100) / $num1 / $num2;
    }
}
