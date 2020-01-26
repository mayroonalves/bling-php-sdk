<?php

namespace Bling\Core;

class Config
{
    public static function configure(string $apiToken, bool $debug = false, bool $http_errors = false) : array
    {
        return [
            'base_uri' => 'https://bling.com.br/Api/v2/',
            'timeout' => 30,
            'query' => [
                'apikey' => $apiToken
            ],
            'debug' => $debug,
            'http_errors' => $http_errors,
        ];
    }
}
