<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
        protected $fillable = [
        'user',
        'title',
        'email',
        'name',
        'job1',
        'job2',
        'aboutmy',
    ];
}
