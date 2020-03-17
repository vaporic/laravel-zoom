<?php

namespace vaporic\Zoom;

use vaporic\Zoom\Support\Model;

class CustomQuestion extends Model
{
    const KEY_FIELD = 'title';

    protected $methods = [];

    protected $attributes = [
        'title' => '', // string
        'value' => '', // string
    ];

    protected $createAttributes = [
        'title',
        'value',
    ];

    protected $updateAttributes = [
        'title',
        'value',
    ];
}
