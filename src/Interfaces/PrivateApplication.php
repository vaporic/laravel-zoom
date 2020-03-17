<?php

namespace vaporic\Zoom\Interfaces;

use vaporic\Zoom\Support\Request;

class PrivateApplication extends Base
{
    protected $request;

    public function __construct()
    {
        $this->request = (new Request)->bootPrivateApplication();
    }
}
