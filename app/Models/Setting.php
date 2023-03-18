<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'time',
        'days',
        'location',
        'facebook',
        'insta',
        'twitter',
        'gmail',
        'logo',
        'phone',
        'email',
        'background',
    ];
}
