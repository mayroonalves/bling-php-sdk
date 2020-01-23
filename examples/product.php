<?php

require_once "../vendor/autoload.php";

use Bling\Services\Product;

$product = new Product();

$product->setCode('viseirawilsoncore');
// $product->setProvider();
$product->setFilters([
    'estoque' => 'S',
    'imagem' => 'S',
    // 'loja' => ''
]);
echo $product->get();
