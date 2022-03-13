<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'name', 'services',
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function userHistory()
    {
        return $this->hasOneThrough(History::class, User::class);
    }
}
