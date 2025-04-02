<?php


declare(strict_types=1);

require_once "autoload.php";

class PriceCriteria implements Criteria {

    public function __construct(private float $maxPrice) {

    }

    public function meetCriteria(array $items): array {
        return array_filter($items, fn($item)=> $item['price'] <= $this->maxPrice) ?: [];
    }
}