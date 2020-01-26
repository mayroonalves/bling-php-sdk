<?php

namespace Bling\Core;

use Psr\Http\Message\ResponseInterface;
use Bling\Contracts\ApiClientRequestInterface;

class ApiClient implements ApiClientRequestInterface
{
    private $client;

    public function __construct(array $config = [])
    {
        $this->client = new \GuzzleHttp\Client($config);
    }

    /**
     * @return \GuzzleHttp\Client
     */
    public function getClient(): \GuzzleHttp\Client
    {
        return $this->client;
    }

    /**
     * @param string $url
     * @param array $options
     * @return ResponseInterface
     */
    public function get(string $url, array $options = []): ResponseInterface
    {
        return $this->client->get($url, $options);
    }

    /**
     * @param string $url
     * @param array $options
     * @return ResponseInterface
     */
    public function delete(string $url, array $options = []): ResponseInterface
    {
        return $this->client->delete($url, $options);
    }

    /**
     * @param string $url
     * @param array $options
     * @return ResponseInterface
     */
    public function patch(string $url, array $options = []): ResponseInterface
    {
        return $this->client->patch($url, $options);
    }

    /**
     * @param string $url
     * @param array $options
     * @return ResponseInterface
     */
    public function put(string $url, array $options = []): ResponseInterface
    {
        return $this->client->put($url, $options);
    }

    /**
     * @param string $url
     * @param array $options
     * @return ResponseInterface
     */
    public function post(string $url, array $options = []): ResponseInterface
    {
        return $this->client->post($url, $options);
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
        return $this->client->request($method, $url, $options);
    }
}
