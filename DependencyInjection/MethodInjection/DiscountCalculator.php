<?php

declare(strict_types=1);

interface DiscountCalculator
{
    public function calculate(float $discountableIncome, float $discountRate = 0.0): float;
}