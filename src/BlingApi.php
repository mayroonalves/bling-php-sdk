<?php

namespace Bling;

use Bling\Core\Client;
use Bling\Services\Category;
use Bling\Services\Order;
use Bling\Services\Product;
use Bling\Services\Warehouse;

class BlingApi implements BlingApiInterface
{
    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @return mixed
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param mixed $client
     */
    public function setClient($client): void
    {
        $this->client = $client;
    }

    public function category()
    {
        return new Category();
    }

    public function order()
    {
        return new Order();
    }

    public function product()
    {
        return new Product();
    }

    public function warehouse()
    {
        return new Warehouse();
    }
}
