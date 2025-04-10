<?php

declare(strict_types=1);


#[Component]
class TipReport
{
    #[InjectField]
    private TipCalculator $calculator;

    public function showReport(): void
    {
        $tipAmount = $this->calculator->calculateTip();
        echo "Tip: $" . $tipAmount . "\n";
    }
}