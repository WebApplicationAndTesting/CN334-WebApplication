<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $fillable = [
        'user_id', 'details',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getSupplierAttribute()
    {
        return $this->user->supplier;
    }
}
