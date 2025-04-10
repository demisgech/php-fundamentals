<?php

declare(strict_types=1);

#[Component]
class TipCalculatorWithoutTax implements TipCalculator
{

    private float $PERCENT = 100;

    #[Value('checkAmount')]
    private float $checkAmount;

    #[Value('tipPercent')]
    private float $tipPercent = 0;

    public function calculateTip(): float
    {
        return $this->checkAmount * ($this->tipPercent / $this->PERCENT);
    }

    public function totalWithTip(): float
    {
        return $this->checkAmount + $this->calculateTip();
    }
}