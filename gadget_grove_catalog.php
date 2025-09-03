<?php
// Helper: works both in CLI and browser
$nl = (php_sapi_name() === "cli") ? PHP_EOL : "<br>";

// -----------------------
// Task 1: Basic Product List (Indexed Array)
// -----------------------
$productNames = ["Wireless Mouse", "Mechanical Keyboard", "USB-C Hub", "Portable Speaker"];
$productPrices = [25.99, 79.99, 34.50, 49.99];

echo "Product Names: " . implode(", ", $productNames) . $nl;
echo "First product price: ₱" . number_format($productPrices[0], 2) . $nl;
echo "Last product price: ₱" . number_format($productPrices[count($productPrices) - 1], 2) . $nl;

echo $nl;

// -----------------------
// Task 2: Detailed Product View (Associative Array)
// -----------------------
$productDetail = [
    "name" => "Mechanical Keyboard",
    "price" => 79.99,
    "brand" => "KeyTech",
    "inStock" => true,
    "description" => "Durable mechanical keyboard with customizable RGB lighting.",
    "warranty" => "2 years"
];

echo "Product: " . $productDetail["name"] . $nl;
echo "Brand: " . $productDetail["brand"] . $nl;
echo "Price: ₱" . number_format($productDetail["price"], 2) . $nl;
echo "In Stock: " . ($productDetail["inStock"] ? "Yes" : "No") . $nl;
echo "Warranty: " . $productDetail["warranty"] . $nl;

echo $nl;

// -----------------------
// Task 3: Full Catalog (Multidimensional Array)
// -----------------------
$catalog = [
    ["id" => 1, "name" => "Wireless Mouse", "price" => 25.99, "inStock" => true],
    ["id" => 2, "name" => "Mechanical Keyboard", "price" => 79.99, "inStock" => true],
    ["id" => 3, "name" => "USB-C Hub", "price" => 34.50, "inStock" => false]
];

echo "--- Full Catalog ---" . $nl;
foreach ($catalog as $product) {
    echo "Product: " . $product["name"] . " - Price: ₱" . number_format($product["price"], 2) . $nl;
}
?>
