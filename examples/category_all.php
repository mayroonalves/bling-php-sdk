<?php

require_once "../vendor/autoload.php";

use Bling\Core\Config;
use Bling\Services\Category;

$category = new Category(Config::configure('api-token'));

echo $category->all();
