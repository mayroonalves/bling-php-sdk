<?php

namespace Bling\Contracts;

use Psr\Http\Message\ResponseInterface;

interface ApiClientRequestInterface
{
    public function request(string $method, string $url, array $options = []);

    /**
     * @param string $url
     * @param array $options
     * @return ResponseInterface
     */
    public function get(string $url, array $options = []): ResponseInterface;

    /**
     * @param string $url
     * @param array $options
     * @return ResponseInterface
     */
    public function delete(string $url, array $options = []): ResponseInterface;

    /**
     * @param string $url
     * @param array $options
     * @return ResponseInterface
     */
    public function patch(string $url, array $options = []): ResponseInterface;

    /**
     * @param string $url
     * @param array $options
     * @return ResponseInterface
     */
    public function put(string $url, array $options = []): ResponseInterface;

    /**
     * @param string $url
     * @param array $options
     * @return ResponseInterface
     */
    public function post(string $url, array $options = []): ResponseInterface;

    /**
     * @param array $parameters
     * @return array
     */
    public function formatGetParameters(array $parameters): array;

    /**
     * @param array $parameters
     * @return array
     */
    public function formatRequestParameters(array $parameters): array;
}
