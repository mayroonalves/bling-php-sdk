<?php

require_once "../vendor/autoload.php";

use Bling\Core\Config;
use Bling\Services\Product;

$product = new Product(Config::configure('api-token'));

$product->setCode('viseirawilsoncore');
// $product->setProvider();
$product->setFilters([
    'estoque' => 'S',
    'imagem' => 'S',
    // 'loja' => ''
]);
echo $product->get();
