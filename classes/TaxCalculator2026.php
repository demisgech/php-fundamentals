<?php

require_once "TaxCalculator.php";

class TaxCalculator2026 implements TaxCalculator
{

    public function __construct(private float $taxableIncome, private float $taxRate = .3)
    {
    }

    public function calculate(): float
    {
        return $this->taxableIncome * $this->taxRate;
    }
}