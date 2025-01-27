<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bot extends Model
{
        protected $table = 'bot';
        protected $fillable = ['user','userid','token'];
}
