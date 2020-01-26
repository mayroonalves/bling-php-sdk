<?php

require_once "../vendor/autoload.php";

use Bling\Core\Config;
use Bling\Services\Warehouse;

$warehouse = new Warehouse(Config::configure('api-token'));

echo $warehouse->all();
