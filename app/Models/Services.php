<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
        protected $fillable = [
        'user',
        'title',
        'paragraph',

    
    ];
    protected $hidden = ['id' , 'created_at' , 'updated_at'];
}
