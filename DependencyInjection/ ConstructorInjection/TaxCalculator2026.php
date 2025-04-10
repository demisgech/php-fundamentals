<?php

declare(strict_types=1);

#[Component]
class TaxCalculator2026 extends TaxCalculator
{

    public function calculate(float $taxableIncome, float $taxRate = .04)
    {
        return $taxableIncome * $taxRate;
    }

    public function getYear()
    {
        return "2026";
    }
}