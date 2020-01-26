<?php

require_once "../vendor/autoload.php";

use Bling\Services\Order;

$order = new Order();

$order->setNumero('7');
echo $order->get();
