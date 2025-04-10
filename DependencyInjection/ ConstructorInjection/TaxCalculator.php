<?php

declare(strict_types=1);

abstract class TaxCalculator
{
    abstract public function calculate(float $taxableIncome, float $taxRate = .03);

    abstract public function getYear();
}
