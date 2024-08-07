<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pros extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'qty',
        'description',
        'price',
    ];
}
