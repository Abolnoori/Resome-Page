<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Counters extends Model
{
        protected $fillable = [
        'user',
        'hostory',
        'completion',
        'satisfied',
        'experience',

    ];
}
