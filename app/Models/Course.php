<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;


    public function trainee(){
        return $this->hasMany('App\Models\Trainee');
    }

    public function trainor(){
        return $this->belongsTo('App\Models\Trainor');
    }
}
