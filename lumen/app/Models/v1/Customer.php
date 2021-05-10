<?php

namespace App\Models\v1;

use Jenssegers\Mongodb\Eloquent\Model;

class Customer extends Model
{
    protected $collection = 'Customer';

    protected $fillable = [
        'name',
        'register',
        'email',
        "companies"
    ];
}