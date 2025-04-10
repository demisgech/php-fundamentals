<?php

declare(strict_types=1);

#[Component]
class PercentageDiscountCalculator implements DiscountCalculator
{
    private float $PERCENT = 100;

    public function calculate(float $orderAmount, float $discountPercentage = 0.0): float
    {
        return $orderAmount * ($discountPercentage / $this->PERCENT);
    }
}