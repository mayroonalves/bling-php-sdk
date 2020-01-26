<?php

require_once "../vendor/autoload.php";

use Bling\Services\Warehouse;

$warehouse = new Warehouse();

$warehouse->setId('759340278');
echo $warehouse->get();
