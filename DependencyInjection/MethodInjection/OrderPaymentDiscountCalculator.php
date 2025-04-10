<?php

declare(strict_types=1);


#[Component]
class OrderPaymentDiscountCalculator implements DiscountCalculator
{
    private float $PERCENT = 100;

    public function calculate(float $discountableIncome, float $discountRate = 0.0): float
    {
        return $discountableIncome * ($discountRate / $this->PERCENT);
    }
}