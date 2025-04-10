<?php

declare(strict_types=1);


#[Component]
class TipCalculatorWithTax implements TipCalculator
{
    private float $PERCENT = 100;

    #[Value('checkAmount')]
    private float $chckAmount;

    #[Value('tipPercent')]
    private float $tipPercent = 0;

    #[Value('taxPercent')]
    private float $taxPercent = 0;

    public function calculateTip(): float
    {

        return $this->chckAmount * ($this->tipPercent / $this->PERCENT);
    }

    public function calculateTax(): float
    {
        return $this->chckAmount * ($this->taxPercent / $this->PERCENT);
    }

    public function totalWithTipAndTax(): float
    {
        return ($this->chckAmount + $this->calculateTip() - $this->calculateTax());
    }
}