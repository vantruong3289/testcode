<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = ['name', 'user_id', 'state', 'image'];
}
