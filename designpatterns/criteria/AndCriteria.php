<?php


declare(strict_types=1);

require_once "autoload.php";

class AndCriteria implements Criteria {
    public function __construct(
        private Criteria $criteriaOne,
        private Criteria $criteriaTwo) {

    }

    public function meetCriteria(array $items): array {
        $firstCriteria = $this->criteriaOne->meetCriteria($items);
        return $this->criteriaTwo->meetCriteria($firstCriteria) ?: [];
    }
}