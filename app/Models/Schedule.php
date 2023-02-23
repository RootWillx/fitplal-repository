<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'availability',
        'available_at',
        'class'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'

    ];
}
