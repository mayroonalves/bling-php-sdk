<?php

require_once "../vendor/autoload.php";

use Bling\Services\Warehouse;

$warehouse = new Warehouse();

echo $warehouse->all();
