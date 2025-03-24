<?php

require_once "TaxCalculator.php";

class TaxCalculator2025 implements TaxCalculator
{

    public function __construct(private float $taxableIncome, private float $taxRate = .2)
    {
    }

    public function calculate(): float
    {
        return $this->taxableIncome * $this->taxRate;
    }
}