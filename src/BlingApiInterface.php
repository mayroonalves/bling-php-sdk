<?php

namespace Bling;

interface BlingApiInterface
{
    public function getClient();

    public function setClient($client);

    public function category();

    public function order();

    public function product();

    public function warehouse();
}
