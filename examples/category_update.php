<?php

require_once "../vendor/autoload.php";

use Bling\Core\Config;
use Bling\Services\Category;

$category = new Category(Config::configure('api-token'));

$category->setId(10);
$category->setBody([
    'descricao' => 'test',
    // 'idCategoriaPai' => 1
]);
echo $category->store();
