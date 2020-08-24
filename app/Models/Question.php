<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['image', 'name', 'state', 'user_id'];
    protected $casts = [
        'state' => 'boolean',
    ];

    
    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}
