<?php

namespace Bling\Services;

use Bling\Helpers\XMLBody;
use Bling\Helpers\Body;

class Warehouse extends Base
{
    private $id = '';

    /**
     * @return string
     */
    public function getId(): string
    {
        return ($this->id ? '/' : '') . ltrim($this->id, '/');
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param array $body
     */
    public function setBody(array $body): void
    {
        $this->body = ['xml' => (new Body(new XMLBody('depositos')))->setBody(['deposito' => $body])];
    }

    public function all()
    {
        return $this->connect
            ->execute('get', $this->getMergedParameters(), "depositos{$this->getResponseType()}");
    }

    public function get()
    {
        return $this->connect
            ->execute('get', $this->getMergedParameters(), "deposito{$this->getId()}{$this->getResponseType()}");
    }

    public function store()
    {
        return $this->connect
            ->execute('post', $this->getMergedParameters(), "deposito{$this->getResponseType()}/");
    }

    public function update()
    {
        return $this->connect
            ->execute('put', $this->getMergedParameters(), "deposito{$this->getId()}{$this->getResponseType()}/");
    }
}
