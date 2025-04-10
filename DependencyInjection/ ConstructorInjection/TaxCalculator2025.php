<?php

declare(strict_types=1);

#[Component]
class TaxCalculator2025 extends TaxCalculator
{

    public function calculate(float $taxableIncome, float $taxRate = .03)
    {
        return $taxableIncome * $taxRate;
    }

    public final function getYear()
    {
        return "2025";
    }
}