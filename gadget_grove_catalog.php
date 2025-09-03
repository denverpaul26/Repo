<?php
// Task 1
$names = ["Wireless Mouse", "Mechanical Keyboard", "USB-C Hub", "Portable Speaker"];
$prices = [25.99, 79.99, 34.50, 49.99];

echo "Products: " . implode(", ", $names) . "<br>";
echo "First Price: ₱" . $prices[0] . "<br>";
echo "Last Price: ₱" . $prices[count($prices)-1] . "<br><br>";

// Task 2
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

// Task 3
$catalog = [
    ["name" => "Wireless Mouse", "price" => 25.99],
    ["name" => "Mechanical Keyboard", "price" => 79.99],
    ["name" => "USB-C Hub", "price" => 34.50]
];

echo "--- Catalog ---<br>";
foreach ($catalog as $c) {
    echo $c["name"] . " - ₱" . $c["price"] . "<br>";
}
?>
