<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Links extends Model
{
        protected $fillable = [
        'user',
        'resome',
        'telegram',
        'instagram',
        'linkedin',
        'github',
    
    ];
}
