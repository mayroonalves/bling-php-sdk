<?php

require_once "../vendor/autoload.php";

use Bling\Core\Config;
use Bling\Services\Order;

$order = new Order(Config::configure('api-token'));

$order->setNumero('7');
$order->setBody([
    'obs' => 'test',
    // 'idCategoriaPai' => 1
]);
echo $order->update();
