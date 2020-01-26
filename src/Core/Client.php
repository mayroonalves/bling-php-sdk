<?php

namespace Bling\Core;

use Psr\Http\Message\ResponseInterface;
use Bling\Contracts\RequestInterface;

class Client implements RequestInterface
{
    private static $client;

    /**
     * @var instance
     */
    private static $instance;

    private function __construct()
    {
    }

    private function __wakeup()
    {
    }

    private function __clone()
    {
    }

    public static function getInstance(array $config = [])
    {
        if (self::$instance === null) {
            self::$client = new \GuzzleHttp\Client($config);
            self::$instance = new self;
        }
        return self::$instance;
    }

    /**
     * @return \GuzzleHttp\Client
     */
    public function getClient(): \GuzzleHttp\Client
    {
        return self::$client;
    }

    /**
     * @param string $url
     * @param array $options
     * @return ResponseInterface
     */
    public function get(string $url, array $options = []): ResponseInterface
    {
        return self::$client->get($url, $options);
    }

    /**
     * @param string $url
     * @param array $options
     * @return ResponseInterface
     */
    public function delete(string $url, array $options = []): ResponseInterface
    {
        return self::$client->delete($url, $options);
    }

    /**
     * @param string $url
     * @param array $options
     * @return ResponseInterface
     */
    public function patch(string $url, array $options = []): ResponseInterface
    {
        return self::$client->patch($url, $options);
    }

    /**
     * @param string $url
     * @param array $options
     * @return ResponseInterface
     */
    public function put(string $url, array $options = []): ResponseInterface
    {
        return self::$client->put($url, $options);
    }

    /**
     * @param string $url
     * @param array $options
     * @return ResponseInterface
     */
    public function post(string $url, array $options = []): ResponseInterface
    {
        return self::$client->post($url, $options);
    }

    /**
     * @param array $parameters
     * @return array
     */
    public function formatGetParameters(array $parameters): array
    {
        return ['query' => $parameters];
    }

    /**
     * @param array $parameters
     * @return array
     */
    public function formatRequestParameters(array $parameters): array
    {
        return ['form_params' => $parameters];
    }

    public function request(string $method, string $url, array $options = [])
    {
        return self::$client->request($method, $url, $options);
    }
}
