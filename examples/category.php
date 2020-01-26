<?php

require_once "../vendor/autoload.php";

use Bling\Services\Category;

$category = new Category();

$category->setId('70802');
echo $category->get();
