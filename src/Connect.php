<?php

namespace Bling;

use Bling\Contracts\ApiClientRequestInterface;

class Connect
{
    const BASE_URL = "https://bling.com.br/Api/v2/";
    const API_KEY = 'e38f87f6fa4c8bab16f74ab5374730f44ce534e7102fb7b495347874cad9a9e874c83a4e';
    const DEBUG = false;
    const HTTP_ERRORS = false;

    /**
     * @var ApiClientRequestInterface
     */
    private static $apiClient;

    /**
     * @var ReadResponse
     */
    private static $readResponse;

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

    public static function getInstance(ApiClientRequestInterface $apiClient, ReadResponse $readResponse)
    {
        self::$apiClient    = $apiClient;
        self::$readResponse = $readResponse;

        if (self::$instance === null)
            self::$instance = new self;
        return self::$instance;
    }

    /**
     * Send a request to the api and return the response
     *
     * @param string $method
     * @param array $parameters
     * @param string $url
     * @param bool $customContentType set to true if you have a Content-Type header defined
     * @return string
     * @throws \Exception
     */
    public function execute(string $method = "get", array $parameters = [], string $url = "", $customContentType = false): string
    {
        $fullUrl = $this->formatUrl($url);
        // $queryParameters = $this->getQueryParameters($method, $parameters);
        // echo '<pre>';
        // var_dump($fullUrl, $method, $this->mergeHeaders($queryParameters));
        // echo '</pre>';
        // exit;

        if ($customContentType) {
            $response = self::$apiClient->request($method, $fullUrl, $this->mergeHeaders($parameters));
        } else {
            $queryParameters = $this->getQueryParameters($method, $parameters);
            $response        = self::$apiClient->$method($fullUrl, $this->mergeHeaders($queryParameters));
        }

        return self::$readResponse->getResponseContents($response);
    }

    /**
     * Merge any headers from the api-wrapper config file with any custom headers for this request
     *
     * @param array $parameters
     * @return array
     */
    private function mergeHeaders(array $parameters): array
    {
        return array_merge($parameters, ['debug' => self::DEBUG, 'http_errors' => self::HTTP_ERRORS]);
    }


    /**
     * @param string $method
     * @param array $parameters
     * @return array
     */
    public function getQueryParameters(string $method, array $parameters): array
    {
        switch ($method) {
            case "get":
                return self::$apiClient->formatGetParameters($parameters + ['apikey' => self::API_KEY]);
                break;
            default:
                return self::$apiClient->formatRequestParameters($parameters + ['apikey' => self::API_KEY]);
                break;
        }
    }

    private function formatUrl(string $url)
    {
        $fullUrl = self::BASE_URL;
        if (!empty($url)) {
            $fullUrl .= $url;
        }

        return $fullUrl;
    }
}
