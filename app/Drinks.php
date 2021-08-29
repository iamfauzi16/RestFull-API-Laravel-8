<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drinks extends Model
{
    //

    protected $fillable = [
        'name', 'description', 'unit', 'price', 'images'
    ];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
