<?php

require_once "../vendor/autoload.php";

use Bling\Services\Order;

$order = new Order();

$order->setBody([
    'obs' => 'test',
    // 'idCategoriaPai' => 1
]);
echo $order->store();
