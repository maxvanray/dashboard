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
        'description',
        'contact',
        'contact_email',
        'contact_phone',

        'sunday_from',
        'sunday_to',
        'sunday_notes',
        'closed_sunday',

        'monday_from',
        'monday_to',
        'monday_notes',
        'closed_monday',

        'tuesday_from',
        'tuesday_to',
        'tuesday_notes',
        'closed_tuesday',

        'wednesday_from',
        'wednesday_to',
        'wednesday_notes',
        'closed_wednesday',

        'thursday_from',
        'thursday_to',
        'thursday_notes',
        'closed_thursday',

        'friday_from',
        'friday_to',
        'friday_notes',
        'closed_friday',

        'saturday_from',
        'saturday_to',
        'saturday_notes',
        'closed_saturday',

        'images',
        'created_by',
        'last_edited_by',
    ];

}
