<?php

namespace Bling\Services;

class Product implements Client {

    public function create()
    {
        $this->post();
    }
}
