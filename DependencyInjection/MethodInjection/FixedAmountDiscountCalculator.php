<?php

declare(strict_types=1);

/**
 * Fixed Amount Discount: This type of discount applies a fixed amount off the total price.
 * Example: $50 off on an order of $200
 */
#[Component]
class FixedAmountDiscountCalculator implements DiscountCalculator
{
    private float $discountAmount;

    public function __construct(float $discountAmount)
    {
        $this->discountAmount = $discountAmount;

    }

    public function calculate(float $discountableIncome, float $discountRate = 0.0): float
    {
        return $this->discountAmount;
    }
}