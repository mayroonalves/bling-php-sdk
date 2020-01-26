<?php

require_once "../vendor/autoload.php";

use Bling\Services\Warehouse;

$warehouse = new Warehouse();

$warehouse->setId('7384798252');
$warehouse->setBody([
    'descricao' => 'test',
    'desconsiderarSaldo' => true,
    'depositoPadrao' => true,
    'situacao' => 'A'
]);
echo $warehouse->update();
