<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['image', 'name', 'state', 'user_id'];
    protected $casts = [
        'state' => 'boolean',
    ];
}
