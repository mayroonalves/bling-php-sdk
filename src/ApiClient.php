<?php

namespace Bling;

use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;
use Bling\Contracts\ApiClientInterface;
use Bling\Contracts\ApiClientRequestInterface;


class ApiClient implements ApiClientInterface, ApiClientRequestInterface
{
    /**
     * @return Client
     */
    public function initiate()
    {
        return new Client();
    }

    /**
     * @param string $url
     * @param array $options
     * @return ResponseInterface
     */
    public function get(string $url, array $options = []): ResponseInterface
    {
        return $this->initiate()->get($url, $options);
    }

    /**
     * @param string $url
     * @param array $options
     * @return ResponseInterface
     */
    public function delete(string $url, array $options = []): ResponseInterface
    {
        return $this->initiate()->delete($url, $options);
    }

    /**
     * @param string $url
     * @param array $options
     * @return ResponseInterface
     */
    public function patch(string $url, array $options = []): ResponseInterface
    {
        return $this->initiate()->patch($url, $options);
    }

    /**
     * @param string $url
     * @param array $options
     * @return ResponseInterface
     */
    public function put(string $url, array $options = []): ResponseInterface
    {
        return $this->initiate()->put($url, $options);
    }

    /**
     * @param string $url
     * @param array $options
     * @return ResponseInterface
     */
    public function post(string $url, array $options = []): ResponseInterface
    {
        return $this->initiate()->post($url, $options);
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
        return $this->initiate()->request($method, $url, $options);
    }
}
