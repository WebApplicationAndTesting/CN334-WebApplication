<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programlang extends Model
{
    use HasFactory;
    protected $table = 'programlang';
    protected $fillable = [
        'lang',
    ];
}
