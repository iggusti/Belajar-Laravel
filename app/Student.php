<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Student extends Model
{
    use SoftDeletes;
    
    // Mass Assigment
    protected $fillable = ['nama', 'nim', 'email', 'password', 'jurusan', 'remember_token'];
    
    public function book(){
    	return $this->hasMany('App\book');
    }
}
