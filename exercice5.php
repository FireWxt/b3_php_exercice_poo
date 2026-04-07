<?php
/*
 * ÉNONCÉ :
 * Créez une classe Calculator avec des méthodes statiques add, subtract, multiply, divide.
 * Utilisez ces méthodes pour effectuer des opérations sur deux nombres.
*/

class Calculator {

    public static function add(float $a, float $b): float {
        return $a + $b;
    }

    public static function subtract(float $a, float $b): float {
        return $a - $b;
    }

    public static function multiply(float $a, float $b): float {
        return $a * $b;
    }

    public static function divide(float $a, float $b): float {
        if ($b == 0) {
            throw new InvalidArgumentException("Division by zero is not allowed.");
        }
        return $a / $b;
    }
}

$num1 = 10;
$num2 = 5;
echo "Addition: " . Calculator::add($num1, $num2) . "<br>";
echo "Subtraction: " . Calculator::subtract($num1, $num2) . "<br>";
echo "Multiplication: " . Calculator::multiply($num1, $num2) . "<br>";
try {
    echo "Division: " . Calculator::divide($num1, $num2) . "<br>";
} catch (InvalidArgumentException $e) {
    echo $e->getMessage() . "<br>";
}
    