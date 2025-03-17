<?php

include_once "header.php";

$products = [
    [
        "id" => 1,
        "name" => "Apple",
        "price" => 10,

    ],
    [
        "id" => 2,
        "name" => "Banana",
        "price" => 20,

    ],
    [
        "id" => 3,
        "name" => "Lemon",
        "price" => 30,
    ]
];


$category = filter_input(INPUT_GET, "category", FILTER_VALIDATE_INT);
$product_id = filter_input(INPUT_GET, "product_id", FILTER_VALIDATE_INT);
;
$product_name = htmlspecialchars($_GET["product_name"], ENT_QUOTES, 'utf-8');
$product_price = filter_var($_GET['price'], FILTER_VALIDATE_INT);
$remove_tag = strip_tags($_GET['script']);
// if ($category === false || $product_id === false) {
//     die('');
// }

if ($category == false)
    $category = 1;
if ($product_id == false)
    $product_id = 1;

if ($product_name == false)
    $product_name = "Unknown";
function setValues() {
    global $product_id, $category, $product_name;
    $category = $_GET["category"];
    $product_id = $_GET["product_id"];
    $product_name = $_GET["product_name"];
}

setValues();
?>

<h1>Get input</h1>
<h2>Category: <?= $category; ?></h2>
<h2> product Id: <?= $product_id; ?></h2>
<h2> product Name: <?= $product_name; ?></h2>
<h2> product tag: <?= $remove_tag; ?></h2>
<h2> product price: <?= $product_price; ?></h2>
<div style="padding-left: 3rem;">
    <ul style="font-size:2rem;">
        <?php foreach ($products as $key => $product): ?>
            <li><?= $product['name'] . " " . $product['price'] ?></li>
        <?php endforeach ?>
    </ul>
</div>

<?php include_once "footer.php" ?>