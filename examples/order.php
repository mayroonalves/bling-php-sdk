<?php

require_once "../vendor/autoload.php";

use Bling\Core\Client;
use Bling\Core\Config;
use Bling\Services\Order;

$config = require_once 'config.php';

$client = Client::getInstance(Config::configure($config));
$order = new Order();

$order->setNumero('7');
echo $order->get();
