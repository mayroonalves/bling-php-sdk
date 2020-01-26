<?php

namespace Bling\Core;

class Config
{
    public static function configure(array $config = []) : array
    {
        return [
            'base_uri' => 'https://bling.com.br/Api/v2/',
            'timeout' => 30,
            'query' => [
                'apikey' => $config['apikey'] ?? null
            ],
            'debug' => $config['debug'] ?? false,
            'http_errors' => $config['http_errors'] ?? true,
        ];
    }
}
