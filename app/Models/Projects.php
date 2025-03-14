<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
        protected $fillable = ['user','image','proname','paragraph'];
    
        protected $hidden = ['id' , 'created_at' , 'updated_at'];

}
