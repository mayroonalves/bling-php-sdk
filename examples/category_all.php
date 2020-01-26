<?php

require_once "../vendor/autoload.php";

use Bling\Services\Category;

$category = new Category();

echo $category->all();
