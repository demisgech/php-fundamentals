<?php


declare(strict_types=1);

interface Criteria {
    public function meetCriteria(array $items):array;
}