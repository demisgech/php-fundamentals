<?php

declare(strict_types=1);

/**
 *Free Shipping Discount: This could be a separate discount where only shipping is discounted.
 *
 * Example: Free shipping if the total order is over $50.
 */
#[Component]
class FreeShippingDiscountCalculator implements DiscountCalculator
{
    public function calculate(float $orderAmount, float $discountPercentage = 0): float
    {
        return $orderAmount >= 50 ? 0 : 10; // $10 shipping cost if the order is less than $50
    }
}
