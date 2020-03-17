<?php

namespace vaporic\Zoom;

use vaporic\Zoom\Support\Model;

class Occurance extends Model
{
    const KEY_FIELD = 'occurrence_id';

    protected $attributes = [
        'occurrence_id' => '', // integer
        'start_time' => '', // string [date-time]
        'duration' => '', // integer
        'status' => '', // string
    ];
}
