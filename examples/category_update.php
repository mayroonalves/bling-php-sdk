<?php

require_once "../vendor/autoload.php";

use Bling\Core\Client;
use Bling\Core\Config;
use Bling\Services\Category;

$config = require_once 'config.php';

$client = Client::getInstance(Config::configure($config));
$category = new Category();

$category->setId(10);
$category->setBody([
    'descricao' => 'test',
    // 'idCategoriaPai' => 1
]);
echo $category->store();
