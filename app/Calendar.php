<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    protected $fillable = [
        'title',
        'description',
        'startDate',
        'endDate',
        'startTime',
        'endDate',
        'backgroundColor',
        'facilitator',
        'location',
        'createdBy'
    ];
}
