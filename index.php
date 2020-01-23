<?php
error_reporting(E_ALL);
require_once "vendor/autoload.php";

use Bling\Services\Product;
$product = new Product();

echo $product->all();
