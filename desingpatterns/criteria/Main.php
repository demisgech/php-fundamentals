<?php


declare(strict_types=1);

require_once "autoload.php";

$items = [
    ['name' => 'Item A', 'price' => 20, 'category' => 'Electronics', 'rating' => 4],
    ['name' => 'Item B', 'price' => 50, 'category' => 'Clothing', 'rating' => 3],
    ['name' => 'Item C', 'price' => 30, 'category' => 'Electronics', 'rating' => 5],
    ['name' => 'Item D', 'price' => 10, 'category' => 'Electronics', 'rating' => 2],
    ['name' => 'Item E', 'price' => 5, 'category' => 'Beauti', 'rating' => 5],
];

$priceCriteria = new PriceCriteria(30);
$categoryCriteria = new CategoryCriteria("Electronics");
$ratingCriteria = new RatingCriteria(3);

$andCriteria = new AndCriteria($priceCriteria,$categoryCriteria);
$againAndCriteria = new AndCriteria($andCriteria, $ratingCriteria);

$combinedFilteredItems = $againAndCriteria->meetCriteria($items);

echo "\n **** Combined Criteria ***** \n";
echo json_encode($combinedFilteredItems,JSON_PRETTY_PRINT);

$orCriteria = new OrCriteria($priceCriteria,$categoryCriteria);
$orCriteriaFiteredItems = $orCriteria->meetCriteria($items);

echo "\n **** Or Criteria ***** \n";
echo json_encode($orCriteriaFiteredItems,JSON_PRETTY_PRINT);
