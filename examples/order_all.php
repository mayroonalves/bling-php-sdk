<?php

require_once "../vendor/autoload.php";

use Bling\Services\Order;

$order = new Order();

echo $order->all();
