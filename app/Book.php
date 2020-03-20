<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // // Mass Assigment
    // protected $fillable = ['id', 'book', 'student_id'];

    public function student(){
    	return $this->belongsTo('App\Student');
    }
}
