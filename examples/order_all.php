<?php

require_once "../vendor/autoload.php";

use Bling\Core\Config;
use Bling\Services\Order;

$order = new Order(Config::configure('api-token'));

echo $order->all();
