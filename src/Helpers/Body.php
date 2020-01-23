<?php

namespace Bling\Helpers;

use Bling\Contracts\BodyInterface;

class Body implements BodyInterface
{
    public function __construct(BodyInterface $sender)
    {
        $this->sender = $sender;
    }

    public function setBody(array $data) : string
    {
        return $this->sender->setBody($data);
    }
}
