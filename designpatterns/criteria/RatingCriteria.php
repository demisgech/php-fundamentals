<?php


declare(strict_types=1);

require_once "autoload.php";

class RatingCriteria implements Criteria {

    public function __construct(private float $minRating) {

    }

    public function meetCriteria(array $items) : array {
        return array_filter($items,fn($item)=> $item['rating'] >= $this->minRating ) ?: [];
    }
}