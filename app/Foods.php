<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foods extends Model
{
    protected $fillable = [
        'name',
        'images',
        'description',
        'unit',
        'price'
    ];
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
