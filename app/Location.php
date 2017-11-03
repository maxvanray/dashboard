<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
        'name',
        'address',
        'city',
        'state',
        'zip',
        'floor',
        'contact',
        'contact_email',
        'contact_phone',
        'mon_from',
        'mon_to',
        'tues_from',
        'tues_to',
        'wed_from',
        'wed_to',
        'thur_from',
        'thur_to',
        'fri_from',
        'fri_to',
        'sat_from',
        'sat_to',
        'sun_from',
        'sun_to',
        'images',
        'description',
        'created_by',
        'last_edited_by',
    ];

}
