<?php


declare(strict_types=1);

require_once "autoload.php";

class CategoryCriteria implements Criteria {

    public function __construct(private string $category) {

    }

    public function meetCriteria(array $items):array {
        return array_filter($items, fn($item)=> $item['category'] === $this->category) ?:[];
    }
}