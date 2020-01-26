<?php

require_once "../vendor/autoload.php";

use Bling\Services\Product;

$product = new Product();

$product->setCode('asdasdmirao');
echo $product->destroy();
