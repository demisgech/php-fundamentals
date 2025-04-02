<?php


declare(strict_types=1);

require_once "autoload.php";

class OrCriteria implements Criteria {
    public function __construct(
        private Criteria $criteriaOne,
        private Criteria $criteriaTwo) {

    }

    public function meetCriteria(array $items): array {
        $firstCriteriaItems = $this->criteriaOne->meetCriteria($items);
        $secondCriteriaItems = $this->criteriaTwo->meetCriteria($items);

        $mergedArray = array_merge($firstCriteriaItems,$secondCriteriaItems);
        return array_unique($mergedArray,SORT_REGULAR) ?: [];
    }
}