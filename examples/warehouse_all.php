<?php

require_once "../vendor/autoload.php";

use Bling\Core\Client;
use Bling\Core\Config;
use Bling\Services\Warehouse;

$config = require_once 'config.php';

$client = Client::getInstance(Config::configure($config));
$warehouse = new Warehouse();

echo $warehouse->all();
