<?php

$names = ["Wireless Mouse", "Mechanical Keyboard", "USB-C Hub", "Portable Speaker"];
$prices = [25.99, 79.99, 34.50, 49.99];

echo "Products names: " . implode(", ", $names) . "<br>";
echo "First product price: ₱" . $prices[0] . "<br>";
echo "Last product price: ₱" . $prices[count($prices)-1] . "<br><br>";


$product = [
    "name" => "Mechanical Keyboard",
    "price" => 79.99,
    "brand" => "KeyTech",
    "stock" => true,
    "warranty" => "2 years"
];

echo "Name: " . $product["name"] . "<br>";
echo "Brand: " . $product["brand"] . "<br>";
echo "Price: ₱" . $product["price"] . "<br>";
echo "Stock: " . ($product["stock"] ? "Yes" : "No") . "<br>";
echo "Warranty: " . $product["warranty"] . "<br><br>";


$catalog = [
    ["name" => "Wireless Mouse", "price" => 25.99],
    ["name" => "Mechanical Keyboard", "price" => 79.99],
    ["name" => "USB-C Hub", "price" => 34.50]
];

echo "--- Full Catalog ---<br>";
foreach ($catalog as $c) {
    echo $c["name"] . " - ₱" . $c["price"] . "<br>";
}
?>
