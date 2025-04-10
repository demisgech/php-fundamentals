<?php

declare(strict_types=1);

/**
 *Loyalty Discount: A discount based on a customer's loyalty or membership.
 *
 * Example: 5% off for loyalty members.
 */
#[Component]
class LoyaltyDiscountCalculator implements DiscountCalculator
{
    private bool $isLoyalCustomer;

    public function __construct(bool $isLoyalCustomer)
    {
        $this->isLoyalCustomer = $isLoyalCustomer;
    }

    public function calculate(float $orderAmount, float $discountPercentage = 0.0): float
    {
        return $this->isLoyalCustomer ? $orderAmount * 0.05 : 0;
    }
}
