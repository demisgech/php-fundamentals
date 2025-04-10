<?php
declare(strict_types=1);
function fizzBuzz(int $number): string
{
    return match (true) {
        $number % 15 === 0 => "FizzBuzz",
        $number % 3 === 0 => "Fizz",
        $number % 5 === 0 => "Buzz",
        default => (string)$number,
    };
}

$result = fizzBuzz(33);
echo $result; // Fizz


#[Attribute(Attribute::TARGET_CLASS)]
class FizzBuzz
{
    private $array;

    public function __construct(?array $array)
    {
        $this->array = $array;
    }
}


#[FizzBuzz(["key" => "Value"])]
class AttributableClass
{
    public function __construct()
    {

    }

    public function log()
    {
        echo "Logging";
    }
}

$attributableClass = new AttributableClass();
//print_r($attributableClass);

$attributableClass->log();