<?php

namespace Bling\Services;

use Bling\Helpers\XMLBody;
use Bling\Helpers\Body;

class Product extends Base
{
    private $code = '';
    private $provider = '';
    private $page = 1;

    /**
     * @return string
     */
    public function getCode(): string
    {
        return ($this->code ? '/' : '') . ltrim($this->code, '/');
    }

    /**
     * @param string $code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getProvider(): string
    {
        return ($this->provider ? '/' : '') . ltrim($this->provider, '/');
    }

    /**
     * @param string $provider
     */
    public function setProvider(string $provider): void
    {
        $this->provider = $provider;
    }

    /**
     * @return int
     */
    public function getPage(): string
    {
        return ($this->page ? '/' : '') . ltrim($this->page, '/');
    }

    /**
     * @param int $page
     */
    public function setPage(int $page): void
    {
        $this->page = $page;
    }

    /**
     * @param array $body
     */
    public function setBody(array $body): void
    {
        $this->body = ['xml' => (new Body(new XMLBody('produto')))->setBody($body)];
    }

    public function all()
    {
        return $this->connect
            ->execute(
                'get',
                $this->getMergedParameters(),
                "produtos{$this->getPage()}{$this->getResponseType()}"
            );
    }

    public function get()
    {
        return $this->connect
            ->execute(
                'get',
                $this->getMergedParameters(),
                "produto{$this->getCode()}{$this->getProvider()}{$this->getResponseType()}"
            );
    }

    public function store()
    {
        return $this->connect
            ->execute('post', $this->getMergedParameters(), "produto{$this->getResponseType()}/");
    }

    public function update()
    {
        return $this->connect
            ->execute('post', $this->getMergedParameters(), "produto{$this->getCode()}{$this->getResponseType()}/");
    }

    public function destroy()
    {
        return $this->connect
            ->execute('delete', $this->getMergedParameters(), "produtos{$this->getCode()}");
    }
}
