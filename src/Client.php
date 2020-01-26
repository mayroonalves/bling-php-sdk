<?php

namespace Bling;

class Client
{
    private $config;

    public function __construct(array $config = [])
    {
        $this->config = $config;
    }
}
