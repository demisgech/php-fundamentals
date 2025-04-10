<?php

declare(strict_types=1);

/**
 *Discount Based on Quantity: This discount applies when the customer buys a certain number of items.
 *
 * Example: 10% off if you buy 3 or more items
 */
#[Component]
class QuantityDiscountCalculator implements DiscountCalculator
{
    public function calculate(float $orderAmount, float $discountPercentage = 0.0): float
    {
        $quantity = floor($orderAmount / 100); // Assuming $100 per item
        if ($quantity >= 3) {
            return $orderAmount * 0.10; // 10% discount if 3 or more items
        }
        return 0;
    }
}
