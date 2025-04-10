<?php

/**
 * Buy One Get One (BOGO): This type of discount involves offering a free item when a certain quantity is purchased.
 * Example: Buy 1, get 1 free
 */

#[Component]
class BogoDiscountCalculator implements DiscountCalculator
{

    public function calculate(float $orderAmount, float $discountRate = 0.0): float
    {
        // Assuming each unit price is $100, and the order has 2 items
        return floor($orderAmount / 100) * 100; // Only apply discount to the first item
    }
}