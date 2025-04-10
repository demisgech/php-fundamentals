<?php

declare(strict_types=1);

#[Component]
class TaxReport
{
    private TaxCalculator $calculator;

    #[InjectConstructor]
    public function __construct(TaxCalculator $calculator)
    {
        $this->calculator = $calculator;
    }

    public function showReport(float $taxableIncome, float $taxRate = .03)
    {
        echo "***** Tax Report **** \n";
        $tax = $this->calculator->calculate($taxableIncome, $taxRate);
        echo "Year: " . $this->calculator->getYear() . "\n";
        echo "Tax: $" . $tax . "\n";
    }
}