<?php

require_once "../vendor/autoload.php";

$apiKey = 'oi';
Bling\Client::initialize($apiKey);

$product = \Bling\Services\Product::class;

echo $product->create();
