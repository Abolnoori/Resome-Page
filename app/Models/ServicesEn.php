<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServicesEn extends Model
{
    protected $table = 'services-en';
            protected $fillable = [
        'user',
        'title',
        'paragraph',

    
    ];
    protected $hidden = ['id' , 'created_at' , 'updated_at'];
}
