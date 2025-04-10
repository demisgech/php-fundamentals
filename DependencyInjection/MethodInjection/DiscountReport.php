<?php

declare(strict_types=1);

#[Component]
class DiscountReport
{
    private DiscountCalculator $calculator;

    #[InjectMethod]
    public function setDiscountCalculator(DiscountCalculator $calculator)
    {
        $this->calculator = $calculator;
    }

    public function showReport(float $discountableIncome, float $discountPercent = 0.0): void
    {
        $discount = $this->calculator->calculate($discountableIncome, $discountPercent);
        echo "Discount: $$discount \n";
    }
}