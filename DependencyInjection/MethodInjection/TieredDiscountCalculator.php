<?php

/**
 *Tiered Discount: Discounts that change based on the amount spent.
 *
 * Example: 5% off for orders over $100, 10% off for orders over $200.
 */

class TieredDiscountCalculator implements DiscountCalculator
{
    public
    function calculate(float $orderAmount, float $discountRate = 0.0): float
    {
        if ($orderAmount > 200) {
            return $orderAmount * 0.10; // 10% discount
        } elseif ($orderAmount > 100) {
            return $orderAmount * 0.05; // 5% discount
        }
        return 0; // No discount
    }
}