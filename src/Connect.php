<?php

namespace Bling;

use Bling\Contracts\ApiClientRequestInterface;

class Connect
{
    const BASE_URL = "https://bling.com.br/Api/v2/";
    const API_KEY = 'e38f87f6fa4c8bab16f74ab5374730f44ce534e7102fb7b495347874cad9a9e874c83a4e';
    const DEBUG = true;

    /**
     * @var ApiClientRequestInterface
     */
    private $apiClient;
    /**
     * @var ReadResponse
     */
    private $readResponse;
    /**
     * @var Repository
     */
    // private $config;

    /**
     * Connect constructor.
     * @param ApiClientRequestInterface $apiClient
     * @param ReadResponse $readResponse
     * // * @param Repository $config
     */
    public function __construct(ApiClientRequestInterface $apiClient, ReadResponse $readResponse)
    {
        $this->apiClient = $apiClient;
        $this->readResponse = $readResponse;
    }



    /**
     * Send a request to the api and return the response
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
        $queryParameters = $this->getQueryParameters($method, $parameters);
        echo '<pre>';
        var_dump($fullUrl, $method, $this->mergeHeaders($queryParameters));
        echo '</pre>';
        // exit;

        if ($customContentType) {
            $response = $this->apiClient->request($method, $fullUrl, $this->mergeHeaders($parameters));
        } else {
            $queryParameters = $this->getQueryParameters($method, $parameters);
            $response = $this->apiClient->$method($fullUrl, $this->mergeHeaders($queryParameters));
        }

        return $this->readResponse->getResponseContents($response);
    }

    /**
     * Merge any headers from the api-wrapper config file with any custom headers for this request
     * @param array $parameters
     * @return array
     */
    private function mergeHeaders(array $parameters): array
    {
        return array_merge($parameters, ['debug' => self::DEBUG]);
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
                return $this->apiClient->formatGetParameters($parameters + ['apikey' => self::API_KEY]);
                break;
            default:
                return $this->apiClient->formatRequestParameters($parameters + ['apikey' => self::API_KEY]);
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
