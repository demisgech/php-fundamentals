<?php

require_once "TaxCalculator.php";

class TaxReport
{
    public function __construct(private TaxCalculator $taxCalculator)
    {
    }

    public function showTaxReport(): void
    {
        $tax = $this->taxCalculator->calculate();
        echo "Tax: " . $tax;
    }
}
