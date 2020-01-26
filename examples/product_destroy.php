<?php

require_once "../vendor/autoload.php";

use Bling\Core\Client;
use Bling\Core\Config;
use Bling\Services\Product;

$config = require_once 'config.php';

$client = Client::getInstance(Config::configure($config));
$product = new Product();

$product->setCode('asdasdmirao');
echo $product->destroy();
