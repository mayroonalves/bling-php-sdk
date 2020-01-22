<?php

namespace Bling;

class Client
{

    private static $instance;
    private $apiKey;

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }

    public static function initialize(string $key)
    {
        if (self::$instance === null)
            self::$instance = new self;
        self::$apiKey = $key;

        return self::$instance;
    }

    public function post()
    {
        return 'foi';
    }
}
