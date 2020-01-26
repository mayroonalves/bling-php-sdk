<?php

require_once "../vendor/autoload.php";

use Bling\Services\Category;

$category = new Category();

$category->setId(10);
$category->setBody([
    'descricao' => 'test',
    // 'idCategoriaPai' => 1
]);
echo $category->store();
