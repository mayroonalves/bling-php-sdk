<?php

require_once "../vendor/autoload.php";

use Bling\Core\Config;
use Bling\Services\Product;

$product = new Product(Config::configure('api-token'));

echo $product->all();
