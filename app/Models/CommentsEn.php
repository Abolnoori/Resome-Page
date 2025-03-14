<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommentsEn extends Model
{
        protected $table = 'comments-en';
        protected $fillable = ['user','image','paragraph','name','position'];
        protected $hidden = ['id' , 'created_at' , 'updated_at'];
    
}
