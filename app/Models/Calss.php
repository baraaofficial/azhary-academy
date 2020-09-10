<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Calss extends Model
{
    use SoftDeletes;


    protected $table = 'class';
    public $timestamps = true;
    protected $fillable = array('name');



    public function subject()
    {
        return $this->belongsToMany('App\Models\Subject');
    }

    public function course()
    {
        return $this->hasMany('App\Models\Course');
    }

    public function users()
    {
        return $this->hasMany('App\Models\User');
    }
}
