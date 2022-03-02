<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        "name", "population"
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }
    
    public function posts() 
    { 
        return $this->hasManyThrough(Post::class, User::class); 
    }
}
