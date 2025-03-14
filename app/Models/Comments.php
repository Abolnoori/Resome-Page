<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
        protected $fillable = ['user','image','paragraph','name','position'];
        protected $hidden = ['id' , 'created_at' , 'updated_at'];
    
}
