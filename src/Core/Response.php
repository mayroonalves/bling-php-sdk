<?php

namespace Bling\Core;

use Psr\Http\Message\ResponseInterface;

class Response
{
    /**
     * Read the PSR response after the api request is made
     * @param ResponseInterface $response
     * @return string
     * @throws \Exception
     */
    public function getResponseContents(ResponseInterface $response): string
    {
        // if ($response->getStatusCode() != 200) {
        //     throw new \Exception('Response status code is not 200, status code: ' . $response->getStatusCode());
        // }

        return $response->getBody()->getContents();
    }
}
